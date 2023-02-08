@extends('layouts.main')
@section('content')
<div class="container mx-auto px-4 pt-16">
	<div class="popular-movies"></div>
	<h2 class="uppercase trackng-wider text-orange-500 text-lg font-semibold"> Popular Movies</h2>
<div class="grid grid-cols-4 gap-7">
	@foreach($popularMovies as $movie)
	<div class="mt-7">
		<a href="#">
			<img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" width="200" height="200" alt="not found" class="">
		</a>
		<div class="mt-2">
			<a href="#" class="text-lg mt-2 hover:text-gray:300">{{$movie['title']}}</a>
			<div class="flex items-center text-gray-400">
				<span>&#9734;</span>
				<span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
				<span class="mx-2">|</span>
				<span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
			</div>
			<div class="text-gray-400">
				Action,Thriller,Comedy
			</div>
		</div>
	</div>
	@endforeach
	
</div>
</div>

@endsection
