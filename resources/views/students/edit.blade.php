@extends('layout/main')

@section('title', '.:MOTTOON - EDIT DATA SISWA:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Edit Data</h1>
          <p>Edit Data Siswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Edit</a></li>
        </ul>
      </div>
      @if(session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Form Edit Data</h3>
            <div class="tile-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
              <form method="POST" action="/students/{{ $student->id }}">
              @method('patch')
              @csrf
                <div class="form-group">
                  <label class="control-label">Nama</label>
                  <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ $student->nama }}">
                  @error('nama')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>                
                <div class="form-group">
                  <label class="control-label" for="nama_arab">Nama Arab</label>
                  <input class="form-control @error('nama_arab') is-invalid @enderror" id="nama_arab" type="text" name="nama_arab" value="{{ $student->nama_arab }}">
                  @error('nama_arab')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Nomor Induk</label>
                  <input class="form-control @error('nis') is-invalid @enderror" type="text" name="nis" value="{{ $student->nis }}">
                  @error('nis')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Kode User</label>
                  <input class="form-control @error('usercode') is-invalid @enderror" type="text" name="usercode" value="{{ $student->usercode }}">
                  @error('usercode')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Tanggal Lahir</label>
                  <input class="form-control @error('tgl_lahir') is-invalid @enderror" type="date" name="tgl_lahir" value="{{ student('tgl_lahir') }}" placeholder="Masukan Tanggal Lahir">
                  @error('tgl_lahir')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Phone</label>
                  <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ $student->phone }}">
                  @error('phone')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{ $student->email }}">
                  @error('email')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Kota</label>
                  <input class="form-control @error('kota') is-invalid @enderror" type="text" name="kota" value="{{ $student->kota }}">
                  @error('kota')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea class="form-control" rows="4" name="alamat"> {{ $student->alamat }} </textarea>
                </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-secondary" href="/students"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </form>
            </div>
          </div>
          </div>
</main>
@endsection