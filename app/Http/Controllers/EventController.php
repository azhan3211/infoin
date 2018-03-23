<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Events::all();
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
        $event = new Events;
        $event->event_organizer_id = $request->input('event_organizer_id');
        $event->event_category_id = $request->input('event_category_id');
        $event->event_name = $request->input('event_name');
        $event->event_address = $request->input('event_address');
        $event->event_date = $request->input('event_date');
        $event->event_time = $requst->input('event_time');
        $event->event_image = $request->input('event_image');
        $event->save();
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
        return Events::where('event_id',$id)->first();
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
        $event = Events::where('event_id', $id)->first();
        // return view();
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
        Events::where('event_id', $id)->update($request->all());
        return redirect('/event');
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
        Events::where('event_id', $id)->delete();
        return redirect('/event');
    }
}
