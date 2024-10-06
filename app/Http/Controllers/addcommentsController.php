<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addcommentsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       auth()->user()->comments()->create([
'comment'=>$request->comment
       ]);
       return redirect()->back();
    }
}
