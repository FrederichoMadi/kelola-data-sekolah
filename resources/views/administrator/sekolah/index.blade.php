@extends('administrator.backend.wrapper')

@section('title', 'Sekolah')
@section('mini-title', 'Data Sekolah')
@section('content')
<div class="mt-2">
    @include('alerts')
</div>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <h5>Data Sekolah</h5>
                </div>
                @foreach ($school as $school)
                <div>
                    <a href="{{ route('school.edit', $school) }}" class="btn btn-success"><i class="fa fa-edit"></i> Edit Data Sekolah</a>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('storage/'.$school->thumbnail) }}" width="300" width="300" class="img-fluid img circle img-center">
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold" style="font-size: 14px">
                                    Nama Sekolah
                                </div>
                                <div style="font-size: 14px">
                                    {{ $school->nama_sekolah }}
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold" style="font-size: 14px">
                                    Alamat Sekolah
                                </div>
                                <div style="font-size: 14px">
                                    {{ $school->alamat }}
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold" style="font-size: 14px">
                                    Telepon Sekolah
                                </div>
                                <div style="font-size: 14px">
                                    {{ $school->telepon }}
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold" style="font-size: 14px">
                                    E-Mail Sekolah
                                </div>
                                <div style="font-size: 14px">
                                    {{ $school->email }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="font-weight-bolder" style="font-size: 24px">
                                    Sejarah Sekolah
                                </div>
                                <div class="mt-2">
                                    <p class="text-justify">{!! $school->sejarah !!}</p>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <div class="font-weight-bolder" style="font-size: 24px">
                                    Visi & Misi Sekolah
                                </div>
                                <div class="mt-2">
                                    {!! $school->visi_misi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
