@extends('layout/main')

@section('title', '.:MOTTOON - PART:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Waktu Belajar</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Data Waktu Belajar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="/parts/create"><button class="btn btn-primary btn-sm">Add Data</button></a>  
            <br/><br/>
              <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Created</th>
                    <th>Update</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $parts as $part )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $part->fatroh }}</td>
                    <td>{{ $part->created_at }}</td>
                    <td>{{ $part->updated_at }}</td>
                    <td>
                      <a href="/parts/{{ $part->part_id }}/edit" class="btn btn-success btn-sm">Edit</a>
                      <form action="/parts/{{ $part->part_id }}" method="post" class="d-inline">
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