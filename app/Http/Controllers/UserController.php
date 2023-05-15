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
}
