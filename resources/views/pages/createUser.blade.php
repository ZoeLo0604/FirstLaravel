@extends('layouts.blank')

@section('pageTitle')
    <h1 class="page-header">Create User</h1>
@endsection

@section('pageBody')
    <!-- Check validation errors -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Create Post Form -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User information
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="{{ url('/sample/creatingUser') }}" method="post" role="form">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" placeholder="email@example.com" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" type="password">
                                </div>
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input class="form-control" name="password_confirmation" type="password">
                                </div>
                                <button class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection