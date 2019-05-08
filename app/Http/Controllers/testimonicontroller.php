<?php

namespace App\Http\Controllers;

use App\testimoni;
use App\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class testimoniController extends Controller
{
    public function index()
    {
        $testimoni = testimoni::all();
        $data = array(
            'hal' => 'testimoni',
            'sub' => 'lihat');
        return view('backend.lihattestimoni',compact('testimoni'))->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'hal' => 'testimoni',
            'sub' => 'tambah');
        return view('backend.tambahtestimoni')->with($data);
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
    		$testimoni = new testimoni();
	    	$testimoni->nama = $request->get('nama');
            $testimoni->testimoni = $request->get('testimoni');
	    	$testimoni->created_at = now();
	    	$testimoni->updated_at = now();
            $testimoni->save();
            
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
            $ext = $image->guessClientExtension();
            $img = $testimoni->id.'.'.$ext;
            $image->move(public_path('testimoni'),$img);
            }
           
            
            $media = new media();
            $media->idkonten = $testimoni->id;
            $media->idmedia = "1";
            $media->format = "jpeg";
            $media->kategori = "testimoni";
            $media->created_at = now();
            $media->updated_at = now();
            $media->save();
			return redirect()->route('testimoni.index')->with('sukses','testimoni berhasil ditambahkan');
    	}
    	catch(\Exception $e){
    		$msg=$e->getMessage();
    		return redirect()->route('testimoni.index')->with('gagal',$msg);
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        $data = array(
            'hal' => 'testimoni',
            'sub' => 'lihat',
            'testimoni' => $testimoni);
        return view('backend.detailtestimoni',compact('testimoni'))->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni)
    {
        $data = array(
            'hal' => 'testimoni',
              'sub' => 'edit',
              'testimoni' => $testimoni);
        return view('backend.edittestimoni')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'testimoni' => 'required',
        ]);

        $testimoni = testimoni::find($id);
	    $testimoni->nama = $request->get('nama');
        $testimoni->testimoni = $request->get('testimoni');

      	$testimoni->save();

        return redirect()->route('testimoni.show',$testimoni->id)
                        ->with('success','testimoni updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimoni $testimoni)
    {
        $testimoni->delete();

        return redirect()->route('testimoni.index')
                        ->with('success','testimoni deleted successfully');
    }
    public function mail(request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $pesan = $request->pesan;
        Mail::to('semuabisa.art@gmail.com')->send(new SendMail($nama,$email,$pesan));
    
        return redirect()->route('contact_us');
    }
}
