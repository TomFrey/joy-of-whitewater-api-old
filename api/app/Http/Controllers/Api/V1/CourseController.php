<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StorecourseRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatecourseRequest;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CourseResource;
use App\Http\Resources\V1\CourseCollection;
use App\Filters\V1\CourseFilter;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return Course::all();

        //Benutzt die Collection, resp. die CourseResource
        //return new CourseCollection(Course::all());

        //Gibt die Collection innerhalb von Seiten zurück
        //return new CourseCollection(Course::paginate());


        $filter = new CourseFilter();
        $queryItems = $filter->transform($request);  //[['column', 'operator', 'value']]

        if(count($queryItems) == 0){
            return new CourseCollection(Course::all());
        } else {
            return new CourseCollection(Course::where($queryItems)->get());
            //return new CourseCollection(Course::where($queryItems)->paginate());
        }

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
