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
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Judul Berita</label>
                    <input type="email" class="form-control" id="title" placeholder="Masukkan Judul"
                        name="email">
                </div>
                <div class="form-grup">
                    <label for="summernote">Isi Berita</label>
                    <textarea id="summernote" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" style="width: 100%;" name="category">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
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
