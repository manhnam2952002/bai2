<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }

    public function prRegister(Request $request){
        $fullname = $request->get('fullname');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
        return view('user.register-success')
            ->with('fullName', $fullname)
            ->with('email', $email)
            ->with('phone', $phone)
            ->with('address', $address)
            ->with('identityCard', $identityCard);
    }

}
