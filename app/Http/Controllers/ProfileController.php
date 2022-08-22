<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getInfo()
    {
        return [
            'UserName' => 'Ahmed',
            'Age' => 22,
            'URL' => route('profile.info', 123)
        ];
    }

    public function getUser()
    {
        $name = 'Welcome ' . request('name');

        return view('index', ['name' => $name]);
    }
}
