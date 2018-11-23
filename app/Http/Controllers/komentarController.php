<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\komentar;

class komentarController extends Controller
{
    public function store(Request $request)
    {
        try{
    		$komentar = new komentar();
	    	$komentar->nama = $request->get('nama');
            $komentar->komentar = $request->get('komentar');
	    	$komentar->created_at = now();
	    	$komentar->updated_at = now();
	    	$komentar->save();
            
			//return redirect()->route('komentar.index')->with('sukses','komentar berhasil ditambahkan');
    	}
    	catch(\Exception $e){
    		$msg=$e->getMessage();
    		//return redirect()->route('komentar.index')->with('gagal','komentar gagal ditambahkan');
    	}
    }
}
