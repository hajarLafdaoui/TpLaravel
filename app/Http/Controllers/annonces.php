<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use Illuminate\Http\Request;

class annonces extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = annonce::all();
        return view('annonce.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new annonce();
        $record->titre = $request->titre;
        $record->description = $request->description;
        $record->type = $request->type;
        $record->ville = $request->ville;
        $record->superficie = $request->superficie;
        $record->etat = $request->etat;
        $record->prix = $request->prix;
        $record->save();
    
        return redirect()->route('annonce.index')->with('success', 'Annonce created successfully!');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    
    {
        $show = annonce::find($id);
        return view('annonce.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $annonce = annonce::find($id);
        return view('annonce.edit', compact('annonce'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $annonce = annonce::find($id);
        $annonce->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'type' => $request->type,
            'ville' => $request->ville,
            'superficie' => $request->superficie,
            'etat' => $request->etat,
            'prix' => $request->prix,
        ]);
    
        // Redirect with success message
        return redirect()->route('annonce.index')->with('success', 'Annonce updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $annonce = annonce::find($id);

    if ($annonce) {
        $annonce->delete();
        return redirect()->route('annonce.index')->with('success', 'Annonce deleted successfully!');
    } else {
        return redirect()->route('annonce.index')->with('error', 'Annonce not found!');
    }

        
    }
}
