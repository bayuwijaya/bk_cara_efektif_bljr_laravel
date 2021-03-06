@extends('layout')

@section('content')
<section class="container">

 <table class="table">
    <tr>
		<th colspan="4"><h2><center>Menampilkan Semua Data</center></h2> </th>
	</tr>
	<tr>
       <th>Name</th>
       <th>Rating</th>
       <th>Actor</th>
    </tr>
    @foreach($showdata as $data)
      <tr>
         <td>{{ $data->name }}</td>
         <td>{{ $data->rating }}</td>
         <td>{{ $data->actor }}</td>
      </tr>
    @endforeach
 </table>
</section>
@stop