@extends('layout/main')

@section('title', '.:MOTTOON - EDIT DATA MARHALAH:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Edit Data</h1>
          <p>Edit Data marhalah</p>
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
              <form method="POST" action="/sections/{{ $section->id }}">
              @method('patch')
              @csrf
              
                <div class="form-group">
                    <label for="exampleSelect1">Kitab</label>
                    <select class="form-control" id="exampleSelect1" name="book_id">
                      @foreach( $book as $row)
                      <option value="{{ $row->id }}" {{ $row->id == $section->book_id ? 'selected' : '' }}> {{ $row->kitab }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label" for="marhalah">Marhalah</label>
                  <select class="form-control @error('marhalah') is-invalid @enderror" id="marhalah" name="marhalah">
                    <option value="Marhalah 1"> Marhalah 1</option>
                    <option value="Marhalah 2"> Marhalah 2</option>
                    <option value="Marhalah 3"> Marhalah 3</option>
                    <option value="Marhalah 4"> Marhalah 4</option>
                    <option value="Marhalah 5"> Marhalah 5</option>
                    <option value="Marhalah 6"> Marhalah 6</option>
                    <option value="Marhalah 7"> Marhalah 7</option>
                    <option value="Marhalah 8"> Marhalah 8</option>
                    <option value="Marhalah 9"> Marhalah 9</option>
                    <option value="Marhalah 10"> Marhalah 10</option>
                  </select>
                  @error('marhalah')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label class="control-label">Keterangan</label>
                  <input class="form-control @error('keterangan') is-invalid @enderror" type="text" name="keterangan" value="{{ $section->keterangan }}">
                  @error('keterangan')
                  <div class="form-control-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
                <a class="btn btn-secondary" href="/sections"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </form>
            </div>
          </div>
          </div>
</main>
@endsection