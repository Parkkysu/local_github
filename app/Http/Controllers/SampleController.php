<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    public function index(){
        $data = Sample::all();
        return view("welcome", [
            "data" => $data
        ]);
    }
}


//샘플데이터를 넣는 과정.  시딩
