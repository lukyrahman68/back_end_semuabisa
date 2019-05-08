<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $site = Site::all();
        $data = array(
            'hal' => 'site',
            'sub' => 'lihat');
        return view('backend.lihatsite',compact('site'))->with($data);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'hal' => 'site',
            'sub' => 'tambah');
        return view('backend.tambahsite')->with($data);
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
    		$site = new Site();
	    	$site->page = $request->get('page');
            $site->deskripsi1 = $request->get('deskripsi1');
            $site->deskripsi2 = $request->get('deskripsi2');
            $site->deskripsi3 = $request->get('deskripsi3');
            $site->metadatadescription = $request->get('metadatadescription');
            $site->metadatakeywords = $request->get('metadatakeywords');
	    	$site->created_at = now();
	    	$site->updated_at = now();
	    	$site->save();
            
			return redirect()->route('site.index')->with('sukses','site berhasil ditambahkan');
    	}
    	catch(\Exception $e){
    		$msg=$e->getMessage();
    		return redirect()->route('site.index')->with('gagal','site gagal ditambahkan');
    	}
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(site $site)
    {
        $data = array(
            'hal' => 'site',
            'sub' => 'lihat',
            'site' => $site);
        return view('backend.detailsite',compact('site'))->with($data);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        $data = array(
            'hal' => 'site',
              'sub' => 'edit',
              'site' => $site);
        return view('backend.editsite')->with($data);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);
  
        $site = Site::find($id);
	    $site->nama = $request->get('judul');
        $site->kategori = $request->get('kategori');
        $site->deskripsi = $request->get('deskripsi');

      	$site->save();
        
        return redirect()->route('site.show',$site->id)
                        ->with('success','site updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        $site->delete();
  
        return redirect()->route('site.index')
                        ->with('success','site deleted successfully');
    }
}
