@extends('layouts.dashboard.app')

@push('style')
@include('components.summernote.styel')
@endpush

@section('header')
<h1 class="m-0 text-dark">Post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="/create" class="btn btn-primary card-title">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th style="width: 40px">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td><span class="badge bg-danger">55%</span></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="" class="btn btn-info btn-xs">Info</a>
                            <a href="" class="btn btn-danger btn-xs">Delete</a>
                          </div>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td><span class="badge bg-warning">70%</span></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="" class="btn btn-info btn-xs">Info</a>
                            <a href="" class="btn btn-danger btn-xs">Delete</a>
                          </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    @push('script')
    @include('components.summernote.script')
    @endpush
    @endsection
