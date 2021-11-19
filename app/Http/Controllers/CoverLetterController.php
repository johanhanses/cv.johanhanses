<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoverLetterController extends Controller
{
    public function index()
    {
        return view("coverletter.index");
    }
}
