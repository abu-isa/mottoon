@extends('layout/main')

@section('title', '.:MOTTOON - MARHALAH:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Marhalah</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Data Marhalah</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="/sections/create"><button class="btn btn-primary btn-sm">Add Data</button></a>  
            <br/><br/>
              <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Marhalah</th>
                    <th>Kitab</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $sections as $section ) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $section->marhalah }}</td>
                    <td>{{ $section->kitab }}</td>
                    <td>{{ $section->keterangan }}</td>
                    <td>
                      <a href="/sections/{{ $section->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                      <form action="/sections/{{ $section->id }}" method="post" class="d-inline">
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