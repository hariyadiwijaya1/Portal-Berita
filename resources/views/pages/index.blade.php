@extends('layouts.app')

@push('kategori')
@include('layouts.category')
@endpush

@section('newsBerita')
{{-- ini content --}}
<div class="row" data-aos="fade-up">

    <div class="col-xl-8 stretch-card grid-margin">
        <div class="position-fixed">
            <img src="{{asset('assets/images/'. $beritaTrending->image )}}" alt="banner" class="img-fluid">
            <div class="banner-content">
                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    newest
                </div>
                <h1 class="mb-0"><a href="/page/{{ $beritaTrending->slug }}" class="text-white"> {{ $beritaTrending->title }}</a></h1>
                <h1 class="mb-2">
                    {!!Illuminate\Support\Str::limit($beritaTrending->body, 50, $end='...') !!}
                </h1>
                <div class="fs-12">
                    <span class="mr-2">Photo </span>{{ waktu($beritaTrending->created_at) }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 stretch-card grid-margin">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h2>Latest news</h2>
                @foreach ($beritaNews as $item)
                <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                    <div class="pr-3">
                        {{-- <a href="/page/{{ $item->slug }}" class="text-dark">{{ $item->title }}</a> --}}
                        <h5 class="mb-0"><a href="/page/{{ $item->slug }}" class="text-white"> {{ $item->title }}</a></h5>
                        <div class="fs-12">
                            <span class="mr-2">Photo </span>{{ waktu($item->created_at) }}
                        </div>
                    </div>
                    <div class="rotate-img">
                        <img src="{{asset('assets/images/'. $item->image)}}" alt="thumb" class="img-fluid img-lg" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop

@section('content')
<div class="col-lg-9 stretch-card grid-margin">
    <div class="card">
        <div class="card-body">
            @foreach ($berita as $item)
            <div class="row">
                <div class="col-sm-4 grid-margin">
                    <div class="position-relative">
                        <div class="rotate-img">
                            <img src="{{ asset('assets/images/'. $item->image )  }}" alt="thumb" class="img-fluid" />
                        </div>
                        <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold">Flash news</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8  grid-margin">
                    <h2 class="mb-2 font-weight-600">
                        <a href="/page/{{ $item->slug }}" class="text-">{{ $item->title }} </a>
                    </h2>
                    <div class="fs-13 mb-2">
                        <span class="mr-2">Photo </span>{{ waktu($item->created_at) }}
                    </div>
                    <p class="mb-0">
                        {!!Illuminate\Support\Str::limit($item->body, 50, $end='...') !!}
                    </p>
                </div>
            </div>
            @endforeach
                    {!! $berita->onEachSide(2)->links() !!}
        </div>
    </div>
</div>
@endsection
