<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\positions;


class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = positions::all();
        return response()->json($positions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $positions = new positions();
        $positions->departamens_id = $request->departamens_id;
        $positions->name = $request->name;
        $positions->hourly_rate = $request->hourly_rate;
        $positions->save();
        return response()->json("El usuario ha sido creado exitosamente", 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $positions = positions::find($id);
        $positions->departamens_id = $request->departamens_id;
        $positions->name = $request->name;
        $positions->hourly_rate = $request->hourly_rate;
        $positions->save();
        return response()->json("El usuario ha sido actualizado exitosamente", 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $positions = positions::find($id);
        $positions->delete();
        return response()->json("El usuario ha sido eliminado correctamente", 200);
    }
}
