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

        $features = ['Ahmed 1', 'Title 2', 'Title 3', 'Title 4'];

        return view('index', ['features' => $features]);
    }

    public function contact()
    {

        return view('contact');
    }
}
