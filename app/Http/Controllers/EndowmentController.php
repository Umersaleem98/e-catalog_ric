<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Endowment;
use App\Models\ZakatPayment;
use Illuminate\Http\Request;
use App\Models\PerpetualSeat;
use App\Models\EndowmentCategory;
use App\Models\EndowmentSupportOneYear;
use App\Models\SupportADegreeForOneYearPg;
use App\Models\SupportADegreeForOneYearUg;
use App\Models\EndowmentSupportEntireDegree;

class EndowmentController extends Controller
{
    public function index()
    {

        return view('template.endowment_model.index');
    }

    public function one_year_index()
    {
        $undergraduate = SupportADegreeForOneYearUg::all();
        $postgraduate = SupportADegreeForOneYearPg::all();

        // Retrieve the first matching record
        return view('template.endowment_model.one_year', compact('undergraduate', 'postgraduate'));
    }

    public function one_year_store(Request $request)
    {
        $undergraduate = SupportADegreeForOneYearUg::all();
        $postgraduate = SupportADegreeForOneYearPg::all();

        $oneyear = new EndowmentSupportOneYear;
        $oneyear->program = $request->program;
        $oneyear->degree = $request->degree;
        $oneyear->seats = $request->seats;
        $oneyear->degree_name = $request->degree_name;
        $oneyear->totalAmount = $request->totalAmount;
        $oneyear->donor_name = $request->donor_name;
        $oneyear->donor_email = $request->donor_email;
        $oneyear->phone = $request->phone;
        $oneyear->payments_status = $request->payments_status;
        $oneyear->save();

        // return view('template.endowment_model.one_year', compact('undergraduate','postgraduate' ));
        return back()->with('success', 'Data saved successfully!');
        // return view('template.endowment_model.one_year', compact('undergraduate', 'postgraduate'))->with('success', 'Data saved successfully!');
    }
    public function entire_index()
    {
        $undergraduate = SupportADegreeForOneYearUg::all();
        $postgraduate = SupportADegreeForOneYearPg::all();

        // Retrieve the first matching record
        return view('template.endowment_model.fout_year', compact('undergraduate', 'postgraduate'));
    }

    public function entire_store(Request $request)
    {
        $undergraduate = SupportADegreeForOneYearUg::all();
        $postgraduate = SupportADegreeForOneYearPg::all();

        $oneyear = new EndowmentSupportEntireDegree;
        $oneyear->program = $request->program;
        $oneyear->degree = $request->degree;
        $oneyear->seats = $request->seats;
        $oneyear->degree_name = $request->degree_name;
        $oneyear->totalAmount = $request->totalAmount;
        $oneyear->donor_name = $request->donor_name;
        $oneyear->donor_email = $request->donor_email;
        $oneyear->phone = $request->phone;
        $oneyear->payments_status = $request->payments_status;
        $oneyear->save();
        return back()->with('success', 'Data saved successfully!');

        // return view('template.endowment_model.one_year', compact('undergraduate','postgraduate' ));
        // return view('template.endowment_model.fout_year', compact('undergraduate', 'postgraduate'))->with('success', 'Data saved successfully!');
    }



    public function Perpetual_index()
    {
        $undergraduate = SupportADegreeForOneYearUg::all();
        $postgraduate = SupportADegreeForOneYearPg::all();

        // Retrieve the first matching record
        return view('template.endowment_model.perpetual_seat_your_name', compact('undergraduate', 'postgraduate'));
    }


    public function Perpetual_store(Request $request)
    {
        $undergraduate = SupportADegreeForOneYearUg::all();
        $postgraduate = SupportADegreeForOneYearPg::all();

        $oneyear = new PerpetualSeat;
        $oneyear->program = $request->program;
        $oneyear->endowment_type = $request->endowment_type;
        $oneyear->degree = $request->degree;
        $oneyear->seats = $request->seats;
        $oneyear->degree_name = $request->degree_name;
        $oneyear->totalAmount = $request->totalAmount;
        $oneyear->donor_name = $request->donor_name;
        $oneyear->donor_email = $request->donor_email;
        $oneyear->phone = $request->phone;
        $oneyear->payments_status = $request->payments_status;
        $oneyear->save();

        return back()->with('success', 'Data saved successfully!');
        // return view('template.endowment_model.one_year', compact('undergraduate','postgraduate' ));
        // return view('template.endowment_model.perpetual_seat_your_name', compact('undergraduate', 'postgraduate'))->with('success', 'Data saved successfully!');
    }

    public function zakat()
    {
        return view('template.endowment_model.zakat');
    }


    public function zakat_payment()
    {
        return view('template.endowment_model.payments');
    }
    public function store_zakat(Request $request)
    {
        $zakat = new ZakatPayment;
        $zakat->payment_type = $request->payment_type;
        $zakat->donor_name = $request->donor_name;
        $zakat->donor_email = $request->donor_email;
        $zakat->phone = $request->phone;
        $zakat->duration = $request->duration;
        $zakat->amount = $request->amount;
        $zakat->save();

        return back()->with('success', 'Data saved successfully!');
    }

    public function zakat_Make_a_Pledge()
    {
        return view('template.endowment_model.pledge_payments');
    }
}
