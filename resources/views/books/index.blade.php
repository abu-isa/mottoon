@extends('layout/main')

@section('title', '.:MOTTOON - BOOK:.')
@section('container')

<main class="app-content">
<div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Kitab</h1>
          <!-- <p>Table to display analytical data effectively</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active"><a href="#">Data Kitab</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <a href="/books/create"><button class="btn btn-primary btn-sm">Add Data</button></a>  
            <br/><br/>
              <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Mustawa</th>
                    <th>Kitab</th>
                    <th>Pengarang</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $books as $book ) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->level }}</td>
                    <td>{{ $book->kitab }}</td>
                    <td>{{ $book->pengarang }}</td>
                    <td>
                      <a href="/books/{{ $book->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                      <form action="/books/{{ $book->id }}" method="post" class="d-inline">
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