<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institutions;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Institutions::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk menampilkan form pengisian data baru
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //untuk menyimpan data baru ke database
        $institution = new Institutions;
        $institution->institution_id = $request->input('institution_id');
        $institution->institution_name = $request->input('institution_name');
        $institution->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //untuk menampilkan data spesifik
        return Institutions::where('institution_id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //untuk menampilkan data spesifik ke form untuk diubah
        $institution = Institutions::where('institution_id',$id)->first();
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
        //untuk mengubah data spesifik ke database
        Institution::where('institution_id', $id)->update($request->all());
        return redirect('/institution');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //untuk menghapus data spesifik di database
        Institutions::where('institution_id', $id)->delete();
        return redirect('/institution');
    }
}
