<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function showSubjects()
    {
        return view('subject');
    }
}
