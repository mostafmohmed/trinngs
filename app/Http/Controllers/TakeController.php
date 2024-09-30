<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function createcomment($id){
     $task=   Task::find($id);
        return view('tasks.addcomment',compact('task'));
    }
    public function storecomment(Request $request){
Task::find($request->id)->comments()->create([
    'comment'=>$request->comments
]);
         return redirect()->route('task.index');
    }

    public function index()
    {
     $tasks=   auth()->user()->tasks()->get();
  
        return view('dashboard',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    // $validated = $request->validate([
    //     'title' => 'required|min:255|string',
    //     'desc' => 'required|string',
    // ]);
 $task= Task::create([
    'title'=>  $request->title,
    'desc'=>  $request->desc,
    'status'=>  $request->status,
]);
       $tasks= User::where('id',Auth::id())->first()->tasks()->attach($task); 
       Session::flash('susess','sucess create');
       return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        try {
            $task=Task::find( $id);
            return view('tasks.edite',compact('task'));
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Operation failed: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $task=Task::find(  $request->id);
            $task->title=$request->title;
            $task->status=$request->status;
            $task->save();
            return redirect()->route('task.index');
          
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Operation failed: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $task=Task::find( $id);
            $task->delete();
          
            return response()->json(['sucess'=>'gfgfgfg','status'=>true]);
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Operation failed: ' . $e->getMessage());
        }
    }
}
