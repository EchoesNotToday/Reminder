<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\PostIt;

class LinkController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function postit(){
        $postit = PostIt::where("user_id", "=", "1")->get();
        \Log::info($postit);
        return view('postit', [
            'datas' => [$postit]
        ]);
    }
    
    
    
}
