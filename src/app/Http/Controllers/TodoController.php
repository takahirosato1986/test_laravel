<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo(); // Todoクラスインスタンス化
        $todos = $todo->all(); // todosテーブル全件取得

        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
    return view('todo.create');
    }

    public function store(Request $request)
{
    $inputs = $request->all();



    $content = $request->input('content');

    $todo = new Todo();
    
    $todo->fill($inputs);
    
    $todo->save();

    return redirect()->route('todo.index');
}
}
