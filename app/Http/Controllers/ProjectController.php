<?php

namespace App\Http\Controllers;

use App\Project;
use App\Project_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->get();

        return view('admin.project_add', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'client_id' => 'required',
            'category' => 'required',
            'date' => 'required',
            'descriptions' => 'required'
        ]);

        $project = new Project;
        $project->name = $request->name;
        $project->client_id = $request->client_id;
        $cat = $request->input('category');
        $project->category = implode(', ', $cat);
        $project->date = $request->date;
        $project->url = $request->url;
        $project->descriptions = $request->descriptions;

        if($request->hasFile('p_image')){
            $p_image = $request->file('p_image');
            $fileName = time().'.'.$p_image->getClientOriginalName();
            $ServicesPath = public_path('project_images');
            $p_image->move($ServicesPath, $fileName);
            $project->p_image = $fileName;
        }

        if($request->hasFile('s_images')) {
           foreach ($request->file('s_images') as $image){

               $fileName = time() . '.' . $image->getClientOriginalName();
               $ServicesPath = public_path('project_images');
               $image->move($ServicesPath, $fileName);
               $name[] = $fileName;
           }
        }
        $project->s_images = json_encode($name);

//        dd($project);

        $project->save();

        return redirect('/admin_side/project')->with('success',"Portfolio telah ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $projects = Project::join('clients', 'projects.client_id', '=', 'clients.id')
            ->select('projects.*', 'clients.*', 'projects.id AS p_id', 'projects.name AS p_name', 'projects.descriptions AS p_desc', 'clients.id AS c_id', 'clients.name AS c_name', 'clients.descriptions AS c_desc')
            ->get();

//        dd($project);

        return view('admin.project_show', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */

    public function view(Project $project, $id)
    {
        $projects = Project::join('clients', 'projects.client_id', '=', 'clients.id')
            ->select('projects.*', 'clients.*', 'projects.id AS p_id', 'projects.name AS p_name', 'projects.descriptions AS p_desc', 'clients.id AS c_id', 'clients.name AS c_name', 'clients.descriptions AS c_desc')
            ->where('projects.id',$id)
            ->get();

//        dd($project);

        return view('admin.project_view', compact('projects'));
    }

    public function edit(Project $project, $id)
    {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->get();


        $projects = Project::join('clients', 'projects.client_id', '=', 'clients.id')
            ->select('projects.*', 'clients.*', 'projects.id AS p_id', 'projects.name AS p_name', 'projects.descriptions AS p_desc', 'clients.id AS c_id', 'clients.name AS c_name', 'clients.descriptions AS c_desc')
            ->where('projects.id',$id)
            ->get();

//        dd($project);

        return view('admin.project_edit', compact('projects', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project, $id)
    {
        $request->validate([
            'name' => 'required',
            'client_id' => 'required',
            'category' => 'required',
            'date' => 'required',
            'descriptions' => 'required'
        ]);

        $project = Project::where('id',$id)->first();
        $project->name = $request->name;
        $project->client_id = $request->client_id;
        $cat = $request->input('category');
        $project->category = implode(', ', $cat);
        $project->date = $request->date;
        $project->url = $request->url;
        $project->descriptions = $request->descriptions;

        if($request->hasFile('p_image')){
            $p_image = $request->file('p_image');
            $fileName = time().'.'.$p_image->getClientOriginalName();
            $ServicesPath = public_path('project_images');
            $p_image->move($ServicesPath, $fileName);
            $project->p_image = $fileName;
        }

        $newimages = $request->file('s_images');

        if ($newimages != $project->s_image) {

            if ($request->hasFile('s_images')) {
                foreach ($request->file('s_images') as $image) {

                    $fileName = time() . '.' . $image->getClientOriginalName();
                    $ServicesPath = public_path('project_images');
                    $image->move($ServicesPath, $fileName);
                    $name[] = $fileName;
                }
            }
            $project->s_images = json_encode($name);
        }

        dd($newimages);

        $project->save();

        return redirect('admin_side/project')->with('success',"Portfolio telah diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id)
    {
        $projects = Project::where('id',$id)->first();

        if ($projects != null) {
            $projects->delete();
            return redirect('/admin_side/project')->with('success',"Portfolio telah dihapus");
        }

        return redirect('/admin_side/project')->with('fail',"Portfolio tidak terhapus");
    }
}
