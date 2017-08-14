

@extends('layouts.master')


@section('tittle')
		Single Page
@endsection




@section('content')
		<h1>Edit Blog</h1>

		<form action="/blog/{{$blog->id}}" method="post">  

		<p>Judul </p><br>

		<input type="text" value="{{ $blog -> tittle}} " name="tittle">
		<br>

		<p>Deskripsi </p><br>
		<textarea rows="8" cols="40" name="description"> {{ $blog -> description}} </textarea>
		<br>

		<input type="submit" name="submit" value="update">

		{{ csrf_field() }}

		{{-- agar mauk ke blog kontroler yang PUT --}}
		<input type="hidden" name="_method" value="PUT">
		</form>
		
				


		



@endsection
