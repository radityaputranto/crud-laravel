

@extends('layouts.master')


@section('tittle')
		Single Page
@endsection




@section('content')


	{{-- menampilkan error di alert JS --}}
		{{-- @if(count($errors) > 0)
		<ul>
			@foreach($errors ->all() as $error)
				<script>alert ("{{ $error }}")</script>
			@endforeach

		</ul>
		@endif --}}

		<h1>Create Blog</h1>

		<form action="/blog" method="post">  

		<p>Judul </p><br>

		<input type="text" value="{{ old('tittle') }}" name="tittle">
		@if($errors->has('tittle'))
		<p>{{ $errors-> first('tittle')}}</p>
		@endif
		<br>

		<p>Deskripsi </p><br>
		<textarea rows="8" cols="40" name="description"> {{ old('descriptions') }} </textarea>
		@if($errors->has('description'))
		<p>{{ $errors-> first('description')}}</p>
		@endif

		<br>

		<input type="submit" name="submit" value="Create">

		{{ csrf_field() }}

		
		</form>
		
				


		



@endsection
