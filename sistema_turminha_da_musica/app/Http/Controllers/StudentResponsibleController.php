<?php

namespace App\Http\Controllers;

use App\Models\StudentResponsible;
use App\Http\Requests\StoreStudentResponsibleRequest;
use App\Http\Requests\UpdateStudentResponsibleRequest;

class StudentResponsibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StudentResponsible::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentResponsibleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentResponsibleRequest $request)
    {
        return StudentResponsible::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentResponsible  $studentResponsible
     * @return \Illuminate\Http\Response
     */
    public function show(StudentResponsible $studentResponsible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentResponsible  $studentResponsible
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentResponsible $studentResponsible)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentResponsibleRequest  $request
     * @param  \App\Models\StudentResponsible  $studentResponsible
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentResponsibleRequest $request, StudentResponsible $studentResponsible)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentResponsible  $studentResponsible
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentResponsible $studentResponsible)
    {
        //
    }
}
