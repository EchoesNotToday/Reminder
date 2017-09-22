<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function home(){
        return view('home');
    }
    public function postit(){
        $postit = \App\PostIt::findOrFail(1);
        return view('postit', [
            'postits' => [$postit]
        ]);
    }
    
    
    
}
