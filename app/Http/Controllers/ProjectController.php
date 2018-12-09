<?php

namespace App\Http\Controllers;

use App\Projek;
use App\media;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projek = projek::all();
        $data = array(
            'hal' => 'project',
            'sub' => 'lihat');
        return view('backend.lihatprojek',compact('projek'))->with($data);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'hal' => 'project',
            'sub' => 'tambah');
        return view('backend.tambahprojek')->with($data);
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
    		$project = new projek();
	    	$project->nama = $request->get('judul');
            $project->deskripsi = $request->get('deskripsi');
            $project->kategori = $request->get('kategori');
            //$project->img = $img;
	    	$project->dibaca = "0";
	    	$project->created_at = now();
	    	$project->updated_at = now();
            $project->save();

            $bb=0;
            for($aa=1;$aa<=$request->get("jumlahmedia");$aa++){
                if ($request->has('gambar'.$aa)) {
                    $bb++;

                    $image = $request->file('gambar'.$aa);
                    $ext = $image->guessClientExtension();
                    $img = $project->id.'-'.$bb.'.'.$ext;
                    $image->move(public_path('project'),$img);

                    $media = new media();
                    $media->idkonten = $project->id;
                    $media->idmedia = $bb;
                    $media->format = $ext;
                    $media->kategori = "project";
                    $media->created_at = now();
                    $media->updated_at = now();
                    $media->save();
                }
            }
            
			return redirect()->route('project.index')->with('sukses','projek berhasil ditambahkan');
    	}
    	catch(Exception $e){
    		$msg=$e->getMessage();
    		return redirect()->route('project.index')->with('gagal',$msg);
    	}
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(projek $project)
    {
        $media = media::where('idkonten', '=', $project->id)->get();
        $data = array(
            'hal' => 'project',
            'sub' => 'lihat',
            'projek' => $project,
            'media' => $media);
        return view('backend.detailprojek',compact('project'))->with($data);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(projek $project)
    {
        $data = array(
            'hal' => 'project',
              'sub' => 'edit',
              'projek' => $project);
        return view('backend.editprojek')->with($data);
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);
  
        $project = projek::find($id);
	    $project->nama = $request->get('judul');
        $project->kategori = $request->get('kategori');
        $project->deskripsi = $request->get('deskripsi');

      	$project->save();
        
        return redirect()->route('project.show',$project->id)
                        ->with('success','project updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(projek $project)
    {
        $project->delete();
  
        return redirect()->route('project.index')
                        ->with('success','project deleted successfully');
    }
}
