@extends('front.templates.main')
@section('page-header')
<section id="page-header" class="artists-page">
	<div class="fullwidthbanner-container clearfix">
<!-- 		<hgroup>
			<h1 class="page-title">BuntTV</h1>
			<h2 class="page-subtitle">Music Videos & LIVE Recordings</span></h2>
		</hgroup>
	
		<hr> -->
		<!-- playlists -->
		<div class="header-content">
			<div id="tv-panel">
				<div id="youtube-player"></div>
				<div id="playlist-controls">
					<ul>
						<li><a id="tv-play-all"><img src="{{URL::asset('/img/play.png')}}"></img></a></li>
						<li><a id="tv-play-random">Play Random</a></li>
						<li><a id="tv-play-prev"><img src="{{URL::asset('/img/previous.png')}}"></img></a></li>
						<li><a id="tv-play-next"><img src="{{URL::asset('/img/next.png')}}"></img></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /playlists -->
	</div>
</section>
@endsection
@section('maincontent')
<section id="main-content" class="container clearfix">
	<div id="playlists">
	@foreach ($playlists as $playlist)
		<span class="playlist-tag" data-plid="{{$playlist->id}}">{{$playlist->title}}</span>
	@endforeach
	</div>

	    	<div class="tv-playlist currplaylist" data-list="PLNV3t4LrcjovjJtKGN1C8onkejnSquf4l">
	    		<h2>Rock Videos</h2>
	    		<div class="video-grid">
		    		<div class="tv-video-container">
		    			<a class="tv-video" data-vid="YqNtfofp4K0" data-list="PLNV3t4LrcjovjJtKGN1C8onkejnSquf4l">
		    			<img src="https://i2.ytimg.com/vi/YqNtfofp4K0/mqdefault.jpg">
		    			<div class="desc-panel">
		    				<h3>SIX STRING NOISE : "Everybody's Gonna Turn Around" [Official Video]</h3>
		    			</div>
		    			</a>
					</div>
					<div class="tv-video-container">
		    			<a class="tv-video" data-vid="E7qdGhHxZW8" data-list="PLNV3t4LrcjovjJtKGN1C8onkejnSquf4l">
		    			
		    			<img src="https://i2.ytimg.com/vi/E7qdGhHxZW8/mqdefault.jpg">
		    			<div class="desc-panel">
							<h3>Stonebringer - Baptized</h3>
		    			</div>
		    			</a>
					</div>
				</div>
		    	</div>
	<div class="clear"></div>
	<style>
		.playlist-tag{
			background: #a23a33;
			padding: 2px;
			cursor: pointer;
			color:white;
		}
		img{
			height: auto;
			max-width: 100%;
			vertical-align: middle;
			border: 0;
		}
	</style>

</section>
@endsection