

@extends('layouts.master')


@section('tittle')
		Single Page
@endsection




@section('content')
		<h1>Halaman single</h1>
		
		


		@foreach($pengguna as $user)

		<li> {{ $user->username .' = '.$user->password }}</li>

		@endforeach


		{{-- escape variabe --}}
		{!! $unescaped !!}
		{{-- untuk ekseekusi HTML atau Js --}}

		@if(count($pengguna) > 5)
			<p>User nyah lebih dari Lima</p>
		@else
			<p>User tidak lebih dari lima</p>
		@endif

		<hr>
		<h2> {{ $blog -> tittle}} </h2>
		<p> {{ $blog -> description}} </p>

		{{-- //tombol edit --}}
		{{-- <a href="/blog/{{ $id}}/edit"><button>edit</button></a> --}}

		



@endsection
