@extends('layout/main')

@section('title', '.:MOTTOON - DETAIL SISWA:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Detail Data</h1>
          <p>Material design inspired cards</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Detail Data</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">All Items</h3>
              <div class="btn-group">
                <a class="btn btn-primary" href="/students/create"><i class="fa fa-lg fa-plus"></i></a>
                <a class="btn btn-primary" href="/students/{{ $student->id }}/edit"><i class="fa fa-lg fa-edit"></i></a>
                <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-lg fa-trash"></i></button>
                </form>
              </div>
            </div>
            <div class="tile-body">

              <b>Nama Siswa : {{ $student->nama }} </b><br>
              NIS : {{ $student->nis }}<br>
              Email : {{ $student->email }}<br>
              Telepon : {{ $student->phone }}<br>
              Alamat : {{ $student->alamat }}<br>
            </div>
            <br/>
            <a href="/students" class="btn btn-primary btn-sm">Back</button></a>  
            
          </div>
        </div>
      </div>
</main>
@endsection