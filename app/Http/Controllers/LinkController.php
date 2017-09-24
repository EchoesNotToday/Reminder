<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\PostIt;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function postit(){
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->get();
        return view('postit', [
            'datas' => [$postit]
        ]);
    }
    
    
    
}
