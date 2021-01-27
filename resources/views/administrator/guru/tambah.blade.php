@extends('administrator.backend.wrapper')

@section('title','Tambah Data Guru')
@section('mini-title','Tambah Guru')
@section('content')
<script>
  $(document).ready(function() {
    $('.multiplechoice').select2();
});
</script>
    <div class="card">
        <div class="card-header">
            <h5>Tambah Data Guru</h5>
        </div>
        @include('alerts')
        <div class="card-body">
            <form action="{{ route('guru/tambah') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @include('administrator.guru.partials.form-control', ['submit'  =>  'Submit']);
              </form>
        </div>
    </div>

    
@endsection