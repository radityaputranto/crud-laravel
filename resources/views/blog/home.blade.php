@extends('layouts.master')


@section('tittle')
		Raditya laravel
@endsection




@section('content')
	<h1>hello world</h1>
	<h5>lorem ipsum </h5>
	<center><a href="/blog/create"><input type="button" name="create" value="Create"></a></center>
	<form action="/blog/create">
		<input type="hidden" name="_method" value="DELETE">
	</form>
	@foreach($blogs as $blog)
		<hr>
		<a href="/blog/ {{ $blog->id }}"><h3>{{ $blog->tittle}}</h3></a>
		

		<form action="/blog/{{$blog->id}}" method="post">  

		<input type="submit" name="delete" value="delete">

		{{ csrf_field() }}

		{{-- agar mauk ke blog kontroler yang PUT --}}
		<input type="hidden" name="_method" value="DELETE">
		
		</form>
		
	@endforeach
@endsection


