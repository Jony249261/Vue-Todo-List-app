<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request){
        Todo::create($request->all());
    }
}
