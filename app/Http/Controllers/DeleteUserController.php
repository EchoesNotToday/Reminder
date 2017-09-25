<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User;
class DeleteUserController extends Controller
{
	public function deleteCurrentUser(){
		$user_id = Auth::user()->id;
		$delete = User::where("id",'=',"$user_id")->delete();
		return redirect('/');
	}
}
