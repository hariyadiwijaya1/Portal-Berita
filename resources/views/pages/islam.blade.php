@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="font-weight-600 mb-4">
                                ISLAM
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            @foreach ($berita as $item)
                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="rotate-img">
                                        <img src="{{ asset('assets/images/'. $item->image) }}" alt="banner" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="col-sm-8 grid-margin">
                                    <h2 class="font-weight-600 mb-2">
                                        <a href="/page/{{ $item->slug }}" class="text-dark">{{ $item->title }}</a>
                                    </h2>
                                    <p class="fs-13 text-muted mb-0">
                                        <span class="mr-2">Photo </span>{{ waktu($item->created_at) }}
                                    </p>
                                    <p class="fs-15">
                                        {!!Illuminate\Support\Str::limit($item->body, 150, $end='...') !!}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4">
                            <h2 class="mb-4 text-primary font-weight-600">
                                Latest news
                            </h2>
                            @foreach ($beritaNews as $item)
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="border-bottom pb-4 pt-4">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h5 class="font-weight-600 mb-1">
                                                    {!!Illuminate\Support\Str::limit($item->body, 45, $end='...') !!}
                                                </h5>
                                                <p class="fs-13 text-muted mb-0">
                                                    <span class="mr-2">Photo </span>{{ waktu($item->created_at) }}
                                                </p>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="rotate-img">
                                                    <img src="{{ asset('assets/images/'. $item->image ) }}" alt="banner"
                                                        class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
