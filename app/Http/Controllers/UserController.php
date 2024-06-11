<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function update(UpdateRequest $request)
    {
        auth()->user()->update($request->validated());

        session()->flash('success', 'Вы успешно отредактировали профиль.');

        return back();
    }

}
