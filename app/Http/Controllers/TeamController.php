<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::all();

        return view('template.teams.teams', compact('teams'));
    }

    public function meet_team($id)
    {
        $teams = Team::find($id);

        return view('template.teams.meet_our_team', compact('teams'));
    }
}
