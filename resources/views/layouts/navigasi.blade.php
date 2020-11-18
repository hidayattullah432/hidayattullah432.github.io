<header> 
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand"><img src="{{asset('img/logo2.png')}}" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
        		<li><a href="{{ url('/') }}" class="menu nav-link">Prokopim</a></li>
        	</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ url('/')}}" class="menu nav-link">Home</a></li>
				<li><a href="{{ url('/posts')}}" class="menu nav-link">Ekliping</a></li>
				<li><a href="{{ url('/about')}}" class="menu nav-link">About Us</a></li>
				<li><a href="/login" class="menu nav-link">Login</a></li>
            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Admin</a> 
                        @else        
                        <a href="{{ route('login') }}" id="login" class="text-sm text-gray-700 underline"></a>
        
                    @endif
                </div>
            @endif
    
		</div>
		</div>
	</nav>
</header>


</nav>        
