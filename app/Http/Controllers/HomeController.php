<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "สวัสดี";
    }
    public function greeting($name)
    {
        return "สวัสดี $name";
    }
    public function บวกเลข($num1, $num2, $num3)
    {
        return "ผลรวมของเลข $num1,$num2,$num3 คือ " . ($num1 + $num2 + $num3) . " นะจร๊ะ";
    }
}
