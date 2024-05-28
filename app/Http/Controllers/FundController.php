<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundController extends Controller
{
    public function select_project_fund()
    {
        return view('template.fund_project.select_project');
    }

   

    public function mosque_project()
    {
        return view('template.fund_project.mosque_fund');
    }
}
