<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function home(){
        return view('userview.home');
    }
    public function about(){
        return view('userview.about');
    }

    public function article(){
        return view('userview.article');
    }
    public function contact(){
        return view('userview.contact');
    }

    public function event(){
        return view('userview.event');
    }

    public function product(){
        return view('userview.product');
    }

}
