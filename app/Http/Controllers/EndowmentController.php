<?php

namespace App\Http\Controllers;

use App\Models\Endowment;
use Illuminate\Http\Request;
use App\Models\EndowmentCategory;
use App\Models\Program;

class EndowmentController extends Controller
{
    public function index()
    {

        $categories = EndowmentCategory::all();
        return view('template.endowment_model.index', compact('categories'));
    }

    public function one_year1()
    {
        // Fetch all programs with their associated fees
        // $programs = Program::with('fees')->get();

        return view('template.endowment_model.one_year');
    }
    public function one_year($id)
    {
        // Fetch all programs with their associated fees
        $programs = Program::with('fees')->get();

        return view('template.endowment_model.one_year', compact('programs'));
    }
    public function four_year()
    {
        return view('template.endowment_model.fout_year');
    }

    public function perpetual_seat()
    {
        return view('template.endowment_model.perpetual_seat_your_name');
        // return view('template.endowment_model.perpetual_seat_your_name');
    }

    public function zakat()
    {
        return view('template.endowment_model.zakat');
    }

    public function payments()
    {
        return view('template.endowment_model.payments');
    }

    public function pledge_payments()
    {
        return view('template.endowment_model.pledge_payments');
    }
}
