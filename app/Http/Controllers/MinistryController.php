<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinistryController extends Controller
{
    public function index(){
        return view('ministry');
    }
}
