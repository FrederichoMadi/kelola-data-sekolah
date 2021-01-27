@extends('administrator.backend.wrapper')

@section('title', 'Edit Berita Sekolah')
@section('mini-title', 'Edit Berita Sekolah')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('edit', $journal) }}" method="post" enctype="multipart/form-data"> 
                @method('put')
                @csrf

                @include('administrator.journal.partial.form-control', ['button' => 'Update']);
            </form>
        </div>
    </div>
@endsection