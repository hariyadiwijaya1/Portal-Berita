@extends('layouts.dashboard.app')

@push('style')
@include('components.summernote.styel')
@endpush

@section('header')
<h1 class="m-0 text-dark">Tambah Category</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="email" class="form-control" id="Nama" placeholder="Masukkan Judul" name="email">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
</div>
</div>

@push('script')
@include('components.summernote.script')
@endpush
@endsection








<!-- /.card -->
