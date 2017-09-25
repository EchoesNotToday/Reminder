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
            'couleur' => $_POST['couleur'],
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ));
        $message = "Vous avez bien ajouté le postit";
        return view('home', ['message' => $message]);
    }
    public function deletePostIt($postit_id){
        $delete = PostIt::where('id', '=', "$postit_id")->delete();
        return redirect('postit');
    }
}
