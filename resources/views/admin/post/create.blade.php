@extends('layouts.dashboard.app')

@push('style')
@include('components.summernote.styel')
@endpush

@section('header')
<h1 class="m-0 text-dark">Post</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="GET" action="{{route('store')}}">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Judul Berita</label>
                    <input type="text" class="form-control" id="title" placeholder="Masukkan Judul"
                        name="title">
                </div>
                <div class="form-group">
                    <label for="title">slug</label>
                    <input type="text" class="form-control" id="title" placeholder="Masukkan Judul"
                        name="slug">
                </div>
                <div class="form-grup">
                    <label for="summernote">Isi Berita</label>
                    <textarea id="summernote" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" style="width: 100%;" name="id_category">
                      <option selected="selected" value="1">Alabama</option>
                      <option value="2">Alaska</option>
                      <option value="3">California</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
</div>

@push('script')
@include('components.summernote.script')
@endpush
@endsection








<!-- /.card -->
