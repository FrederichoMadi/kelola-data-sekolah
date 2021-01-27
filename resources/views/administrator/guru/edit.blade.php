@extends('administrator.backend.wrapper')

@section('title', 'Edit Data Guru')
@section('mini-title', 'Edit Data Guru')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Data Guru</h5>
        </div>
        @include('alerts')
        <div class="card-body">
            <form action="{{ route('guru.edit', $teacher) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            @include('administrator.guru.partials.form-control', ['submit'  =>  'Updated'])
            </form>
        </div>
    </div>
@endsection