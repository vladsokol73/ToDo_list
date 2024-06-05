<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TaskController extends Controller
{
    public function show(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        if (auth()->check()) {
            $id = auth()->user()->id;
            $tasks = Tasks::query()->where('user_id', '=', $id)->get();

            return view('tasks.show', ['tasks' => $tasks]);
        } else {
            return view('auth.login');
        }
    }

    public function addTask()
    {
        if (auth()->check()) {
            return view('tasks.add');
        }
    }

    public function saveTask(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        if (auth()->check()) {
            $id = auth()->user()->id;
            Tasks::query()->create($request->all() + ['user_id' => $id]);
        }
        return redirect('/profile');
    }

    public function removeTask(Request $request, $id): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        if (auth()->check()) {
            Tasks::query()->findOrFail($id)->delete();
        }
        return redirect('/profile');
    }
}
