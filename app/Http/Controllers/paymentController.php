<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\registerations;
use App\Models\registrations;
use App\Models\teamMembers;
use App\Models\teams;
use App\Models\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class paymentController extends Controller
{


    public function createOrder(Request $request) {
        if ($request->ajax()) {

            $user = User::where('email', $request->registered_id)->first();
            $event = events::where('event_name', $request->event_name)->where('team_size', $request->team_size)->first();
            if ($user == null || $event == null){
                echo 'not registered';
            }
            else {
                $registered = registrations::where(['email' => $request->registered_id])
                    ->where(['event_id' => $event->event_id])
                    ->where(['payment_done' => true])
                    ->first();
                $register = null;
                if ($registered != null) {
                    if ($registered->payment_done) {
                        echo "paid";
                        return;
                    }
                    else{
                        $registered->amount = $event->amount;
                        $registered->save();
                        $register = $registered;
                    }
                }
                if($register == null) {
                    $register = registrations::create([
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'event_id' => $event->event_id,
                        'amount' => $event->amount,
                    ]);
                }
                if($event->event_id == 5){
                    $register->payment_done = true;
                    $register->save();
                    echo 'meme';
                    return;
                }
                $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
                $order = $api->order->create(array('receipt' => $register->id, 'amount' => $register->amount*100, 'currency' => 'INR'));

                $register->rp_order_id = $order->id;
                $register->save();

                $data = array(
                    'order_id' => $order['id'],
                    'amount' => $event->amount*100,
                    'name' => $user->name,
                    'email' => $user->email,
                    'contact' => $user->contact,
                    'event_name' => $event->event_name,
                    'rp_key' => env('RAZORPAY_KEY'),
                );
                echo json_encode($data);
            }
        }

    }

    public function checkout(Request $request) {
        if ($request->ajax()) {
            $data = $request->all();
//            dd($data['team_members'][0][1]);

            if ($data['team_name'] != null) {
                $event = events::where('event_name', $request->event_name)->where('team_size', $request->team_size)->first();
                $team = teams::create([
                    'team_name' => $data['team_name'],
                    'th_email' => $data['registered_id'],
                    'total_members' => $data['team_size'],
                    'event_id' => $event->id,
                ]);
               for ($x= 0; $x < sizeof($data['team_members']); $x++)  {
                   $teamMembers = teamMembers::create([
                       'team_id' => $team->id,
                       'member_name' => $data['team_members'][$x][0],
                       'college' => $data['team_members'][$x][1],
                       'branch' => $data['team_members'][$x][2],
                    ]);
                }
            }
            $register = registrations::where('rp_order_id', $data['razorpay_order_id'])->first();
            $register->payment_done = true;
            $register->rp_payment_id = $data['razorpay_payment_id'];
            $register->rp_signature = $data['razorpay_signature'];

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $rp_payment_id = $data['razorpay_payment_id'];
            try{
                $attributes = array(
                    'razorpay_signature' => $data['razorpay_signature'],
                    'razorpay_payment_id' => $data['razorpay_payment_id'],
                    'razorpay_order_id' => $data['razorpay_order_id']
                );
                $order = $api->utility->verifyPaymentSignature($attributes);
                $status = true;

            }catch(SignatureVerificationError $e){

                $status = false;
            }
            if($status){
                $register->save();


                echo 'true';
            }else{
                    echo 'false';
            }
        }

    }

}
