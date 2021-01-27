@extends('administrator.backend.wrapper')

@section('title', 'Data Guru')
@section('mini-title', 'Data Guru')
@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('guru/tambah') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
</div>
<div class="card">

    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col md-3 ">
                    <a href="{{ route('guru.excel') }}" class="btn btn-info">Download Excel File</a>
                </div>
                <div class="col-md-3">
                    <form class="d-flex justify-content-start" action="{{ route('guru.cari') }}" method="get">
                        
                        <input type="search" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Search...">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        
                    </form>

                </div>
            </div>
        </div>
        <div class="mt-2">
            @include('alerts')
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>NIP</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        
                    <tr>
                        <td>{{ $teachers->count() * ($teachers->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->NIDN }}</td>
                        <td>{{ $teacher->NIP }}</td>
                        <td>
                            <img src="{{ asset($teacher->takeImage()) }}" width="100" height="100">
                        </td>
                        <td>
                            <form action="{{ route('guru.delete', $teacher) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('guru.edit', $teacher) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</a>
    
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
</div>
{{ $teachers->links() }}

@endsection