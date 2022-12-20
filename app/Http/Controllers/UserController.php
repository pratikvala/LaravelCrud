<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return response()->json(['status' => 200, 'message' => "insert Sucess Fully"]);
    }
    public function list()
    {
        $list = User::get();
        return view('list', compact('list'));
    }
    public function edit($id)
    {
        $edit = User::find($id);
        return view('edit', compact('edit'));
    }
    public function Update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return response()->json(['status' => 200, 'message' => "insert Sucess Fully"]);
    }
    public function Delete($id)
    {
        $delete = User::find($id);
       $delete->delete();
       return redirect()->route('list');
    }
}
