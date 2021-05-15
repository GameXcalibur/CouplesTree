<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engraving;

class EngravingsController extends Controller
{
    public function index(Engraving $model){
        return view('engravings.index');
        //return view('engravings.index', ['engravings' => $model::where('status', '=', '0')->get()]);
    }

    public function create(){
        return view('engravings.create');
        //return view('engravings.index', ['engravings' => $model::where('status', '=', '0')->get()]);
    }

    public function store(Request $request){

    }
}

