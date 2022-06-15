<?php

namespace App\Http\Controllers;

use App\Models\WorkingHour;
use Illuminate\Http\Request;

class WorkingHourController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workinghour = new WorkingHour;
        $workinghour->beautician_id = $request->beautician_id;
        $workinghour->day = $request->day;
        $workinghour->open_time = $request->open_time;
        $workinghour->close_time = $request->close_time;

        $workinghour->save();

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingHour $workingHour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingHour $workingHour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingHour $workingHour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingHour  $workingHour
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingHour $workingHour)
    {
        //
    }
}
