@extends('layouts.app')

@section('content')

<div class="content">
@if($can_add_article)
	<div class="p-5">
		<a class="btn btn-info" href="/article/create">Add article</a>
	</div>
@endif
@foreach($articles as $article)
<div class="row d-flex">
	<div class="col-3 p-4">
		<img src="/storage/{{ $article->image }}" >
	</div>
	<div class="col-9 w-75">
		<a href="/article/{{$article->id}}">
			<div class="h3">{{ $article->title }} by {{$article->user->username}}</div>
		</a>
		<div>
			{{ $article->content }}
		</div>
	</div>
</div>
@endforeach

</div>
</div>
@endsection
