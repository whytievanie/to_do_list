<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Task;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('todolist.index', 
        [
            'tasks' => DB::table('tasks')->paginate(7)
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('todolist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        Task::create($request->post());

        return redirect()->route('todolist.index')->with('success','Task has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Task $task
    * @return \Illuminate\Http\Response
    */
    public function show(Task $task, $id)
    {
        $task = Task::find($id);
        return view('todolist.show',compact('task'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Task $task
    * @return \Illuminate\Http\Response
    */
    public function edit(Task $task, $id)
    {
        $task = Task::find($id);
        return view('todolist.edit',compact('task'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Task $task
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Task $task, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $task = Task::find($id);
        
        $task->update($request->all());

        return redirect()->route('todolist.index')->with('success','Task Has Been updated successfully');
    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Task $task
    * @return \Illuminate\Http\Response
    */
    public function destroy(Task $task, $id)
    {
        Task::find($id)->delete();
        return redirect()->route('todolist.index')->with('success','Task has been deleted successfully');
    }

}
