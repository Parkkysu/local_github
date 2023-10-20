<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $result;

    public function plus($num)
    {
        $this->result = $num + 5;
        return $this->result;
    }
}
