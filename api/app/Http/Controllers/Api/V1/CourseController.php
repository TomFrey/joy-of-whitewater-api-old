<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StorecourseRequest;
use App\Http\Requests\UpdatecourseRequest;
use App\Models\course;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CourseResource;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Course::all();
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
     * @param  \App\Http\Requests\StorecourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Also z.B. http://localhost:8888/api/v1/courses/1  -> liefert den Kurs mit der id=1
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //nimmt jetzt die Resource und passt den Output entsprechend an
        return new CourseResource($course);
        //return $course;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecourseRequest  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecourseRequest $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }
}
