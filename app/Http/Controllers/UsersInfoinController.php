<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersInfoin;

class UsersInfoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return UsersInfoin::all();
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
        $userInfoin = new UsersInfoin;
        $userInfoin->user_id = $request->input('user_id');
        $userInfoin->user_id = $request->input('user_fullname');
        $userInfoin->user_id = $request->input('user_email');
        $userInfoin->user_id = $request->input('username');
        $userInfoin->user_id = $request->input('user_password');
        $userInfoin->user_id = $request->input('user_address');
        $userInfoin->user_id = $request->input('user_phone');
        $userInfoin->user_id = $request->input('user_institution_id');
        $userInfoin->user_id = $request->input('user_status');
        $userInfoin->user_id = $request->input('user_date_of_birth');
        $userInfoin->user_id = $request->input('user_city');
        $userInfoin->save();

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
        return UsersInfoin::where('user_id', $id)->first();
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
        $userInfoin = UsersInfoin::where('user_id', $id)->first();
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
        UsersInfoin::where('user_id', $id)->update($request->all());
        return redirect('/userinfoin');
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
        UsersInfoin::where('user_id', $id)->delete();
        return redirect('/userinfoin');
    }
}
