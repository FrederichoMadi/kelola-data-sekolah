@extends('administrator.backend.wrapper')

@section('title', 'Data Mata Pelajaran')
@section('mini-title', 'Data Mata Pelajaran')
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('course.tambah') }}" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Data</a>
</div>
<div class="card">
    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col md-3 ">
                    <a href="{{ route('course.excel') }}" class="btn btn-info">Download Excel File</a>
                </div>
                <div class="col-md-3">
                    <form class="d-flex justify-content-start" action="{{ route('course.cari') }}" method="get">
                        
                        <input type="search" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Search...">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        
                    </form>

                </div>
            </div>
        </div>
        <div class="mt-2">
            @include('alerts')
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hovered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Mata Pelajaran</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $index=1
                @endphp
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $courses->count() * ($courses->currentPage() - 1) + $loop->iteration }}</td>
                    <td>{{ $course->kode_course }}</td>
                    <td>{{ $course->name }}</td>
                    <td>
                        <form action="{{ route('course.delete', $course) }}" method="post">
                            @csrf
                            <a href="{{ route('course.edit', $course) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</a>

                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</button>
                        </form>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection