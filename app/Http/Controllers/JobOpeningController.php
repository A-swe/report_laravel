<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOpening;
class JobOpeningController extends Controller
{
    //
    public function index() {
        $data = JobOpening::latest()->paginate(3);
        return view('jobopenings.index',[
            'jobopenings' => $data
        ]);
           
    }

    public function add() {
        return view('jobopenings.add');
    }

    public function detail($id)
    {
        return "Controller - Job opening details - $id";
    }

}
