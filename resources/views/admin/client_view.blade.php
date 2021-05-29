@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Client')
    @php($bc2 = 'Detail Client')

        <div class="row layout-top-spacing">
            <div id="flActionButtons" class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-5">
                                <h4>Detail Client</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                       @foreach($clients as $client)
                           <div class="row">
                               <div class="table-responsive col-sm-8">
                                   <table class="table">
                                       <tr>
                                           <td><h5>Nama: </h5></td>
                                           <td><h5>{{ $client->name }}</h5></td>
                                       </tr>
                                       <tr>
                                           <td><h5>Deskripsi: </h5></td>
                                           <td><h5>{{ $client->descriptions }}</h5></td>
                                       </tr>
                                   </table>
                               </div>
                               <div class="col-sm-4">
                                   <h5 class="mb-3">Logo Client:</h5>
                                   <img style="max-width: 300px" src="{{ asset('client_logo/'.$client->logo) }}">
                               </div>
                           </div>
                        @endforeach
                           <a class="btn btn-primary ml-3 mt-5" href="/admin_side/client">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
