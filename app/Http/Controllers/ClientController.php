<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
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
        return view('admin.client_add');
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
            'descriptions' => 'required',
            'logo' => 'required'
        ]);

        $client = new Client;
        $client->name = $request->name;
        $client->descriptions = $request->descriptions;

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $fileName = time().'.'.$logo->getClientOriginalName();
            $ServicesPath = public_path('client_logo');
            $logo->move($ServicesPath, $fileName);
            $client->logo = $fileName;
        }

//        dd($client);

        $client->save();

        return redirect('/admin_side/client')->with('success',"Client telah ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->get();

        return view('admin.client_show', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function view(Client $client, $id)
    {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->where('clients.id', $id)
            ->get();

        return view('admin.client_view', compact('clients'));
    }

    public function edit(Client $client, $id)
    {
        $clients = DB::table('clients')
            ->select('clients.*')
            ->where('clients.id', $id)
            ->get();

        return view('admin.client_edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client, $id)
    {
        $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            'logo' => 'required'
        ]);

        $client = Client::where('id',$id)->first();
        $client->name = $request->name;
        $client->descriptions = $request->descriptions;

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $fileName = time().'.'.$logo->getClientOriginalName();
            $ServicesPath = public_path('client_logo');
            $logo->move($ServicesPath, $fileName);
            $client->logo = $fileName;
        }

//        dd($client);

        $client->save();

        return redirect('/admin_side/client')->with('success',"Client telah diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        $clients = Client::where('id',$id)->first();

        if ($clients != null) {
            $clients->delete();
            return redirect('/admin_side/client')->with('success',"Client telah dihapus");
        }

        return redirect('/admin_side/client')->with('fail',"Client tidak terhapus");
    }
}
