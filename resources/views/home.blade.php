@extends('frontlayout')
@section('title','Home Page')
@section('content')
<style>
	.hidden {
		display: none;
	}
</style>
<div class="row">
	<div class="col-md-8">
		<div class="row mb-5">
			@if(count($posts)>0)
			@foreach($posts as $post)
			<div class="col-md-4">
				<div class="card">
					<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}"><img src="{{asset('imgs/thumb/'.$post->thumb)}}" class="card-img-top" alt="{{$post->title}}" /></a>
					<div class="card-body">
						<h5 class="card-title"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h5>
					</div>
				</div>
			</div>
			@endforeach
			@else
			<p class="alert alert-danger">No Post Found</p>
			@endif
		</div>
		<!-- Pagination -->
		{{$posts->links()}}
	</div>
	<!-- Right SIdebar -->
	<div class="col-md-4">
		<!-- Search -->
		<!-- <div class="card mb-4">
			<h5 class="card-header">Search</h5>
			<div class="card-body">
				<form action="{{url('/')}}">
					<div class="input-group">
						<input type="text" name="q" class="form-control" />
						<div class="input-group-append">
							<button class="btn btn-dark" type="button" id="button-addon2">Search</button>
						</div>
					</div>
				</form>
			</div>
		</div> -->
		<!-- Recent Posts -->
		<div class="card mb-4">
			<h5 class="card-header">Recent Posts</h5>
			<div class="list-group list-group-flush">
				@if($recent_posts)
				@foreach($recent_posts as $post)
				<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}}</a>
				@endforeach
				@endif
			</div>
		</div>
		<!-- Popular Posts -->
		<div class="card mb-4">
			<h5 class="card-header">Popular Posts</h5>
			<div class="list-group list-group-flush">
				<!-- <a href="#" class="list-group-item">Post 1</a>
						<a href="#" class="list-group-item">Post 2</a> -->
				@if($popular_posts)
				@foreach($popular_posts as $post)
				<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}} <span class="badge badge-info float-right">{{$post->views}}</span></a>
				@endforeach
				@endif
			</div>
		</div>


	</div>
</div>
@endsection('content')