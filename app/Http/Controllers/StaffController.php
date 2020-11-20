<?php

namespace App\Http\Controllers;

use App\Staffs;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staffs.list-staff');
    }

    public function list_prospective()
    {
        return view('staffs.list-staff-prospective');
    }

    public function list_rejected()
    {
        return view('staffs.list-staff-rejected');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staffs.add-staff');
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
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('staffs.detail-staff');
    }

    public function show_prospective()
    {
       return view('staffs.detail-staff-prospective'); 
    }
    public function show_rejected()
    {
        return view('staffs.detail-staff-rejected');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffs $staffs)
    {
        return view('staffs.edit-staff');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staffs $staffs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
        //
    }
}
