<?php

namespace App\Http\Controllers;

use App\Models\FundAProject;
use App\Models\ZakatPayment;
use Illuminate\Http\Request;
use App\Models\PerpetualSeat;
use App\Models\SupportPleagePayment;
use App\Models\SupportScholarPayment;
use App\Models\EndowmentSupportOneYear;
use App\Models\EndowmentSupportEntireDegree;

class DashboardEndowmentController extends Controller
{

    public function one_year()
    {
        $oneyeareduction = EndowmentSupportOneYear::all();
        return view('layouts.endowments.oneyear', compact('oneyeareduction'));

    }
    public function entire_degree()
    {
        $entiredegree = EndowmentSupportEntireDegree::all();
        return view('layouts.endowments.entire_degree', compact('entiredegree'));

    }
    public function perpetual_seat()
    {
        $perpetual_seat = PerpetualSeat::all();
        return view('layouts.endowments.perpetual_seat', compact('perpetual_seat'));

    }
    public function zakat_support_for_student()
    {
        $zakat_support = ZakatPayment::all();
        return view('layouts.endowments.zakat_support_', compact('zakat_support'));

    }

    public function scholor_payment()
    {
        $support_payment = SupportScholarPayment::all();
        return view('layouts.support_scholor.scholor_payments', compact('support_payment'));

    }

    public function scholor_pledge()
    {
        $support_pledge = SupportPleagePayment::all();
        return view('layouts.support_scholor.scholor_pledge', compact('support_pledge'));

    }

    public function fund_project()
    {

        $fundproject = FundAProject::all();
        // dd('jfjfj');
        return view('layouts.fund_project.fund_project', compact('fundproject'));

    }
}
