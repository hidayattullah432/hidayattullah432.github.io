@extends('layouts.master')

@section('title', 'post')
@section('content')
<div class="container">
	<div class="col-md-12 col-sm-12">
			<div class="oo">

				<img style="margin-top: 40px;" src="{{asset("/storage/" . $post->cover)}}" alt="kliping">
			</div>
			<h2>{{$post->title}}</h2>
			<p>{{$post->body}}</p>
		
	</div>
</div>
@endsection