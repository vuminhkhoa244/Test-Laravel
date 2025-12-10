<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function greet()
    {
        return 'Xin chào từ Controller!';
    }
}
