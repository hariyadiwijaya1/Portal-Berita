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
        <form method="POST" action="/post/update/{{ $data->id }}" enctype="multipart/form-data">
            @csrf
            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
            <div class="card-body">
                <input type="hidden" name="id" value="{{ $data->slug }}">
                <div class="form-group">
                    <label for="title">Judul Berita</label>
                    <input type="text" class="form-control" id="title" placeholder="Masukkan Judul" name="title" value="{{ $data->title }}">
                </div>
                <div class="form-grup">
                    <label for="summernote">Isi Berita</label>
                    <textarea id="summernote" name="body">{!! $data->body !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" style="width: 100%;" name="id_category">
                        @foreach ($category as $item)
                            @if ($data->id_category == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                @else
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <input type="file" class="dropify" data-allowed-file-extensions="pdf png jpg" name="image" data-default-file="{{ asset('assets/images/'. $data->image ) }}">
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
