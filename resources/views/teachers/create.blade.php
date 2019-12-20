@extends('layout/main')

@section('title', '.:MOTTOON - TAMBAH DATA PENGAJAR:.')
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
              <form method="post" action="/teachers">
              @csrf
                <div class="form-group">
                  <label class="control-label" for="nama">Nama</label>
                  <input class="form-control @error('nama') is-invalid @enderror" id="nama" type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukan Nama">
                  @error('nama')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Nomor Induk Pengajar</label>
                  <input class="form-control @error('nip') is-invalid @enderror" type="text" name="nip" value="{{ old('nip') }}" placeholder="Masukan Nomor Induk Pengajar">
                  @error('nip')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Phone</label>
                  <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" placeholder="Masukan Nomor Phone Pengajar">
                  @error('phone')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Masukan Email">
                  @error('email')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Alamat</label>
                  <textarea class="form-control" rows="4" name="alamat" placeholder="Masukan alamat"></textarea>
                  
                </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                </button>
                &nbsp;&nbsp;&nbsp;
                <a class="btn btn-secondary" href="/teachers">
                  <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel
                </a>
                </div>
              </form>
            </div>
          </div>
          </div>
</main>
@endsection