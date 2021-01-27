@extends('administrator.backend.wrapper')

@section('title', 'Data Peralatan')
@section('mini-title', 'Data Peralatan')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('tool.tambah') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Data</a>
</div>
<div class="card">

    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col md-3 ">
                    <a href="{{ route('tool.excel') }}" class="btn btn-info">Download Excel File</a>
                </div>
                <div class="col-md-3">
                    <form class="d-flex justify-content-start" action="{{ route('tool.cari') }}" method="get">
                        
                        <input type="search" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Search...">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
        <div class="card-body">
            <div class="mt-2">
                @include('alerts')
            </div>
            <table class="table table-bordered table-hovered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                            $index = 1
                        @endphp 
                        @foreach ($tools as $tool)
                        <td>{{ $tools->count() * ($tools->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{ $tool->name }}</td>
                        <td>{{ $tool->jumlah }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$tool->thumbnail) }}" alt="{{ $tool->name }}" width="150" height="100">
                        </td>
                        <td>
                            <form action="{{ route('tool.hapus', $tool) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('tool.edit', $tool) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</a>
    
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection