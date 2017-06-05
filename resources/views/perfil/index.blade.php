@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-left: 25px;">
            <h2>{{ $user->name }}'s Profile  </h2>

            <form action="perfil" method="POST" role="form" enctype="multipart/form-data">
                <label for="">Update Profile Image</label>
                <input type="file" class="pull-right" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection