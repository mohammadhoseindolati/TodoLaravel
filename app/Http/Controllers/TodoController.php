<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $users = Todo::all() ;
        return view('todo.index' , [ 'users' => $users]) ;
    }

    public function create ()
    {
        return view('todo.create');
    }

    public function store(NewTodoRequest $request)
    {
        Todo::query()->create(
            [
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
            ]
        );

        return redirect('/todo') ;
    }

    public function destroy(Todo $user)
    {
        $user->delete() ;

        return redirect('/todo') ;
    }

    public function edit(Todo $user)
    {
        return view('todo.edit' , ['user' => $user]) ;
    }

    public function update(UpdateTodoRequest $request , Todo $user)
    {
        $user->update([
            'firstname' => $request->get('firstname') ,
            'lastname' => $request->get('lastname') ,
        ]) ;
        return redirect('/todo');
    }

    public function show(Todo $user)
    {
        return view('todo.view' , ['users' => $user]) ;
    }
}
