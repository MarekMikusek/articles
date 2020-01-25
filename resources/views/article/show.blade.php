@extends('layouts.app')

@section('content')

<div class="content">

	<div class="row d-flex">
		<div class="col-3 p-4">
			<img src="/storage/{{ $article->image }}" >
		</div>
		<div class="col-9 w-75">
			<a href="/article/{{$article->id}}">
				<div class="h3">{{ $article->title }}</div>
			</a>
			<div>
				{{ $article->content }}
			</div>
		</div>
	</div>
	@if($canAddComment)
	<div class="p-5">
		<a class="btn btn-info" href="/comment/create/{{$article->id}}">Add comment</a>
	</div>
	@endif
	<ul>
		@foreach($article->comments as $comment)	
		<li>{{$comment->user->username}} : {{$comment -> content}}</li>
		@endforeach
	</ul>

</div>
</div>
@endsection

