<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndowmentController extends Controller
{
    public function index()
    {
        return view('template.endowment_model.index');
    }

    public function one_year()
    {
        return view('template.endowment_model.one_year');
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
