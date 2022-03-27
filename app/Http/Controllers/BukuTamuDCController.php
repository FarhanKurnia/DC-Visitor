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
    	$bukuTamuDC = BukuTamuDC::orderBy('id', 'DESC')->get();

    	// mengirim data tamu ke view index
        return view('admin.index', compact('bukuTamuDC'));
    }

    public function home()
    {
        // mengambil data dari table tamu
    	//$bukuTamuDC = BukuTamuDC::orderBy('id', 'DESC')->get();
        return view('visitor.home');
    	// mengirim data tamu ke view index
        //return view('admin.index', compact('bukuTamuDC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitor.create');
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

        BukuTamuDC::create($request->all());
        return redirect('/DC-Visitor/home')->with('success','Berhasil Check In!');
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
        $bukuTamuDC = BukuTamuDC::find($id);
        $bukuTamuDC->delete();
        return back()->with('success','Data Berhasil dihapus');
    }
}
