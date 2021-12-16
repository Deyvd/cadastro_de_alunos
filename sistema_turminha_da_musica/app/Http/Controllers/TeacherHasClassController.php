<?php

namespace App\Http\Controllers;

use App\Models\TeacherHasClass;
use App\Http\Requests\StoreTeacherHasClassRequest;
use App\Http\Requests\UpdateTeacherHasClassRequest;

class TeacherHasClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeacherHasClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherHasClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherHasClass  $teacherHasClass
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherHasClass $teacherHasClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherHasClass  $teacherHasClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherHasClass $teacherHasClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeacherHasClassRequest  $request
     * @param  \App\Models\TeacherHasClass  $teacherHasClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherHasClassRequest $request, TeacherHasClass $teacherHasClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherHasClass  $teacherHasClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherHasClass $teacherHasClass)
    {
        //
    }
}
