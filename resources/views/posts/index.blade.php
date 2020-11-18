@extends('layouts.master')

@section('title', 'post')
@section('content')

    
    <div class="container" style="margin-top: 60px;">
        <div class="col-md-12 col-sm-10">
            <h3 class="text-center">Balangan Dalam Berita <br>Kumpulan Kliping Media Online</h3>     
            <hr style="width: 200px">
        </div>
        <div class="col-md-12 col-sm-10">
            <div id="search">
                <form action="{{route('search.posts')}}" method="get" class="navbar-form navbar-right">
                    <div class="form-group ">
                        <input name="query" type="text" class="form-control" placeholder="Search">
                    </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        
        @foreach ($posts as $post)
        

    <a href="/posts/{{$post->slug}}">    
        <div class="col-md-3 col-sm-6" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="thumbnail" style="height: 500px; width: 260px;">
                      <div class="caption">
                          <div class="alert alert-info" style="margin-bottom: 20px; height: 280px">
                          <img src="{{$post->takeImage}}" style="width: 200px; height: 200px; object-fit: cover;
                          object-position: top;" alt="">
                            <h3>{{Str::limit($post->title, 22)}}</h3>
      
                          </div>
      
                          <div class="card-body">
      
                              <p >Sumber : {{($post->sumber)}}</p>
                              <p >Deskripsi : {{Str::limit($post->body, 10)}}</p>
                              <p >Tanggal Liris : {{($post->tanggal)}}</p>
                              <p>
                                  
                          </p>
                  
                          </div>
      
                          <div class="alert alert-warning">
                              <p>
                                  dipublikan : {{$post->created_at->diffForHumans()}}
                              </p>    
                          </div>
                        
                        </div>
                    </div>
                  </div>

            </div>
            
        </div>

    </a>

        @endforeach  
        
    </div>
    <div class="text-center" >
        <div>
            {!!$posts->links() !!}
            
        </div>
    </div>

 @stop

 @section('footer')
	
<footer >
	<div class="container">
		<P class="foter-text text-center">Copyright&copy 2020/2021 Built with Protokol & Komunikasi Pimpinana Kab. Balangan</P>
		<P class="text-right">Versi 2.3</P>	
	</div>
</footer>

@endsection