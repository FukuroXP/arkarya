@extends('layouts.admin.main')
@section('content')
    @php($bc1 = 'Client')
    @php($bc2 = 'Daftar Client')

    <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <h4>Daftar Client</h4>
            <div class="widget-content widget-content-area br-6">
                <table id="zero-config" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Logo</th>
                        <th class="no-content">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->descriptions }}</td>
                            <td>
                                <img style="max-width: 150px" src="{{ asset('client_logo/'.$client->logo) }}">
                            </td>
                            <td>
                                <form method="POST" action="{{ route('client.destroy', [$client->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group" role="group">
                                        <button onclick="location.href='{{ route('client.view', [$client->id]) }}'" type="button" class="btn btn-dark text-primary"> <i class="fas fa-external-link"></i></button>
                                        <button onclick="location.href='{{ route('client.edit', [$client->id]) }}'" type="button" class="btn btn-dark text-secondary"> <i class="fas fa-edit"></i></button>
                                        <button onclick="befordell()" type="submit" class="btn btn-dark text-danger"> <i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection
