<?php

namespace App\Http\Controllers\Api\V1;


use Illuminate\Http\Request;
use App\Http\Requests\V1\UpdateStatusRequest;
use App\Http\Requests\V1\StoreStatusRequest;
use App\Models\Status;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StatusResource;
use App\Http\Resources\V1\StatusCollection;
use App\Filters\V1\StatusFilter;


class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new StatusFilter();
        $queryItems = $filter->transform($request); //[['column', 'operator', 'value']]  z.B. 'name', '=', 'Jeff'

        if(count($queryItems) == 0){
            //return Status::all();
            return new StatusCollection(Status::all());
        } else {
            return new StatusCollection(Status::where($queryItems)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusRequest $request)
    {
        return new StatusResource(Status::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //return $status;
        return new StatusResource($status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusRequest  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusRequest $request, Status $status)
    {
        $status->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        Status::find($status->id)->delete();
    }
}
