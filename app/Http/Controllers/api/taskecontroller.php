<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class taskecontroller extends Controller
{
    public function createBlog(Request $request){
        $post = Task::create([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'status' => $request->input('status'),
           
        ]);
        $tasks= User::where('id',Auth::id())->first()->tasks()->attach( $post); 
        return response()->json($post, 201);
    }

    
    /**
     * Get the blog information by id.
     *
     * @param integer $id
     * @return JsonResponse
     */
    public function getBlogById(int $id)
    {
        $post = Task::findOrFail($id);
        return response()->json($post);
    }

    /**
     * Function is used to update the blog.
     *
     * @param Request $request
     * @param integer $id
     * @return JsonResponse
     */
    public function updatetask(Request $request, int $id)
    {
        $post = Task::findOrFail($id);
        $post->update([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
            'status' => $request->input('status'),
        ]);
        return response()->json($post);
    }

    /**
     * Function is used to delete the blog.
     *
     * @param integer $id
     * @return void
     */
    public function deletetask(int $id)
    {
        $post = Task::findOrFail($id);
        $post->delete();
        return response()->noContent();
    }

}
