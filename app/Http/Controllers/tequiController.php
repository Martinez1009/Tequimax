<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tequila;

class tequiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tequila = tequila::all();

        return view('tequila.index', compact('tequila'));
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Marca' => 'required|max:255',
            'Tipo' => 'required| max:255',
            'Precio' => 'required',
          ]);

          tequila::create($request->all());

          return redirect()->route('tequila.index')
            ->with('Hecho','tequila creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tequila = tequila::find($id);

        return view('tequila.show', compact('tequila'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Marca' => 'required|max:255',
            'Tipo' => 'required| max:255',
            'Precio' => 'required',
        ]);

        $tequila = tequila::find($id);
        $tequila->update($request->all());

        return redirect()->route('tequila.index')
            ->with('Hecho', 'Tequla actualizado correctamente.');
    }


    public function create()
    {
        return view('tequila.create');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tequila = tequila::find($id);
        $tequila->delete();

        return redirect()->route('tequila.index')
            ->with('Hecho', 'Tequila eliminado correctamente.');
    }

    public function edit($id)
    {
        $tequila = tequila::find($id);

        return view('tequila.edit', compact('tequila'));
    }
}
