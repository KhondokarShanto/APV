<?php

namespace App\Http\Controllers\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{


    function index()
    {
      return view ('frontpage.taskpage.index');
    }
    function showTask()
    {
      $tasks = Task::all();
      return view('backend.task',compact('tasks'));
    }
    function createTask()
    {
      return view('backend.createTask');
    }

  function create(Request $request)
  {
    Task::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,


    ]);
    return back();

  }
}
