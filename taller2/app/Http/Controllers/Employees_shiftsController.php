<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees_shift;

class Employees_shiftsController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees_shifts = employees_shifts::all();
        return response()->json($employees_shift);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employees_shifts = new employees_shifts();
        $employees_shifts->employees_id = $request->employees_id;
        $employees_shifts->shift_start = $request->shift_start;
        $employees_shifts->shift_end = $request->shift_end;
        $employees_shifts->save();
        return response()->json("El usuario ha sido creado exitosamente", 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees_shifts = employees_shift::find($id);
        $employees_shifts->employees_id = $request->employees_id;
        $employees_shifts->shift_start = $request->shift_start;
        $employees_shifts->shift_end = $request->shift_end;
        $employees_shifts->save();
        return response()->json("El usuario ha sido actualizado exitosamente", 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees_shifts = employees_shift::find($id);
        $employees_shifts->delete();
        return response()->json("El usuario ha sido eliminado correctamente", 200);
    }
}
