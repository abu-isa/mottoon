@extends('layout/main')

@section('title', '.:MOTTOON - EDIT DATA WAKTU BELAJAR:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Edit Data</h1>
          <p>Edit Data Level Belajar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Edit Data</a></li>
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
              <form method="POST" action="/parts/{{ $part->id }}">
              @method('patch')
              @csrf
                <div class="form-group">
                  <label class="control-label">Waktu Belajar</label>
                  <input class="form-control @error('fatroh') is-invalid @enderror" type="text" name="fatroh" value="{{ $part->fatroh }}">
                  @error('fatroh')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
                <a class="btn btn-secondary" href="/parts"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </form>
            </div>
          </div>
          </div>
</main>
@endsection