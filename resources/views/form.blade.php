@section('content')
    @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Change Password</p>
    <div class="container">
        <form method="post" id="passwordForm">
            <input type="password" class="input-lg form-control" name="username" id="username" placeholder="username"
                autocomplete="off">
            <input type="password" class="input-lg form-control" name="password" id="password" placeholder="Password"
                autocomplete="off">
            <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..."
                value="Change Password">
        </form>
    </div>

@stop
