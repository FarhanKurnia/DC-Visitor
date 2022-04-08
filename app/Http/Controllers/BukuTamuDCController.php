<?php

namespace App\Http\Controllers;
use Session;
use Carbon\Carbon;
use Redirect;
use App\Models\BukuTamuDC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class BukuTamuDCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$bukuTamuDC = BukuTamuDC::orderBy('id', 'DESC')->paginate(10);
        return view('admin.index', compact('bukuTamuDC'));
    }

    public function home()
    {
        return view('visitor.home');
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
        $messages = [
            'required' => ':attribute harus diisi!',
            'alpha' => ':attribute harus diisikan dengan huruf',
            'numeric' => ':attribute harus diisikan dengan angka',
            'min' => ':attribute harus diisi :min karakter!',
            'max' => ':attribute harus diisi :max karakter!',
            'alpha_num' => ':attribute hanya dapat diisi dengan angka dan huruf!!!',
        ];
        $request->validate([
            'nama' => 'required|',
            'no_ktp'=>'required|numeric|min:16',
        	'instansi' => 'required|alpha_num',
        	'no_rack' => 'required|numeric',
            'no_slot' => 'required|alpha_num',
            'pekerjaan' => 'required',
            'status' => 'required',
            ],$messages);
        $ktp=BukuTamuDC::select('no_ktp')->where('no_ktp', $request->no_ktp)->count(); 
        $status=BukuTamuDC::select('status')->where('status', $request->status)->count();
        if($ktp > 0 && $status == 'checkin'){
            return Redirect::back()->withErrors(['msg' => 'Status saat ini masih Check-In, Harap Check-out terlebih dahulu']);
        }else{
            BukuTamuDC::create($request->all());
            return redirect('/home')->withErrors(['msg' => 'Berhasil Check In!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BukuTamuDC  $bukuTamuDC
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bukuTamuDC = BukuTamuDC::find($id);
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
	    $bukuTamuDC = BukuTamuDC::findOrFail($id);
	    return view('admin.edit', compact('bukuTamuDC'));
    }

    public function editlogout($id)
    {
	    $bukuTamuDC = BukuTamuDC::findOrFail($id);
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
            'updated' => Carbon::now(),

        ]);

        if ($bukuTamuDC) {
            return redirect('/home')->withErrors(['msg' => 'Berhasil Check-Out!']);
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
        if(empty($search)){
            $show = false ;
            $bukuTamuDC = BukuTamuDC::query()
                    ->where('nama', 'LIKE', "%{$search}%")
                    ->Where('status','checkin')
                    ->orWhere('no_ktp', 'LIKE', "%{$search}%")
                    ->get();
            return view('visitor.search',['show' => $show], compact('bukuTamuDC'))->withErrors(['msg' => 'Data tidak ditemukan']);
        }else{
            $show = true ;
            $bukuTamuDC = BukuTamuDC::query()
                    ->where('nama', '=', $search)
                    ->Where('status','checkin')
                    ->orWhere('no_ktp', '=', $search)
                    ->get();
            return view('visitor.search',['show' => $show], compact('bukuTamuDC'))->withErrors(['msg' => 'Data ditemukan']);
        }          
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
        return back()->withErrors(['msg' => 'Data Berhasil dihapus']);
        //return back()->with('success','Data Berhasil dihapus');
    }
}
