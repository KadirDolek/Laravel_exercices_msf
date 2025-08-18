<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use App\Http\Requests\StoreTypeformationRequest;
use App\Http\Requests\UpdateTypeformationRequest;

class TypeformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeformation=Typeformation::all();
        return view('typeformation.index',compact('typeformation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeformationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Typeformation $typeformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Typeformation $typeformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeformationRequest $request, Typeformation $typeformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Typeformation $typeformation)
    {
        //
    }
}
