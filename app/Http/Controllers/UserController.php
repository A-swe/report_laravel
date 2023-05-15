<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    public function index() {
        $data = User::latest()->paginate(3);
        return view('user.index',[
            'users' => $data
        ]);
    }

    public function add() {
        return view('user.add');
    }

    public function create() {
        $validator = validator(request()->all(),[
            'name' =>'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = request()->password;
        $user->phone_no = request()->phone_no;
        $user->role = request()->role;
        $user->save();
        return redirect('/user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('info','User Deleted');
    }
}
