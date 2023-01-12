<?php

namespace App\Http\Controllers;


use App\Models\events;
use App\Models\registrations;
use App\Models\User;
use Illuminate\Http\Request;

class checkController extends Controller
{
    public function emailCheck(Request $request) {

        if ($request->ajax()) {
            $email = $request->get('email');

            $user = User::where('email', $email)->get();
            $rows = $user->count();

            if ($rows != 0 ) {
                echo "You have already registered with this email ";
                echo "<script>$('#submit').prop('disabled',true);</script>";
            }
            else {
                echo "<script>$('#submit').prop('disabled',false);</script>";
            }
        }
    }

    public function emailCheckRegistered(Request $request) {
        if ($request->ajax()) {


            $user = User::where('email', $request->get('email'))->first();
            $event = events::where('event_name', $request->get('event_name'))->first();
            $registered = registrations::where(['email' => $request->get('email')])->where(['event_id' => $event->event_id])->where(['payment_done' => true])->first();
            if($user == null) {
                echo 'false';
            }
            else{
                if ($registered != null){
                    echo 'registered';
                }
                else {
                    echo 'true';
                }
            }
        }
    }
}
