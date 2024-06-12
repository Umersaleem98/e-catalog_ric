<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\SupportPleagePayment;
use App\Models\SupportScholarPayment;

class SupportScholarPaymentController extends Controller
{
    public function payment_index($id)
    {
        $students= Student::find($id);
        return view('template.payments.payment', compact('students'));
    }


    public function Make_a_Pledge($id)
    {
        $students= Student::find($id);
        return view('template.payments.Make_a_Pledge', compact('students'));
    }


    public function store(Request $request)
{

    // Create a new Payment instance
    $payment = new SupportScholarPayment;
    $payment->student_name = $request->student_name;
    $payment->donor_name = $request->donor_name;
    $payment->donor_email = $request->donor_email;
    $payment->duration = $request->duration;
    $payment->amount = $request->amount;

    // Handle file upload for 'prove' field
    if ($request->hasFile('prove')) {
        $file = $request->file('prove');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('payment_prove'), $fileName);
        $payment->prove = $fileName;
    }

    // Save the Payment instance to the database
    $payment->save();

    // Return a response, redirecting back with a success message
    return redirect()->back()->with('success', 'Payment successfully made.');
}
    public function pledge_store(Request $request)
{

    // Create a new Payment instance
    $payment = new SupportPleagePayment;
    $payment->student_name = $request->student_name;
    $payment->donor_name = $request->donor_name;
    $payment->donor_email = $request->donor_email;
    $payment->phone = $request->phone;
    $payment->donation_percent = $request->donation_percent;
    $payment->donation_for = $request->donation_for;
    $payment->save();

    // Return a response, redirecting back with a success message
    return redirect()->back()->with('success', 'Payment successfully made.');
}







}
