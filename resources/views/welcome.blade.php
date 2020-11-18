@extends('layouts.master')
@section('title','Home')
@section('content')


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<div id="jom" class="carousel-inner" role="listbox">
		<div class="item active">
			<img  src="{{asset('img/jom.jpg')}}" style="height: 50px;" alt="slide 1">
		</div>
		<div class="item">
			<img src="{{asset('img/jom.jpg')}}" alt="slide 2">
		</div>
		<div class="item">
			<img src="{{asset('img/jom.jpg')}}" alt="slide 3">
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="container">
	<div class="row" id="pilihan">

		<div class="tombol col-md-3 col-sm-3">
			<a href="{{ url('/posts')}}">
				<button type="button" class="btn btn-success" >E-Kliping<br>Tersedia</button>
			</a>
		</div>
	
		<div class="tombol col-md-3 col-sm-3">
			<a href="#">
				<button type="button" class="btn btn-primary" >Gallery<br>Segera Hadir</button>
			</a>
		</div>
	
		<div class="tombol col-md-3 col-sm-3">
			<a href="#">
				<button type="button" class="btn btn-primary" style="">Berita Balangan<br>Segera Hadir</button>
			</a>
		</div>
		
	</div>
		
</div>

@endsection

@section('footer')
	
<footer >
	<div class="container">
		<P class="foter-text text-center">Copyright&copy 2020/2021 Built with Protokol & Komunikasi Pimpinana Kab. Balangan</P>
		<P class="text-right">Versi 2.3</P>	
	</div>
</footer>

@endsection