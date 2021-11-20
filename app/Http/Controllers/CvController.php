<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Header;
use App\Models\Skill;
use App\Models\Work;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view("cv.index", [
            "header" => Header::first(),
            "skill" => Skill::first(),
            "works" => Work::all(),
            "educations" => Education::all()
        ]);
    }
}
