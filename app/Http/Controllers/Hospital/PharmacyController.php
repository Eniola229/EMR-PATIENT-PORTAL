<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pharmacy; 
use App\Models\User; 

class PharmacyController extends Controller
{
        public function show()
        {

            // Get the authenticated user's patient_id
            $patientId = Auth::user()->patient_id;

            $pharmacys = Pharmacy::where('patient_id', $patientId)
                          ->orderBy('created_at', 'desc')
                          ->get(); 

            return view('pharmacy', compact('pharmacys'));
        }
}
