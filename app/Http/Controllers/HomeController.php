<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user   = Auth::user();
        return view('dashboard');
    }
    public function list()
    {
        return view('list');
    }

    public function samsung()
    {
        // $request->validate([
        //     'gambar_artikel' => 'required|file|image|mimes:jpeg,png,jpg|max:4000',
        // ]);
        // menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('gambar_artikel');
        
        // $nama_file = time()."_".$file->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file diupload
        // $tujuan_upload = $this->folder;
        // $file->move($tujuan_upload,$nama_file);
    }

    
}
