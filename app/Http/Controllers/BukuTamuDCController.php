<?php

namespace App\Http\Controllers;

use App\Models\BukuTamuDC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BukuTamuDCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table tamu
    	$bukuTamuDC = BukuTamuDC::all();

    	// mengirim data tamu ke view index
        return view('index', compact('bukuTamuDC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_ktp'=>'required',
        	'instansi' => 'required',
        	'no_rack' => 'required',
            'no_slot' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
            ]);
       
        $bukuTamuDC = new BukuTamuDC();
        $bukuTamuDC->nama = $request->nama;
        $bukuTamuDC->no_ktp = $request->no_ktp;
        $bukuTamuDC->instansi = $request->instansi;
        $bukuTamuDC->instansi = $request->no_rack;
        $bukuTamuDC->instansi = $request->no_slot;
        $bukuTamuDC->instansi = $request->pekerjaan;
        $bukuTamuDC->instansi = $request->status;

        $bukuTamuDC->save();
        return redirect('/home')->with('success','Post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuTamuDC  $bukuTamuDC
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuTamuDC  $bukuTamuDC
     * @return \Illuminate\Http\Response
     */
    public function edit(BukuTamuDC $bukuTamuDC)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BukuTamuDC  $bukuTamuDC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BukuTamuDC  $bukuTamuDC
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
