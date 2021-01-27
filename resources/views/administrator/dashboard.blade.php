@extends('administrator.backend.wrapper')

@section('title', 'Dashboard')
@section('mini-title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $journal->count() }}</h3>

            <p>Data Journal</p>
          </div>
          <div class="icon">
            <i class="far fa-newspaper"></i>
            
          </div>
          <a href="{{ route('journal') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $course->count() }}</h3>

            <p>Data Mata Pelajaran</p>
          </div>
          <div class="icon">
            <i class="fas fa-book-open"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $teacher->count() }}</h3>

            <p>Data Guru</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('guru/dashboard') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $tool->count() }}</h3>

            <p>Data Peralatan</p>
          </div>
          <div class="icon">
            <i class="fas fa-tools"></i>
          </div>
          <a href="{{ route('tool') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
</div>
@endsection