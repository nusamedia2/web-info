<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GambarTotoMacau;

class TotoMacauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar_toto_macaus = GambarTotoMacau::paginate(5);
        return view('admin-prediksi.toto-macaudashboard', compact('gambar_toto_macaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-prediksi.toto-macau');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        GambarTotoMacau::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file' => $nama_file
        ]);
        return redirect('/toto-macau-dashboard');
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
        $gambar_toto_macaus = GambarTotoMacau::find($id);
        $gambar_toto_macaus->delete();

        return redirect('/toto-macau-dashboard');
    }
    public function index2()
    {
        $gambar_toto_macaus = GambarTotoMacau::paginate(5);
        return view('prediksi.toto-macau', compact('gambar_toto_macaus'));
    }
}
