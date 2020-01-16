@extends('layout/main')

@section('title', '.:MOTTOON - TAMBAH KELOMPOK:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Tambah Data</h1>
          <p>Input Data Pengajar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Tambah Data</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Form Tambah Data</h3>
            <div class="tile-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
              <form method="post" action="/groups">
              @csrf
                <div class="form-group">
                  <label class="control-label" for="kelompok">Kelompok</label>
                  <input class="form-control @error('kelompok') is-invalid @enderror" id="kelompok" type="text" name="kelompok" value="{{ old('kelompok') }}" placeholder="Masukan kelompok">
                  @error('kelompok')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                </button>
                &nbsp;&nbsp;&nbsp;
                <a class="btn btn-secondary" href="/groups">
                  <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel
                </a>
                </div>
              </form>
            </div>
          </div>
          </div>
</main>
@endsection