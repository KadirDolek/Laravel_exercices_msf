<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEleveRequest $request)
    {
        $eleve = new Eleve();
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->age = $request->age;
        $eleve->etat = $request->etat;
        $eleve->save();

        return redirect()->route('ajoutEleve')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        return view('show', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        return view('edit', compact('eleve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateEleveRequest $request, )
    {
        Eleve::where("id", $id)->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "age"=>$request->age,
            "etat"=>$request->etat
        ]);
        return redirect()->route('ajoutEleve');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {   
        $eleve->delete();
        return redirect()->route('ajoutEleve');
    }
}
