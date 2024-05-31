<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_index($id)
    {
        $students= Student::find($id);
        return view('template.payment', compact('students'));
    }

    public function Make_a_Pledge($id)
    {
        $students= Student::find($id);
        return view('template.Make_a_Pledge', compact('students'));
    }

    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'donor_name' => 'required',
        'card_on_name' => 'required',
        'donor_email' => 'required|email',
        'cnic_number' => 'required',
        'card_number' => 'required',
        'card_cvc' => 'required',
        'duration' => 'required',
        'amount' => 'required',
        'prove' => 'required|file|mimes:pdf,doc,docx,pnj,jpg|max:2048', // Example validation for file upload
    ]);

    // Create a new Payment instance
    $payment = new Payment;
    $payment->student_name = $request->student_name;
    $payment->donor_name = $request->donor_name;
    $payment->card_on_name = $request->card_on_name;
    $payment->donor_email = $request->donor_email;
    $payment->cnic_number = $request->cnic_number;
    $payment->card_number = $request->card_number;
    $payment->card_cvc = $request->card_cvc;
    $payment->duration = $request->duration;
    $payment->amount = $request->amount;

    // Handle file upload for 'prove' field
    if ($request->hasFile('prove')) {
        $file = $request->file('prove');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $payment->prove = $fileName;
    }

    // Save the Payment instance to the database
    $payment->save();

    // Return a response, redirecting back with a success message
    return redirect()->back()->with('success', 'Payment successfully made.');
}

}
