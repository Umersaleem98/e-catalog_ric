<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('template.stories', compact('students'));
    }
    public function student_stories(Request $request)
    {
        $gender = $request->input('gender');
        $province = $request->input('province');
        $discipline = $request->input('discipline');
        $degree = $request->input('degree');

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
        if ($degree && $degree !== 'all') {
            $query->where('degree', $degree);
        }

        // Adjust the column name to the actual column storing image names
        $query->orderByRaw("CASE WHEN images = 'dummy.png' THEN 1 ELSE 0 END, images");

        $students = $query->paginate(8); // Always paginate by default

        return view('template.support_scholar.index', compact('students'));
    }



    public function stuedent_stories_ind($id)
    {
        // $students = Student::all();
        $events = Event::all();
        $students = Student::find($id);
        return view('template.support_scholar.student_stories', compact('events','students'));
    }
}
