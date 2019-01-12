<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Session;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.show')->with('tasks', $tasks);
    }

    public function store(Request $request)
    {
        $task = new Task($request->todo);

        $task->save();

        Session()->flash('sucsess', 'Your Task Has Been Created.');

        return redirect()->back();
    }

    public function delete($id)
    {
        $task = Task::find($id);

        $task->delete();

        Session()->flash('sucsess', 'Your Task Has Been Deleted.');

        return redirect()->back();
    }

    public function update($id)
    {
        $task = Task::find($id);

        return view('tasks.update')->with('task', $task);
    }

    public function save(Request $request, $id)
    {
        $task = Task::find($id);

        $task->todo = $request->todo;
        $task->progress = $request->progress;

        $task->save();

        Session()->flash('sucsess', 'Your Task Has Been Updated.');

        return redirect()->route('task.all');
    }

    public function complete($id)
    {
        $task = Task::find($id);

        $task->completed = 1;

        $task->save();

        Session()->flash('sucsess', 'Your Task Has Been Completed.');

        return redirect()->back();
    }
}
