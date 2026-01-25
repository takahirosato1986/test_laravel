<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
{

    private $todo;
    
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();
        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
    return view('todo.create');
    }

    public function store(TodoRequest $request)
    {
    $inputs = $request->all();
    $this->todo->fill($inputs);
    $this->todo->save();
    return redirect()->route('todo.index');
    }

    public function show($id)
    {
    $todo = $this->todo->find($id);
    return view('todo.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
    $todo = $this->todo->find($id);
    return view('todo.edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request, $id)
    {
    $inputs = $request->all();
    $todo = $this->todo->find($id);
    $todo->fill($inputs)->save();
    return redirect()->route('todo.show', $todo->id);
    }

    public function messages()
    {
    return [
        'content.required' => 'ToDoが入力されていません。',
        'content.max' => 'ToDoは :max 文字以内で入力してください。',
    ];
    }

    public function delete($id)
{
    $todo = $this->todo->find($id);
    $todo->delete();
    return redirect()->route('todo.index');
}

}
