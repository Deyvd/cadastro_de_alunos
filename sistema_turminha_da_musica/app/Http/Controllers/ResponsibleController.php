<?php

namespace App\Http\Controllers;

use App\Models\Responsible;
use App\Http\Requests\StoreResponsibleRequest;
use App\Http\Requests\UpdateResponsibleRequest;

class ResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Responsible::all();
    }

     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResponsibleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResponsibleRequest $request)
    {
        return Responsible::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function show(Responsible $responsible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function edit(Responsible $responsible)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResponsibleRequest  $request
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponsibleRequest $request, Responsible $responsible)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responsible  $responsible
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responsible $responsible)
    {
        //
    }
}
