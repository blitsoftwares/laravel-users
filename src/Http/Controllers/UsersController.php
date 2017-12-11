<?php

namespace Blit\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Blit\Users\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller{

    public function index()
    {
        $users = User::orderBy('name')->paginate(10);

        return view('BlitUsers::users.index')
            ->with('users',$users);
    }

    public function create()
    {
        return view('BlitUsers::users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        User::create($input);

        return redirect(route('users.index'));
    }

    public function edit(User $user)
    {
        return view('BlitUsers::users.edit')
            ->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $input = $request->all();

        $input['password'] = ($input['password'] == null) ? $user->password : bcrypt($input['password']);

        $user->update($input);

        return redirect(route('users.index'));
    }

    public function destroy($id)
    {
        $domain = User::find($id);

        if($domain)
        {
            $domain->delete();
        }

        return redirect(route('users.index'));
    }

}