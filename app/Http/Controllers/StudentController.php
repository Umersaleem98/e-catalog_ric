<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('template.stories', compact('students'));
    }

    public function stuedent_stories(Request $request)
{
    $gender = $request->input('gender');

    if ($gender && $gender !== 'all') {
        $students = Student::where('gender', $gender)->paginate(6);
    } else {
        $students = Student::paginate(6);
    }

    return view('template.support_scholar.index', compact('students'));
}

    public function stuedent_stories_ind($id)
    {
        // $students = Student::all();
        $students = Student::find($id);
        return view('template.support_scholar.student_stories', compact('students'));
    }
}
