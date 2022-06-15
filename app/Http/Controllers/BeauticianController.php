<?php

namespace App\Http\Controllers;

use App\Models\Beautician;
use Illuminate\Http\Request;

class BeauticianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beautician = Beautician::all();

        return view('index', compact('beautician'));
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
        $beautician = new Beautician;
        $beautician->name = $request->name;

        $beautician->save();
        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beautician  $beautician
     * @return \Illuminate\Http\Response
     */
    public function show(Beautician $beautician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beautician  $beautician
     * @return \Illuminate\Http\Response
     */
    public function edit(Beautician $beautician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beautician  $beautician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beautician $beautician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beautician  $beautician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beautician $beautician)
    {
        //
    }
}
