@extends('layout/main')

@section('title', '.:MOTTOON - SISWA:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Siswa</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Data Siswa</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="/students/create"><button class="btn btn-primary btn-sm">Add Data</button></a>  
            <!-- <div class="form-group">
                <label for="">File (.xls, .xlsx)</label>
                <input type="file" class="form-control" name="file">
                <p class="text-danger">{{ $errors->first('file') }}</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Upload</button>
            </div> -->
            <br/><br/>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th style="width:160px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $students as $student ) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->alamat }}</td>
                    <td>
                      <a href="/students/{{ $student->id }}" class="btn btn-primary btn-sm">Detail</a>
                      <a href="/students/{{ $student->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                      <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                        <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                      </form>
                    </td>
                  </tr>    
                  @endforeach              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</main>
@endsection