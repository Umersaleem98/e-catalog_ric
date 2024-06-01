<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Student;
// use Carbon\Carbon;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $events = Event::all();

        // Assuming you want to paginate correctly, set the pagination limit to a reasonable number like 10
        $success_stories = Student::paginate(10);

        // Use Carbon to format dates in the events
        foreach ($events as $event) {
            $event->formatted_date = Carbon::parse($event->date)->format('d F Y'); // Example format: 07 January 2024
        }

        return view('index', compact('events', 'success_stories'));
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
