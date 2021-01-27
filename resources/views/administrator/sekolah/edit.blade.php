@extends('administrator.backend.wrapper')

@section('title', 'Tambah Data Sekolah')
@section('mini-title', 'Tambah Data Sekolah')
@section('content')
    <div class="card">
        <div class="card-header">
            <div>
                <h5>Tambah Data Sekolah</h5>
            </div>
            @include('alerts')
        </div>
        <div class="card-body">
            <form action="{{ route('school.edit', $school) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group row">
                    <label for="thumbnail" class="col-sm-2 col-form-label">Foto Sekolah</label>
                    <div class="col-sm-3">
                        <input value="{{ old('thumbnail') ?? $school->thumbnail }}" type="file" class="form-control" name="thumbnail" id="thumbnail">
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$school->thumbnail) }}" height="200" width="250">
                        </div>
                        @error('thumbnail')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-10">
                        <input value="{{ old('nama_sekolah') ?? $school->nama_sekolah }}" type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="Input your name">
                        @error('nama_sekolah')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input value="{{ old('alamat') ?? $school->alamat }}" type="text" class="form-control" name="alamat" id="alamat" placeholder="Input your address">
                        @error('alamat')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input value="{{ old('telepon') ?? $school->telepon }}" type="number" class="form-control" name="telepon" id="telepon" placeholder="Input your number">
                        @error('telepon')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input value="{{ old('email') ?? $school->email }}" type="email" class="form-control" name="email" id="email" placeholder="Input your number">
                        @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sejarah" class="col-sm-2 col-form-label">Sejarah Sekolah</label>
                    <div class="col-sm-10">
                        <textarea id="sejarah" class="form-control" name="sejarah" rows="10" cols="50">{{ old('sejarah') ?? $school->sejarah }}</textarea>
                        @error('sejarah')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="visi_misi" class="col-sm-2 col-form-label">Visi & Misi Sekolah</label>
                    <div class="col-sm-10">
                        <textarea id="visi_misi" class="form-control" name="visi_misi" rows="10" cols="50">{{ old('visi_misi') ?? $school->visi_misi }}</textarea>
                        @error('visi_misi')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                </div>
            </form>
        </div>
    </div>

    {{-- CKeditor4 --}}
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script>
    var sejarah = document.getElementById("sejarah");
        CKEDITOR.replace(sejarah,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;

    var visi_misi = document.getElementById("visi_misi");
        CKEDITOR.replace(visi_misi,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
    </script>
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
@endsection