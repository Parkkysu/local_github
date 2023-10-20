<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acontroller extends Controller
{
    // 클래스 안에섬나 쓸 수 있는 내부 함수 (멤버 변수)
    protected $result;
    protected $basecontroller;

    public function __construct(BaseController $basecontroller)
    {
        $this->basecontroller = $basecontroller;
    }

    public function multiple($num)
    {
        $this->result += $this->basecontroller->plus($num) * 10;
        return $this->result;
    }
}
