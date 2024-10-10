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
}