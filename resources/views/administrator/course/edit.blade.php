@extends('administrator.backend.wrapper')

@section('title', 'Edit Mata Pelajaran')
@section('mini-title', 'Edit Mata Pelajaran')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('course.edit', $course) }}" method="post">
        @method('put')
        @csrf
        @include('administrator.course.partial.form-control', ['button' =>  'Update'])
        </form>
    </div>
</div>
@endsection