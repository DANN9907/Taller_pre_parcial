<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departamens;

class DepartamensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamens = departamens::all();
        return response()->json($departamens);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departamens = new departamens();
        $departamens->name = $request->name;
        $departamens->save();
        return response()->json("El usuario ha sido creado exitosamente", 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departamens = departamens::find($id);
        $departamens->name = $request->name;
        $departamens->save();
        return response()->json("El usuario ha sido actualizado exitosamente", 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departamens = departamens::find($id);
        $departamens->delete();
        return response()->json("El usuario ha sido eliminado correctamente", 200);
    }
}
