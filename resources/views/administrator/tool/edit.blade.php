@extends('administrator.backend.wrapper')

@section('title', 'Edit Data Peralatan')
@section('mini-title', 'Edit Data Peralatan')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tool.edit', $tool) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('administrator.tool.partial.form-control', ['button' => 'Update'])
            </form>
        </div>
    </div>
@endsection