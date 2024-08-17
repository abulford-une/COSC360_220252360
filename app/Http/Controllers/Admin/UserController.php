<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.index_user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = 'author';
        if ($request->has('user_role')) { $role = $request->get('user_role'); }
        
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ])->validate();
        User::create([
            'name' => $request->get('name'),
            'user_role' => $role,
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, User $user)
    {
        return view('admin.show_user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $user = User::find($id);
        return view('admin.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,except,id'],
        ])->validate();
        $user->update($request->all());
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $posts = $user->posts;
        foreach ($posts as $post) { $post->delete(); }
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
