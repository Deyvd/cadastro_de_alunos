<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Http\Requests\StoreClassRoomRequest;
use App\Http\Requests\UpdateClassRoomRequest;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return ClassRoom::all();
        // $room = ClassRoom::where('course_id', 'course')->get();
        // return $room;

        // if($request) {
        //     $classes = ClassRoom::find('course_id');
        // }
        // $classes = ClassRoom::all();
        // dd($classes);
        // return $classes;
    }

     

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassRoomRequest $request)
    {
        return ClassRoom::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ClassRoom $classRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRoom $classRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassRoomRequest  $request
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassRoomRequest $request, ClassRoom $classRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassRoom $classRoom)
    {
        //
    }
}
