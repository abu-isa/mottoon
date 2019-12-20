@extends('layout/main')

@section('title', '.:MOTTOON - PENGAJAR:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Pengajar</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Data Pengajar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="/teachers/create"><button class="btn btn-primary btn-sm">Add Data</button></a>  
            <br/><br/>
              <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $teacher as $teacher ) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->nip }}</td>
                    <td>{{ $teacher->nama }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->alamat }}</td>
                    <td>
                      <a href="/teachers/{{ $teacher->id }}" class="btn btn-primary btn-sm">Detail</a>
                      <a href="/teachers/{{ $teacher->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                      <form action="/teachers/{{ $teacher->id }}" method="post" class="d-inline">
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