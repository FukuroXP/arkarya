@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Client')
    @php($bc2 = 'Tambah Client')

        <div class="row layout-top-spacing">
            <div id="flActionButtons" class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tambah Client</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form class="form-vertical" action="/cliego" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="control-label">Nama:</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            <div class="form-group mb-4">
                                <label class="control-label">Deskripsi:</label>
                                <textarea class="form-control" name="descriptions"></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label class="control-label">Logo Client:</label>
                                <input type="file" name="logo" class="form-control-file col-sm-3">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
