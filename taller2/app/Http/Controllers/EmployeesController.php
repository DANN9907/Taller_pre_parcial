<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class EmployeesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employees::all();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employees = new employees();
        $employees->positions_id = $request->positions_id;
        $employees->name = $request->name;
        $employees->lastname = $request->lastname;
        $employees->card = $request->card;
        $employees->start_date = $request->start_date;
        $employees->start_contract_date = $request->start_contract_date;
        $employees->save();
        return response()->json("El usuario ha sido creado exitosamente", 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees = employees::find($id);
        $employees->positions_id = $request->positions_id;
        $employees->name = $request->name;
        $employees->lastname = $request->lastname;
        $employees->card = $request->card;
        $employees->start_date = $request->start_date;
        $employees->start_contract_date = $request->start_contract_date;
        $employees->save();
        return response()->json("El usuario ha sido actualizado exitosamente", 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees = employees::find($id);
        $employees->delete();
        return response()->json("El usuario ha sido eliminado correctamente", 200);
    }
}
