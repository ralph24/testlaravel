<?php

namespace laraveltest\Http\Controllers;

use Illuminate\Http\Request;
use laraveltest\User;
use laraveltest\Http\Requests;

class PagesController extends Controller
{
    public function home(){
        $users= User::orderBy('id', 'DESC')
                ->take(10)
                ->get();
        return view('pages/home', compact('users'));
    }
}
