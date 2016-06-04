<?php

namespace laraveltest\Http\Controllers;

use Illuminate\Http\Request;

use laraveltest\Http\Requests;

class PagesController extends Controller
{
    public function home(){
        return view('pages/home');
    }
}
