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
            'datas' => $postit
            ]);
    }
    public function addPostIt(){
        switch ($_POST['optradio']) {
            case 'vert':
                $couleur = "greenPost";
                break;
            case 'orange':
                $couleur = "orangePost";
                break;
            case 'rouge':
                $couleur = "redPost";
                break;
        }
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->insert(array(
            'user_id' => $id,
            'titre' => $_POST['title'],
            'contenu' => $_POST['contenu'],
            'couleur' => $couleur,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ));
        $message = "Vous avez bien ajouté le postit";
        return redirect('postit');
    }
    public function deletePostIt($postit_id){
        $delete = PostIt::where('id', '=', "$postit_id")->delete();
        $note = "Post-it Supprimé.";
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=", "$id")->get();
        return redirect('postit');
    }
    public function deleteAllPostIt(){
        $id = Auth::user()->id;
        $postit = PostIt::where("user_id", "=" , "$id")->delete();
        return redirect('postit');
   }
    public function search(){
        $id = Auth::user()->id;
        $word = $_POST['search'];
        $search = PostIt::where([
            ["user_id", "=", "$id"],
            ["titre", "=", "$word"]
            
            ])->get();
        return view('postit',['datas' => $search]);
   }
}
