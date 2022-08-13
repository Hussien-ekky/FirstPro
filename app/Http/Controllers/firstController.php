<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index(){
        return 'hello';
    }

    public function create(){
        return view('welcome');
    }

    public function store(){
        return view('welcome');
    }

    public function edit(){
        return view('welcome');
    }

    public function update(){
        return view('welcome');
    }

    public function show(){
        return view('welcome');
    }

    public function delete(){
        return view('welcome');
    }

}
