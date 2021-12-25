<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
        $query = User::limit(10)->OrderBy('id', 'Desc')->get();
        return view('users.index', ['users' => $query ]);

    }

    public function create()
    {
        //
        return view('users.create'  );
    }

    public function store(Request $request)
    {
        //
        $data = $request->only(['name', 'mobile', 'address']);
        User::create($data);
        return redirect('/users')->with('success', 'این کاربر با موفقیت اضافه شد');
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', ['users' => $users]);
    }

    public function edit($id)
    {
        $query = User::where('id', $id)->first();
        return view('users.edit', ['users' => $query]);
    }

    public function update(Request $request, $id)
    {
        //
        $data = $request->only(['name', 'mobile', 'address']);
        User::where('id', $id)->update($data);
        return redirect('/users');
    }

    public function destroy($id)
    {
        //
        User::where('id', $id)->delete();
        return back()->with('success', 'این کاربر با موفقیت حذف شد');
    }
}
