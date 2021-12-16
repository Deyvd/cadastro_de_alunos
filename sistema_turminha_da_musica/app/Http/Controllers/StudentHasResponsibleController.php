<?php

namespace App\Http\Controllers;

use App\Models\StudentHasResponsible;
use App\Http\Requests\StoreStudentHasResponsibleRequest;
use App\Http\Requests\UpdateStudentHasResponsibleRequest;

class StudentHasResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StudentHasResponsible::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentHasResponsibleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentHasResponsibleRequest $request)
    {
        return StudentHasResponsible::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentHasResponsible  $studentHasResponsible
     * @return \Illuminate\Http\Response
     */
    public function show(StudentHasResponsible $studentHasResponsible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentHasResponsible  $studentHasResponsible
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentHasResponsible $studentHasResponsible)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentHasResponsibleRequest  $request
     * @param  \App\Models\StudentHasResponsible  $studentHasResponsible
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentHasResponsibleRequest $request, StudentHasResponsible $studentHasResponsible)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentHasResponsible  $studentHasResponsible
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentHasResponsible $studentHasResponsible)
    {
        //
    }
}
