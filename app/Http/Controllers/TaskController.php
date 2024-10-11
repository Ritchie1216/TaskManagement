<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
class TaskController extends Controller
{
    public function fetchAllTasks(){
    
        $tasks = Tasks::all();
        return view('index',['tasks'=>$tasks]);
    }

    public function createTask(){
        return view('create');
    }

    public function addTask(Request $request){
        $request->validate([ // corrected from 'vaildate' to 'validate'
            'title'=>'required|max:255',
            'description'=>'required',
            'due_date'=>'required|date'
        ]);
    
        Tasks::create($request->all());
    
        return redirect()->route('index')->with('success','Task added successfully');
    }

    public function doneTask(Request $request, $id){
        $tasks = Tasks::findOrFail($id);
        

        $tasks->is_completed = true;
        $tasks->save();

        return redirect()->route('index')->with('success','Task marked as done successfully');
    }

    public function editTask($id){
        $task = Tasks::findOrFail($id);
        return view('edit', ['task' => $task]);
    }

    // Update task in database
    public function updateTask(Request $request, $id){
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'due_date' => 'required|date'
        ]);

        $task = Tasks::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('index')->with('success', 'Task updated successfully');
    }

    // Delete task from database
    public function deleteTask($id){
        $task = Tasks::findOrFail($id);
        $task->delete();

        return redirect()->route('index')->with('success', 'Task deleted successfully');
    }
}