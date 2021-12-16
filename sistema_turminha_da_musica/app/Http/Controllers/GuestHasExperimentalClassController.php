<?php

namespace App\Http\Controllers;

use App\Models\GuestHasExperimentalClass;
use App\Http\Requests\StoreGuestHasExperimentalClassRequest;
use App\Http\Requests\UpdateGuestHasExperimentalClassRequest;

class GuestHasExperimentalClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GuestHasExperimentalClass::all();
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGuestHasExperimentalClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuestHasExperimentalClassRequest $request)
    {
        return GuestHasExperimentalClass::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuestHasExperimentalClass  $guestHasExperimentalClass
     * @return \Illuminate\Http\Response
     */
    public function show(GuestHasExperimentalClass $guestHasExperimentalClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestHasExperimentalClass  $guestHasExperimentalClass
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestHasExperimentalClass $guestHasExperimentalClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuestHasExperimentalClassRequest  $request
     * @param  \App\Models\GuestHasExperimentalClass  $guestHasExperimentalClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuestHasExperimentalClassRequest $request, GuestHasExperimentalClass $guestHasExperimentalClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestHasExperimentalClass  $guestHasExperimentalClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestHasExperimentalClass $guestHasExperimentalClass)
    {
        //
    }
}
