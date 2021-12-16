<?php

namespace App\Http\Controllers;

use App\Models\ContractPayment;
use App\Http\Requests\StoreContractPaymentRequest;
use App\Http\Requests\UpdateContractPaymentRequest;

class ContractPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContractPayment::all();
    }

     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContractPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContractPaymentRequest $request)
    {
        return ContractPayment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContractPayment  $contractPayment
     * @return \Illuminate\Http\Response
     */
    public function show(ContractPayment $contractPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContractPayment  $contractPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(ContractPayment $contractPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContractPaymentRequest  $request
     * @param  \App\Models\ContractPayment  $contractPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContractPaymentRequest $request, ContractPayment $contractPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContractPayment  $contractPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContractPayment $contractPayment)
    {
        //
    }
}
