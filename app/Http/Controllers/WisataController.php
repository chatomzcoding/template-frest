<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // read
        $wisata     = Wisata::all();
        return view('informasi.wisata.index', compact('wisata')); // cara memasukkan data ke view
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
        // Wisata::create($request->all()); // tanpa file
         $request->validate([
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
        ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');
        
        $nama_file = time()."_".$file->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = "public/img/informasi/wisata";
        $file->move($tujuan_upload,$nama_file);

        // simpan ke database
        Wisata::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
            'fasilitas' => $request->fasilitas,
            'gambar' => $nama_file,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($wisata)
    {
        $wisata = Wisata::find($wisata);
        return view('informasi.wisata.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($wisata)
    {
        $wisata = Wisata::find($wisata);
        deletefile('public/img/informasi/wisata/'.$wisata->gambar);
        $wisata->delete();
        return back();
    }
}
