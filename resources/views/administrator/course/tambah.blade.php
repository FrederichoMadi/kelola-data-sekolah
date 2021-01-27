@extends('administrator.backend.wrapper')

@section('title', 'Data Mata Pelajaran')
@section('mini-title', 'Data Mata Pelajaran')
@section('content')
<div class="card">
    <div class="mt-2">
        @include('alerts')
    </div>
    <div class="card-body">
        <form action="{{ route('course.tambah') }}" method="post">
            @csrf
            @include('administrator.course.partial.form-control', ['button' => 'Submit'])
        </form>
    </div>
</div>

@endsection