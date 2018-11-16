<?php

namespace App\Http\Controllers;

use App\Projek;
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

	        if ($request->has('gambar')) {
                $image = $request->file('gambar');
                $ext = $image->guessClientExtension();
                $img = $project->id.'.'.$ext;
                $image->move(public_path('project'),$img);
            }
            
			return redirect()->route('project.index')->with('sukses','projek berhasil ditambahkan');
    	}
    	catch(\Exception $e){
    		$msg=$e->getMessage();
    		return redirect()->route('project.index')->with('gagal','projek gagal ditambahkan');
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
        $data = array(
            'hal' => 'project',
            'sub' => 'lihat',
            'projek' => $project);
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
        
        return redirect()->route('project.edit')
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
  
        return redirect()->route('backend.lihatprojek')
                        ->with('success','project deleted successfully');
    }
}
