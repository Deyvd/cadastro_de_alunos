<?php

namespace App\Http\Controllers;

use App\Models\ExperimentalClass;
use App\Http\Requests\StoreExperimentalClassRequest;
use App\Http\Requests\UpdateExperimentalClassRequest;

class ExperimentalClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExperimentalClass::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExperimentalClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExperimentalClassRequest $request)
    {
        return ExperimentalClass::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperimentalClass  $experimentalClass
     * @return \Illuminate\Http\Response
     */
    public function show(ExperimentalClass $experimentalClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExperimentalClass  $experimentalClass
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperimentalClass $experimentalClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExperimentalClassRequest  $request
     * @param  \App\Models\ExperimentalClass  $experimentalClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExperimentalClassRequest $request, ExperimentalClass $experimentalClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperimentalClass  $experimentalClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperimentalClass $experimentalClass)
    {
        //
    }
}
