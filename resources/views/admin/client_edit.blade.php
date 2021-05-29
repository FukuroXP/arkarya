@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Client')
    @php($bc2 = 'Edit Client')

        <div class="row layout-top-spacing">
            <div id="flActionButtons" class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-5">
                                <h4>Edit Client</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                       @foreach($clients as $client)
                            <form class="form-vertical" action="/clieup/{{ $client->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="control-label">Nama:</label>
                                    <input value="{{ $client->name }}" type="text" name="name" class="form-control" >
                                </div>
                                <div class="form-group mb-4">
                                    <label class="control-label">Deskripsi:</label>
                                    <textarea class="form-control" name="descriptions">{{ $client->descriptions }}</textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="control-label">Logo Client:</label>
                                    <div class="mb-4">
                                        <img style="max-width: 200px" src="{{ asset('client_logo/'.$client->logo) }}">
                                    </div>
                                    <input type="file" name="logo" class="form-control-file col-sm-3" value="{{ $client->logo }}">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3">
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection
