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

            // Get the authenticated user's patient_id
            $patientId = Auth::user()->id;

            $ecounters = Ecounter::where('patient_id', $patientId)
                          ->orderBy('created_at', 'desc')
                          ->get();  

            return view('ecounter', compact('ecounters'));
        }
}
