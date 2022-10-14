@extends('layouts.dashboard.app')

@section('header')
<h1 class="m-0 text-dark">Profile</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header p-2">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">profile</a></li>
            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
        </ul>
    </div><!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane" id="activity">
                <div class="tab-pane" id="profile">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile form-horizontal">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('adminlte/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Nina Mcintire</h3>
                            <p class="text-muted text-center">Software Engineer</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
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
    @endsection
