@extends('layout/main')

@section('title', '.:MOTTOON - TAMBAH DATA KITAB:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Tambah Data</h1>
          <p>Input Data Kitab</p>
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
              <form method="post" action="/books">
              @csrf
              
                <div class="form-group">
                    <label for="exampleSelect1">Mustawa</label>
                    <select class="form-control" id="exampleSelect1" name="level_id">
                    @foreach( $levels as $level ) 
                      <option value="{{ $level->id }}"> {{ $level->level }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label" for="kitab">Kitab</label>
                  <input class="form-control @error('kitab') is-invalid @enderror" id="kitab" type="text" name="kitab" value="{{ old('kitab') }}" placeholder="Masukan nama kitab">
                  @error('kitab')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="control-label" for="pengarang">Pengarang</label>
                  <input class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" type="text" name="pengarang" value="{{ old('pengarang') }}" placeholder="Masukan nama pengarang">
                  @error('pengarang')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                </button>
                &nbsp;&nbsp;&nbsp;
                <a class="btn btn-secondary" href="/books">
                  <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel
                </a>
                </div>
              </form>
            </div>
          </div>
          </div>
</main>
@endsection