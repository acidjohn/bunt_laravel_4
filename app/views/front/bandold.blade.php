@extends('front.templates.main')
@section('page-header')
<section id="page-header" class="artists-page">
	<div class="container clearfix">
		<hgroup>
			<h1 class="page-title">{{$band->name}}</h1>
			<h2 class="page-subtitle">
				@foreach ($band->genres as $genre)
					<span class="genre">{{$genre->name}} </span>
				@endforeach
			</h2>
		</hgroup>
		<section class="band-thumb">
				<img src="{{URL::asset('/img/bands/fomcover.jpg')}}"/>
			</section>
		<!-- share it -->
		<div id="share-wrap">
			<div id="share" data-url="artists/{{$band->name}}" data-text="{{$band->name}}" data-title="share {{$band->name}}'s page"></div>
		</div>
		<section class="band-shoutout">We are teh best band in the world lulz!!111</section>
		<!-- /share it -->
		<hr>
		<!-- description -->
		<div class="header-content">
			<section class="col-1-2" class="band-bio">
				<h3>{{$band->name}}'s BIO</h3>
				<p>{{$band->bio}}</p>
			</section>
			<section class="band-links">
				<h3>Links</h3>
				<ul>
					<li class="facebook-link"><a href="https://www.facebook.com/fallofmanofficial">Facebook Page</a></li>
					<li class="soundcloud-link"><a href="https://soundcloud.com/lef-3/">Soundcloud Profile</a></li>
				</ul>
			</section>
		</div>
		<!-- /description -->
	</div>
</section>
@endsection
@section('maincontent')
<section id="main-content" class="container clearfix">
	<section class="band-music">
	<h3>{{$band->name}}'s Music</h3>
	<div id="full-player-wrap">
	<div class="container">
		<!-- player -->
		<div id="full-player">
			<ul id="tracklist" class="autostart">
				<li><div class="track" data-url="music/Metallira/bustedchump.mp3" data-show-ui="true">ADG3 Studios - Busted Chump</div></li>
				<li><div class="track" data-url="music/Metallira/vukoliko.mp3">ΗΜΙΖ - Το Βουκολικό</div></li>
				<li><div class="track" data-url="music/Metallira/graffittiland.mp3">Romson Paravatis - Graffittiland</div></li>
				<li><div class="track" data-url="music/Metallira/klatsfm.mp3">ΗΜΙΖ - κλατς FM</div></li>
			</ul>
		</div>
		<!-- /player -->
		<!-- player navigation -->
		<div id="fp-nav">
			<a href="#" class="prev"></a>
			<a href="#" class="play"></a>
			<a href="#" class="next"></a>
			<a href="#" class="details"></a>
		</div>
		<!-- /player navigation -->
		<div id="tracklist-nav"></div>
	</div>
	</div>
</section>
	<section class="band-videos">
	<h2 style="margin-top:1em">{{$band->name}}'s Videos</h2>
		
		<div id="youtube-player">
	    </div>

		<div id="tv-panel">
			<hr/>
	    	<div id="tv-playlist" class="tv-playlist currplaylist" data-list="band-list">
	    		<div class="video-grid">
		    		<div class="tv-video-container">
		    			<a class="tv-video" data-vid="YqNtfofp4K0" data-list="band-list">
		    			<img src="https://i2.ytimg.com/vi/YqNtfofp4K0/mqdefault.jpg">
		    			<div class="desc-panel">
		    				<h3>SIX STRING NOISE : "Everybody's Gonna Turn Around" [Official Video]</h3>
		    			</div>
		    			</a>
					</div>
					<div class="tv-video-container">
		    			<a class="tv-video" data-vid="E7qdGhHxZW8" data-list="band-list">
		    			
		    			<img src="https://i2.ytimg.com/vi/E7qdGhHxZW8/mqdefault.jpg">
		    			<div class="desc-panel">
							<h3>Stonebringer - Baptized</h3>
		    			</div>
		    			</a>
					</div>
				</div>
		    	</div>
		    </div>
	</section>

	
	<div class="clear"></div>
	<style>
		.header-content>section{
			float:left;
		}
		#band-links{
			float: right;
		}
		img{
			height: auto;
			max-width: 100%;
			vertical-align: middle;
			border: 0;
		}
		.band-thumb{
			width: 280px;
			float: right;
		}
		hgroup{
			float: left;
		}
		.band-shoutout{
			font-style: italic;
			opacity: 0.9;
			clear: both;
			font-size: 2em;
		}
	</style>

<script type="text/javascript" src="{{URL::asset('/js/soundmanager/soundmanager2-jsmin.js')}}"></script>
</section>
@endsection