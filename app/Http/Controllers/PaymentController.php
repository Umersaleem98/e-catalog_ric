<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_index($id)
    {
        $students= Student::find($id);
        return view('template.payment', compact('students'));
    }
}
