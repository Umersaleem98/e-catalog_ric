<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $success_stories = Student::paginate(0);
        return view('index', compact('success_stories'));
    }

    public function about_us()
    {

        return view('template.about_us');
    }

    public function contact_us()
    {

        return view('template.contact_us');
    }
}
