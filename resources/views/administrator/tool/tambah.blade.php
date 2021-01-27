@extends('administrator.backend.wrapper')

@section('title', 'Tambah Data Peralatan')
@section('mini-title', 'Tambah Data Peralatan')

@section('content')
    <div class="card">
        <div class="card-body">
            <div>
                @include('alerts')
            </div>

            <form action="{{ route('tool.tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('administrator.tool.partial.form-control', ['button' => 'Submit'])
            </form>
        </div>
    </div>
@endsection