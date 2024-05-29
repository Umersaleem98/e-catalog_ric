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
        $province = $request->input('province');
        $discipline = $request->input('discipline');

        $query = Student::query();

        if ($gender && $gender !== 'all') {
            $query->where('gender', $gender);
        }

        if ($province && $province !== 'all') {
            $query->where('province', $province);
        }

        if ($discipline && $discipline !== 'all') {
            $query->where('discipline', $discipline);
        }

        $students = $query->paginate(8); // Always paginate by default

        return view('template.support_scholar.index', compact('students'));
    }




    public function stuedent_stories_ind($id)
    {
        // $students = Student::all();
        $students = Student::find($id);
        return view('template.support_scholar.student_stories', compact('students'));
    }
}
