<?php

namespace App\Http\Controllers;
use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Session;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'hal' => 'site',
            'sub' => 'lihat');
        $sites=Site::all();
        return view('backend.site', compact('sites'))->with($data);
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

        try {
            $input = $request->all();
            Site::create($input);
            Session::flash('create_post_success','Site Berhasil Ditambahkan');
            return redirect()->route('site.index');
          }
          catch (\Exception $e) {
            Session::flash('create_post_fail','Site gagal Ditambahkan');
            return redirect()->route('site.index');
          }


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
        $data = array(
            'hal' => 'site',
            'sub' => 'tambah');
        $edit=true;
        $sites=Site::findOrFail($id);
        return view ('backend.tambahsite', compact('sites','edit'))->with($data);
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
        $data = array(
            'hal' => 'site',
            'sub' => 'tambah');
        $input = $request->all();
        $sites=Site::all();
        $ubah=Site::FindOrFail($id);
        $ubah->update($input);
        return view('backend.site', compact('sites'))->with($data);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
