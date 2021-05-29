<?php

namespace App\Http\Controllers;

use App\Client;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->get();

        return view('index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function portfolio_view(Client $client, Project $project, $id)
    {
        $projects = Project::join('clients', 'projects.client_id', '=', 'clients.id')
            ->select('projects.*', 'clients.*', 'projects.id AS p_id', 'projects.name AS p_name', 'projects.descriptions AS p_desc', 'clients.id AS c_id', 'clients.name AS c_name', 'clients.descriptions AS c_desc')
            ->where('projects.id',$id)
            ->get();

//        dd($project);

        return view('portfolio_detail', compact('projects'));
    }

    public function portfolio()
    {
        $projects = DB::table('projects')
            ->select('projects.*')
            ->get();

        return view('portfolio', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
