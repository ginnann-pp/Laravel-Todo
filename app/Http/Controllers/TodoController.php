<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpHandler;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index')
            ->with(['todos' => $todos]);
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();

        return redirect()
            ->route('todo.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()
            ->route('todo.index');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit')
        ->with(['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->title = $request->title;
        $todo->save();

        return redirect()
            ->route('todo.index');
    }

}
