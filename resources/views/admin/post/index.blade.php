@extends('layouts.dashboard.app')

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
                        <a href="/post/create" class="btn btn-primary card-title">Tambah Data</a>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Tanggal Buat</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                          @foreach ($data as $item)
                          <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                              <div class="d-flex align-items-center">
                                <a href="/post/update/{{ $item->id }}" class="btn btn-info btn-xs">Edit</a>
                                <form action="{{route('delete', $item->id)}}" method="delete">
                                    @csrf
                                    @method('delete')
                                    <a href="/post/post/{{$item->id}}" class="btn btn-danger btn-xs">Delete</a>
                                </form>
                              </div>
                            </td>
                            <tr class="expandable-body">
                                <td colspan="4">
                                  <p>
                                    {!! $item->body !!}
                                  </p>
                                </td>
                              </tr>
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
