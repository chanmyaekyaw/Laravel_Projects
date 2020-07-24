@extends('layout')

@section('content')
	<h2>PHP Page</h2>
	<!-- <?php
	foreach ($data as $key => $value) {
		echo "<li>".$value."</li>";
	}
	?> -->
	@foreach($data as $value)
		<li>{{$value}}</li>
	@endforeach
@endsection