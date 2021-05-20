<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController
{

    public function getProfile()
    {
        if(session('userObj')){
            $userObj = session('userObj');
        }
        else {
            $userObj = User::getInstance();
            session(['userObj' => $userObj]);
        }
        return view('profile',['user' => $userObj]);
    }

    public function postProfile(Request $request) {
        $userObj = session('userObj');
        $userObj->setFirstname($request->input('firstname'));
        $userObj->setSurname($request->input('surname'));
        $userObj->setPhoneNum($request->input('phone'));
        $userObj->setAddress($request->input('address'));
        return view('profile',['user' => $userObj]);
    }

}
