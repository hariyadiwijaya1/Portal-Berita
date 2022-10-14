@extends('layouts.dashboard')

@section('header')
<h1 class="m-0 text-dark">Post</h1>
@stop

@section('content')
<div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <a href="/create" class="btn btn-primary card-title">Tambah Data</a>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            {{-- <th>Author</th> --}}
                            <th>Tanggal Buat</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                          <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $item->title }}</td>
                            {{-- <td>{{ $item->author }}</td> --}}
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->body }}</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <a href="" class="btn btn-info btn-xs">Info</a>
                                <a href="" class="btn btn-danger btn-xs">Delete</a>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
</div>
@endsection
