<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CourseResource;
use App\Http\Resources\V1\CourseCollection;
use App\Filters\V1\CourseFilter;
use App\Http\Requests\V1\StoreCourseRequest;
use App\Http\Requests\V1\UpdateCourseRequest;

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
     * Store a newly created resource in storage.
     * Behandelt die POST Requests.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        return new CourseResource(Course::create($request->all()));
    }

    /**
     * Display the specified resource.
     * Also z.B. http://localhost:8888/api/v1/courses/1  -> liefert den Kurs mit der id=1
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //nimmt jetzt die Resource und passt den Output entsprechend an
        return new CourseResource($course);
        //return $course;
    }


    /**
     * Update the specified resource in storage.
     * 
     * Behandelt die PUT und PATCH Requests.
     * PUT   -> alle Daten liefern
     * PATCH -> nur die Daten liefern, die geändert werden müssen.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        Course::find($course->id)->delete();
    }
}
