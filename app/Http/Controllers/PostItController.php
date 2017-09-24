<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\PostIt;
use Illuminate\Support\Facades\Auth;

class PostItController extends Controller
{
    public function displayPostIt(){
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->get();
        return view('postit', [
            'datas' => [$postit]
        ]);
    }
    public function addPostIt(){
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->insert(array(
            'user_id' => $id,
            'titre' => $_POST['title'],
            'contenu' => $_POST['contenu'],
            'couleur' => $_POST['couleur']
        ));
        $message = "Vous avez bien ajouté le postit";
        return view('home');
    }
    public function deletePostIt(){
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->get();
        return view('postit', [
            'datas' => [$postit]
        ]);
    }
}
