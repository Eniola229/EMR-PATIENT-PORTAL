<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment; 
use App\Models\User; 

class PaymentsController extends Controller
{
    public function show()
    {
        // Get the authenticated user's patient_id
        $patientId = Auth::user()->id;

        $payments = Payment::where('user_id', $patientId)
                      ->orderBy('created_at', 'desc')
                      ->get();  

        return view('payments', compact('payments'));
    }
}
