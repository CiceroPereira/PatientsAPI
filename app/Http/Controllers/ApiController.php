<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class ApiController extends Controller
{
    
    public function index(){

    	$patients = Patient::all();

    	return response()->json($patients);

    }

    public function show($id){

        $patient = Patient::findOrFail($id);

        return response()->json($patient);
    }

    public function insert(Request $request){

    	$patient = new Patient;

    	$patient->name = $request->name;
    	$patient->cpf = $request->cpf;
    	$patient->age = $request->age;

    	$patient->save();

    }

    public function update(Request $request, $id){

    	$patient = Patient::findOrFail($id);

    	$patient->name = $request->name;
    	$patient->cpf = $request->cpf;
    	$patient->age = $request->age;

    	$patient->update();

    }

    public function destroy($id){

    	$patient = Patient::findOrFail($id);
    	$patient->delete();
    }
}
