{{Form::open(array('action' => 'HitungController@prosesgambar', 'files'=>true)) }}

Image : {{Form::file('image')}}

{{Form::submit('Submit') }}

{{ Form::close() }}
