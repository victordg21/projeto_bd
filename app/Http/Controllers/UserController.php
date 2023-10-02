<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {


        $users = User::where('name', 'LIKE',"%{$request -> search}%")->get();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id))
            return redirect()->back();

        return view('users.show',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request -> all();
        $data['password'] = bcrypt($request -> password);

        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = User::find($id))
            return redirect()->back();

        return view('users.edit', compact('user'));    
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id))
            return redirect()->back();

        $data = $request -> only('name', 'email', 'preferred_gender');
        if ($request -> password)
            $data['password'] = bcrypt($request -> password);

        $user -> update($data);

        return redirect() -> route('users.index');
    }

    public function destroy($id)
    {
        if (!$user = User::find($id))
            return redirect()->back();

        $user -> delete();
        return redirect() -> route('users.index');
    }
}