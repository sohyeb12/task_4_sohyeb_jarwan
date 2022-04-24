<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('name')->get();
        return view('child', compact('tasks'));
    }


    public function store(Request $request)
    {
        $tasks = new Task();
        $tasks->name = $request->name;
        $tasks->save();

        return redirect()->back();
    }


    public function edit($id)
    {
        $task = Task::select('id', 'name')->find($id);

        $tasks = Task::orderBy('name')->get();

        return view('child', compact('task', 'tasks'));
    }


    public function update(Request $request)
    {
        $task = Task::where('id', '=', $request->id)->update(['name' => $request->name]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->back();
    }
}
