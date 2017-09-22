<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\PostIt;

class PostItController extends Controller
{
    
    public function index(){
        $postit = PostIt::get();
        return view('postits', ['postits' =>  $postit]);
    }
    
    
    /*public function insertPostIt(){
        DB::table('post_it')->insert([
            ''
        ]);
    }*/
    
}
