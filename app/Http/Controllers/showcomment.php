<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showcomment extends Controller
{
    public function showcomment(){
       
        
      
    //   $r=  User::with('tasks')->where('id',Auth::id())->first();
    //    auth()->user()->com
    $r=    Comment::where('commentable_id',Auth::id())->get();
    $r
        return view('tasks.showcomment',compact('r'));
    }

}
