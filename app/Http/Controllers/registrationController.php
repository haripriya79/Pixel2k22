<?php

namespace App\Http\Controllers;

use App\Mail\welcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class registrationController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(Request $data) {
        if ($data->ajax()) {
            $user = User::create([
                'name' => $data->get('name'),
                'email' => $data->get('email'),
                'contact' => $data->get('contact'),
                'branch' => $data->get('branch'),
                'admnno' => $data->get('admnno'),
                'college' => $data->get('college'),
                'location' =>$data->get('location'),
            ]);
            Mail::to($user->email)->send(new welcomeMail($user));
            $success = "false";
            if ($user) {
                $success = "true";
            }
            echo($success);
        }


    }
}
