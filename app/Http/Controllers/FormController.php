<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function pendataan()
   {
       return view('halaman.pendataan');
   } //
   public function welcome(Request $request)
   {
    //    dd($request->all());
    $nama = $request['nama'];
    $alamat = $request['alamat'];

    return view('halaman.welcome',compact('nama','alamat'));
   }
}
