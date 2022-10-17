@extends('layouts.dashboard.app')

@section('header')
<h1 class="m-0 text-dark">Profile</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" onclick="settings()">profile</a></li>
            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" onclick="activity()">Settings</a></li>
        </ul>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane" id="activity">
                <div class="tab-pane" id="profile">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile form-horizontal">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('adminlte/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Nina Mcintire</h3>
                            <p class="text-muted text-center">Software Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="settings">
                <form class="form-horizontal" method="GET" action="{{ route('update', Auth::User()->id )}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ Auth::User()->id }}">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputName2" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">confirm password</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputName2" name="role">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
@include('components.profile')
@endpush
    @endsection
