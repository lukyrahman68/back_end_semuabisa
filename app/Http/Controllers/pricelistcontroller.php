<?php

namespace App\Http\Controllers;

use App\pricelist;
use Illuminate\Http\Request;

class pricelistController extends Controller
{
    public function index()
    {
        $pricelist = pricelist::all();
        $data = array(
            'hal' => 'pricelist',
            'sub' => 'lihat');
        return view('backend.lihatpricelist',compact('pricelist'))->with($data);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'hal' => 'pricelist',
            'sub' => 'tambah');
        return view('backend.tambahpricelist')->with($data);
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
    		$pricelist = new pricelist();
	    	$pricelist->kategori = $request->get('kategori');
            $pricelist->subkategori = $request->get('subkategori');
            $pricelist->paket = $request->get('paket');
            $pricelist->deskripsi = $request->get('deskripsi');
            $pricelist->harga = $request->get('harga');
	    	$pricelist->created_at = now();
	    	$pricelist->updated_at = now();
            $pricelist->save();
            
			return redirect()->route('pricelist.index')->with('sukses','pricelist berhasil ditambahkan');
    	}
    	catch(\Exception $e){
    		$msg=$e->getMessage();
    		return redirect()->route('pricelist.index')->with('gagal',$msg);
    	}
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function show(pricelist $pricelist)
    {
        $data = array(
            'hal' => 'pricelist',
            'sub' => 'lihat',
            'pricelist' => $pricelist);
        return view('backend.detailpricelist',compact('pricelist'))->with($data);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function edit(pricelist $pricelist)
    {
        $data = array(
            'hal' => 'pricelist',
              'sub' => 'edit',
              'pricelist' => $pricelist);
        return view('backend.editpricelist')->with($data);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'subkategori' => 'required',
            'paket' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);
  
        $pricelist = pricelist::find($id);
	    $pricelist->kategori = $request->get('kategori');
        $pricelist->subkategori = $request->get('subkategori');
        $pricelist->paket = $request->get('paket');
        $pricelist->deskripsi = $request->get('deskripsi');
        $pricelist->harga = $request->get('harga');

      	$pricelist->save();
        
        return redirect()->route('pricelist.show',$pricelist->id)
                        ->with('success','pricelist updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pricelist  $pricelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(pricelist $pricelist)
    {
        $pricelist->delete();  
        return redirect()->route('pricelist.index')
                        ->with('success','pricelist deleted successfully');
    }
}
