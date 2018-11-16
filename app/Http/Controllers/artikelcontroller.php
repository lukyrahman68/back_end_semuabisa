<?php

namespace App\Http\Controllers;

use App\artikel;
use Illuminate\Http\Request;
//use Auth;
class artikelController extends Controller
{
    public function index()
    {
        $artikel = artikel::all();
        $data = array(
            'hal' => 'artikel',
            'sub' => 'lihat');
        return view('backend.lihatartikel',compact('artikel'))->with($data);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'hal' => 'artikel',
            'sub' => 'tambah');
        return view('backend.tambahartikel')->with($data);
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
    		$artikel = new artikel();
	    	$artikel->judul = $request->get('judul');
            $artikel->deskripsi = $request->get('deskripsi');
            $artikel->kategori = $request->get('kategori');
            //$artikel->img = $img;
            $artikel->penulis = Auth::user()->name;
            $artikel->dibaca = "0";
	    	$artikel->created_at = now();
	    	$artikel->updated_at = now();
	    	$artikel->save();

	        if ($request->has('gambar')) {
                $image = $request->file('gambar');
                $ext = $image->guessClientExtension();
                $img = $artikel->id.'.'.$ext;
                $image->move(public_path('artikel'),$img);
            }
            
			return redirect()->route('artikel.index')->with('sukses','artikel berhasil ditambahkan');
    	}
    	catch(\Exception $e){
    		$msg=$e->getMessage();
    		return redirect()->route('artikel.index')->with('gagal','artikel gagal ditambahkan');
    	}
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
        $data = array(
            'hal' => 'artikel',
            'sub' => 'lihat',
            'artikel' => $artikel);
        return view('backend.detailartikel',compact('artikel'))->with($data);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        $data = array(
            'hal' => 'artikel',
              'sub' => 'edit',
              'artikel' => $artikel);
        return view('backend.editartikel')->with($data);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);
  
        $artikel = artikel::find($id);
	    $artikel->nama = $request->get('judul');
        $artikel->kategori = $request->get('kategori');
        $artikel->deskripsi = $request->get('deskripsi');

      	$artikel->save();
        
        return redirect()->route('artikel.edit')
                        ->with('success','artikel updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        $artikel->delete();
  
        return redirect()->route('backend.lihatartikel')
                        ->with('success','artikel deleted successfully');
    }
}
