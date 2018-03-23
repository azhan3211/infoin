<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizers;

class OrganizersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Organizers::all();
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
        //
        $organizers = new Organizers;
        $organizers->organizer_id = $request->input('organizer_id');
        $organizers->organizer_name = $request->input('organizer_name');
        $organizers->organizer_password = $request->input('organizer_password');
        $organizers->organizer_email = $request->input('organizer_email');
        $organizers->organizer_phone = $request->input('organizer_phone');
        $organizers->organizer_institution_id = $request->input('organizer_institution_id');
        $organizers->organizer_status = $request->input('organizer_status');
        $organizers->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Organizers::where('organizer_id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $organizers = Organizers::where('organizer_id', $id)->first();
        // return view('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Organizers::where('organizer_id', $id)->update($request->all());
        return redirect('/organizer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Organizers::where('organizer_id', $id)->delete();
        return redirect('/organizer');
    }
}
