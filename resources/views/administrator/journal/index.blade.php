@extends('administrator.backend.wrapper')

@section('title', 'Data Berita Sekolah')
@section('mini-title', 'Data Berita Sekolah')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('tambah') }}" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Berita</a>
</div>
    <div class="card">
        <div class="card-header">
            <div class="container">
                <div class="row">
                    <div class="col md-3 ">
                        <a href="{{ route('journal.excel') }}" class="btn btn-info">Download Excel File</a>
                    </div>
                    <div class="col-md-3">
                        <form class="d-flex justify-content-start" action="{{ route('journal.cari') }}" method="get">   
                            <input type="search" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                @include('alerts')
            </div>
            <table class=" table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th scope="col">Judul</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index=1 ?>
                    @foreach ($journals as $journal)
                    <tr>
                        <td>{{ $journals->count() * ($journals->currentPage() - 1) + $loop->iteration }}</td>
                        <td>{{ $journal->judul }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$journal->thumbnail) }}" alt="{{ $journal->judul }}" width="150" height="100">
                        </td>
                        <td>
                            <form action="{{ route('delete', $journal) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('edit', $journal) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</a>
    
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