@extends('administrator.backend.wrapper')

@section('title', 'Tambah Berita Sekolah')
@section('mini-title', 'Tambah Berita Sekolah')

@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                @include('alerts')
            </div>

            <form action="{{ route('tambah') }}" method="post" enctype="multipart/form-data">
            @csrf

            @include('administrator.journal.partial.form-control', ['button' => 'Submit'])
            
            </form>
        </div>
    </div>
@endsection