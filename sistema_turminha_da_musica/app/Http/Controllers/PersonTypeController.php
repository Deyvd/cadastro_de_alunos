<?php

namespace App\Http\Controllers;

use App\Models\PersonType;
use App\Http\Requests\StorePersonTypeRequest;
use App\Http\Requests\UpdatePersonTypeRequest;
use Person;

class PersonTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PersonType::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonTypeRequest $request)
    {
        return PersonType::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonType  $personType
     * @return \Illuminate\Http\Response
     */
    public function show(PersonType $personType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonType  $personType
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonType $personType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonTypeRequest  $request
     * @param  \App\Models\PersonType  $personType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonTypeRequest $request, PersonType $personType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonType  $personType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonType $personType)
    {
        //
    }
}
