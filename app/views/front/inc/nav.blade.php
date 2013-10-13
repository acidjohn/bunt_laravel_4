<header id="header">
    <div class="container">
    	<!-- logo -->
    	<a href="index.html" id="logo">
    	    <img style="max-height:74px;" src="{{ URL::asset('img/logo.png')}}" alt="Logo">
    	</a>
    	<!-- /logo -->
	<!-- nav -->
	<nav id="main-nav">
		<ul>
			<li class="{{Settings::getCurrentUrl('home')}}">
				<a href="{{URL::route('home')}}">Home</a>
			</li>
			
			<li class="{{Settings::getCurrentUrl('artists')}}">
				<a href="{{URL::route('artists')}}">Artists</a>
			</li>
			<li class="{{Settings::getCurrentUrl('tv')}}">
				<a href="{{URL::route('tv')}}">Bunt Tv</a>
			</li>
			<li class="{{Settings::getCurrentUrl('songs')}}">
				<a href="{{URL::route('songs')}}">Music</a>
			</li>
			<li class="{{Settings::getCurrentUrl('bunticles')}}">
				<a href="{{URL::route('bunticles')}}">Bunticles</a>
			</li>
			<li>
				<a href="">Events</a>
			</li>
			<li>
				<a href="">Contact</a>
			</li>
		</ul>
	</nav>
	<!-- /nav -->
    </div>
</header>