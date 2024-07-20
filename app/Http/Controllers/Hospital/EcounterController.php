<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ecounter; 
use App\Models\User; 

class EcounterController extends Controller
{


        public function show()
        {
            if (Auth::user()->Payment_Status == NULL) {
                return redirect('paymentpage')->with('error', 'You have to pay for your online medical fee to access your medical report.');
            } elseif (Auth::user()->Payment_Status == "PAID") {
                // Get the authenticated user's patient_id
                $patientId = Auth::user()->id;
                $ecounters = Ecounter::where('patient_id', $patientId)
                            ->orderBy('created_at', 'desc')
                            ->get();  

                return view('ecounter', compact('ecounters'));
            } else {
                return redirect('paymentpage')->with('error', 'You have to pay for your online medical portal to access your medical report.');
            }
           
            
        }
}
