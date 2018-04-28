<?php

namespace App\Http\Controllers;

use App\Relation;
use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function showtasks()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $tasks = Task::orderBy('value')->get();
        return view('all_tasks', ['tasks' => $tasks]);
    }

    public function taskdetails($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $task = Task::findOrFail($id);
        $user_id = Auth::User()->id;
        $u = User::findOrFail($user_id)->tasks->contains($task);
        return view('taskdetails', ['task' => $task, 'u' => $u]);
    }

    public function checkflag($id, Request $request) {
        $task = Task::findOrFail($id);
        if ($task->flag == $request->test_flag)
        {
            $relation = new Relation();
            $relation->task_id = $id;
            $relation->user_id = Auth::User()->id;
            $relation->save();
            $user_id = Auth::User()->id;
            $user = User::findOrFail($user_id);
            $user->score += $task->value;
            $user->save();
        }
        return redirect('/task/'.$id);
    }

    public function showstandings()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $users = User::orderBy('score', 'desc')->get();
        return view('standings', ['users' => $users]);
    }
}
