<?php

namespace App\Http\Controllers;

use App\Models\Gadget;
use Illuminate\Http\Request;

class GadgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // read
        $gadget     = Gadget::all();
        return view('informasi.gadget.index', compact('gadget')); // cara memasukkan data ke view
    }
    public function layanan()
    {
        // read
            $layanan     = Gadget::all();
            
            //select layanan 1
            if (isset($_GET['gadget1'])) {
                // jika ada cari berdasarkan title 
                $gadget1 = $_GET['gadget1'];
                $gadget1   = Gadget::find($gadget1);
            } 
            else {
                // jika tidak ada tampilkan semua
                $gadget1   = null;
            }

            //select layanan 2
            if (isset($_GET['gadget2'])) {
                // jika ada cari berdasarkan title 
                $gadget2 = $_GET['gadget2'];
                $gadget2   = Gadget::find($gadget2);
            } 
            else {
                // jika tidak ada tampilkan semua
                $gadget2   = null;
            }
            
            return view('informasi.gadget.layanan', compact('layanan','gadget1','gadget2')); // cara memasukkan data ke view
    }
    public function dashgadget()
    {
        // read
        $dashgadget     = Gadget::all();
        return view('informasi.gadget.dashgadget', compact('dashgadget')); // cara memasukkan data ke view
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
        $tujuan_upload = "public/img/informasi/gadget";
        $file->move($tujuan_upload,$nama_file);

        // simpan ke database
        Gadget::create([
            'nama' => $request->nama,
            'gambar' => $nama_file,
            'kategori' => $request->kategori,
            'layar' => $request->layar,
            'chipset' => $request->chipset,
            'os' => $request->os,
            'gpu' => $request->gpu,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'memori_internal' => $request->memori_internal,
            'memori_eksternal' => $request->memori_eksternal,
            'kamera_belakang' => $request->kamera_belakang,
            'kamera_depan' => $request->kamera_depan,
            'baterai' => $request->baterai,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function show(Gadget $gadget)
    {
        $gadget = Gadget::find($gadget);
        return view('informasi.gadget.show', compact('gadget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function edit(Gadget $gadget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gadget $gadget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gadget  $gadget
     * @return \Illuminate\Http\Response
     */
    public function destroy($gadget)
    {
        $gadget = Gadget::find($gadget);
        deletefile('public/img/informasi/gadget/'.$gadget->gambar);
        $gadget->delete();
        return back();
    }
}
