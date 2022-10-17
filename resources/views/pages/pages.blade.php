@extends('layouts.app')

@section('content')
<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h1 class="font-weight-600 mb-1">
                            {{ $id->title }}
                        </h1>
                        <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>10 Minutes ago
                        </p>
                        <div class="">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/'. $id->image) }}" alt="banner" class="img-fluid mt-4 mb-4 w-50" >
                            </div>
                        </div>
                        <article class="mb-4 fs-15 text-justify">
                            {!! $id->body !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
