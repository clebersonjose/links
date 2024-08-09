<?php

namespace App\Http\Controllers;

use App\Http\Resources\PerfilResource;
use App\Http\Resources\PerfisCollection;
use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfis = Perfil::where('created_at', '<>', null)
            ->orderByDesc('created_at')
            ->get();

        $perfisCollection = new PerfisCollection($perfis);
        return response()->json($perfisCollection, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perfil = Perfil::find($id);
        $perfilResource = new PerfilResource($perfil);
        return response()->json($perfilResource, 200);
    }

    /**
     * Display the last resource.
     */
    public function showLast()
    {
        $perfil = Perfil::all()->last();
        $perfilResource = new PerfilResource($perfil);
        return response()->json($perfilResource, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
