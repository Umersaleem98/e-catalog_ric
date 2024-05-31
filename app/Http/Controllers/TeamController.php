<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Event;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $events = Event::all();
        $teams = Team::all();

        return view('template.teams.teams', compact('events','teams'));
    }

    public function meet_team($id)
    {
        $events = Event::all();
        $teams = Team::find($id);

        return view('template.teams.meet_our_team', compact('events','teams'));
    }
}
