@extends('layouts.master')
@section('isi')
<div class="row"> 
  <center><h1>Data Orang Tua</h1></center>
  <div class="panel panel-primary">
  <div class="panel-heading">Data Orangtua
  <div class="panel-title pull-right"><a href="/Author/create">
  Tambah Data</a></div>
  </div>
  <div class="panel-body">

  <table class="table">
  	<thead>
  		<tr>
  			<th>Nama</th>
  			<th colspan="3">Action</th>
  		</tr>
  	</thead>
  	<tbody>
  		@foreach($Bebas as $data)
  		<tr>
  			<td>{{$data->nama}}</td>
  			<td>
	  		<a class="btn btn-warning" href="/Author/{{$data->id}}/edit">Edit</a> </td>
	  		<td><a class="btn btn-warning" href="/Author/{{$data->id}}">Show</a></td> 
	  		<td>
	  		<form action="{{route('Author.destroy',$data->id)}}" method="post">
	  			<input name ="_method" type="hidden" value="DELETE">
	  			<input name ="_token"  type="hidden" >
	  			<input class="btn btn-danger " type="submit" value="Delete">
	  			{{csrf_field()}}
  		</form>
  		</td>
  		@endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection