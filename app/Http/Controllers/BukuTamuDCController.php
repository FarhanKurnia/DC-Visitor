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
    	$bukuTamuDC = BukuTamuDC::orderBy('id', 'DESC')->paginate(5);

    	// mengirim data tamu ke view index
        return view('admin.index', compact('bukuTamuDC'));
        //return view('admin.index',['bukuTamuDC' => $bukuTamuDC]);
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
        /*$BukuTamuDC        = new BukuTamuDC;
        $BukuTamuDC->nama = $request->nama;
        $BukuTamuDC->no_ktp  = $request->no_ktp;
        $BukuTamuDC->instansi  = $request->instansi;
        $BukuTamuDC->no_rack  = $request->no_rack;
        $BukuTamuDC->no_slot  = $request->no_slot;
        $BukuTamuDC->pekerjaan  = $request->pekerjaan;
        $BukuTamuDC->status  = $request->status;*/


        BukuTamuDC::create($request->all());
        //$BukuTamuDC->save();
        //return back()->with('success','Berhasil Check In!');
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
        return view('admin.show', compact('bukuTamuDC'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BukuTamuDC  $bukuTamuDC
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	    $bukuTamuDC = BukuTamuDC::findOrFail($id);
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('admin.edit', compact('bukuTamuDC'));
    }

    public function editlogout($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
	    $bukuTamuDC = BukuTamuDC::findOrFail($id);
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('visitor.edit', compact('bukuTamuDC'));
    }

    public function updatelogout(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_ktp'=>'required',
        	'instansi' => 'required',
        	'no_rack' => 'required',
            'no_slot' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
        ]);
        $bukuTamuDC = BukuTamuDC::findOrFail($id);

        $bukuTamuDC->update([
            'status' => $request->status='checkout',

        ]);

        if ($bukuTamuDC) {
            return redirect()
                ->route('home')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }

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
        $this->validate($request, [
            'nama' => 'required',
            'no_ktp'=>'required',
        	'instansi' => 'required',
        	'no_rack' => 'required',
            'no_slot' => 'required',
            'pekerjaan' => 'required',
            'status' => 'required',
        ]);
        $bukuTamuDC = BukuTamuDC::findOrFail($id);

        $bukuTamuDC->update([
            'nama' => $request->nama,
            'no_ktp' => $request->no_ktp,
            'instansi' => $request->instansi,
            'no_rack' => $request->no_rack,
            'no_slot' => $request->no_slot,
            'pekerjaan' => $request->pekerjaan,
            'status' => $request->status,

        ]);

        if ($bukuTamuDC) {
            return redirect()
                ->route('dashboard')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }

    }

    public function search(Request $request)
	{
		$search = $request->input('search');

        $bukuTamuDC = BukuTamuDC::query()
                    ->where('nama', 'LIKE', "%{$search}%")
                    ->Where('status','checkin')
                    ->orWhere('no_ktp', 'LIKE', "%{$search}%")
                    ->get();

        return view('visitor.search', compact('bukuTamuDC'));
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
