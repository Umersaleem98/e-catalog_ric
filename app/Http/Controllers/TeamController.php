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

    public function index()
    {
        return view('layouts.team.index');
    }




    public function show()
    {
        $teams = Team::all();
        return view('layouts.team.team_list', compact('teams'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'designation' => 'required|string|max:255',
        'gender' => 'required|string',
        'phone' => 'required|string|max:15',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $teamMember = new Team();
    $teamMember->name = $request->name;
    $teamMember->email = $request->email;
    $teamMember->designation = $request->designation;
    $teamMember->gender = $request->gender;
    $teamMember->phone = $request->phone;

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('team'), $imageName);
        $teamMember->image = $imageName;
    }

    $teamMember->save();

    return redirect()->back()->with('success', 'Team member added successfully');
}

public function edit($id)
{

    $teams = Team::find($id);
    return view('layouts.team.edit', compact('teams'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'designation' => 'required|string|max:255',
        'gender' => 'required|string',
        'phone' => 'required|string|max:15',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $teamMember = Team::find($id);
    $teamMember->name = $request->name;
    $teamMember->email = $request->email;
    $teamMember->designation = $request->designation;
    $teamMember->gender = $request->gender;
    $teamMember->phone = $request->phone;

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('team'), $imageName);
        $teamMember->image = $imageName;
    }

    $teamMember->save();

    return redirect()->back()->with('success', 'Team member update successfully');
}

public function delete($id)
{
    $teams = Team::find($id);
    $teams->delete();
    return redirect()->back()->with('success', 'Team member delete successfully');
}




    public function meet_team($id)
    {
        $events = Event::all();
        $teams = Team::find($id);

        return view('template.teams.meet_our_team', compact('events','teams'));
    }
}
