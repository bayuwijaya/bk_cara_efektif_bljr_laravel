<?
@extends('layout')

@section('content')
        <div class="container">
        <div class="col-md-5 col-md-offset-3">
         @if (Session::has('pesan'))
        {{ Session::get('pesan') }}

        @endif
        <h2>File Upload</h2>
        <hr />
         
         @if (Session::has('success'))
        <div class="alert-box success">
        <h2>{{ Session::get('success') }}</h2>
        </div>
        @endif

        <p class="errors">{{ $errors->first('image') }}</p>
         @if (Session::has('error'))
         <p class="errors">{{ Session::get('error') }}</p>
         @endif

        {{ Form::open(['action' => 'ValidateController@upload', 'files' => true]) }}
        {{ Form::label('upload', 'Upload File') }}
        {{ Form::file('image', '', ['class' => 'form-control']) }}
        <br>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
        </div>
        </div>
@stop
?>
</body>
</html>
