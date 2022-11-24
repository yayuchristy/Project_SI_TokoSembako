<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihat()
    {
        $data_karyawan = Karyawan::all(); 
        return view('lihat_karyawan',compact('data_karyawan'));
        return view('hapus_karyawan',compact('data_karyawan'));
        
    }

    public  function hapus()
    {
        $data_karyawan = Karyawan::all(); 
        return view('hapus_karyawan',compact('data_karyawan'));
    }

    public function input()
    {
        return view('input_karyawan');
    }


    public function store(Request $request)
    {
       dd($request->except(['_token', 'submit'])); 
       $karyawan  = new Karyawan;
       $karyawan->Kode_Karyawan = $request->Kode_Karyawan;
       $karyawan->Nama_Karyawan = $request->Nama_Karyawan;
       $karyawan->No_Telp_Karyawan = $request->No_Telp_Karyawan;
       $karyawan->save();

       if()
    //    Karyawan::created($request->except(['_token', 'submit']));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    }
}
