<?php

namespace App\Http\Controllers;

use App\Projek;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = projek::latest()->paginate(5);
        $data = array(
            'hal' => 'project',
            'sub' => 'lihatproject');
        return view('backend.tambahprojek',compact('projects'))
            ->with('i', (request()->input('page', 1) - 1) * 5)->with($data);
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
        return view('projects.create')->with($data);
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
            $image = $request->file('gambar');
            $namaImg = $image->getClientOriginalName();
            $ext = $image->guessClientExtension();
            $img = $namaImg.'.'.$ext;
    		$project = new projek();
	    	$project->nama = $request->get('judul');
            $project->deskripsi = $request->get('deskripsi');
            $project->kategori = $request->get('kategori');
            //$project->img = $img;
	    	
	    	$project->created_at = now();
	    	$project->updated_at = now();
	    	$project->save();

	        $image->move(public_path('project'),$img);

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
    public function show(project $project)
    {
        $data = array(
            'hal' => 'project',
            'sub' => 'lihat');
        return view('projects.show',compact('project'))->with($data);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        return view('projects.edit',compact('project'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $project->update($request->all());
  
        return redirect()->route('projects.index')
                        ->with('success','project updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        $project->delete();
  
        return redirect()->route('projects.index')
                        ->with('success','project deleted successfully');
    }
}
