@extends("layouts.app")


@section("content")
	<h1>{{$user->name}}</h1>
	<ul class="list-unstyle">
		@foreach($follows as $follows)
			<li>{{$follows->username}}</li>
		@endforeach
	</ul>
@endsection