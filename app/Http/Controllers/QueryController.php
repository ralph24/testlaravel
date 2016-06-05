<?php

namespace laraveltest\Http\Controllers;

use Illuminate\Http\Request;
use laraveltest\User;
use laraveltest\Http\Requests;

class QueryController extends Controller
{
    public function getAll(){
        $users = User::all();
        return view('query.all', compact('users'));
    }
}
