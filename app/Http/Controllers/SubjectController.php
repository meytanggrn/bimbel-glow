<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function showSubjects()
    {
        return view('subject');
    }

    public function getSubjects(Request $request)
    {
        $jenjang = $request->input('jenjang');
        $subjects = [];

        switch ($jenjang) {
            case 'SD':
                $subjects = ['IPA', 'IPS', 'Matematika'];
                break;
            case 'SMP':
                $subjects = ['Biologi', 'Kimia', 'Fisika'];
                break;
            case 'SMA':
                $subjects = ['Kimia', 'Fisika', 'Biologi'];
                break;
            case 'UMUM':
                $subjects = ['SNBT 8X', 'SNBT 12X', 'Kedinasan'];
                break;
        }

        return view('subject', compact('subjects'));
    }
}
