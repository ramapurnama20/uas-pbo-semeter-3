<?php

namespace App\Http\Controllers;

use App\Models\ControlStatement;
use Illuminate\Http\Request;

class ControlStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    $test = controlstatment::get();
    return response()->Json($test);
    {
        //
        $user = user::get();
        return response()->json($user);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    $waktu = carbon::now()->todatetimestring();
    $this->validate($request,['untuk_if','untuk_for']);
    $request['created_at'] = $waktu;
    $request['update_at'] = $waktu;
    $data = DB::connection('mySql')
            ->table('control_statments')
            ->insert($request->all());
    return response()->Json()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ControlStatement  $controlStatement
     * @return \Illuminate\Http\Response
     */
    public function show(ControlStatement $controlStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ControlStatement  $controlStatement
     * @return \Illuminate\Http\Response
     */
    public function edit(ControlStatement $controlStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ControlStatement  $controlStatement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ControlStatement $controlStatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ControlStatement  $controlStatement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ControlStatement $controlStatement)
    {
        //
    }
}
