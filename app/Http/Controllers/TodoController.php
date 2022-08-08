<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('welcome', ['todos' => Todo::orderBy('id', 'DESC')->get()]);
    }

    public function edit(Todo $todo)
    {
        return response()->json($todo);
    }

    public function store(Request $request)
    {
        $todo = Todo::updateOrCreate(
            ['id'=>$request->id],
            ['name'=>$request->name]
        );

        return response()->json($todo);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json('success');
    }

}
