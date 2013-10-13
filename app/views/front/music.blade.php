@extends('front.templates.main')
@section('page-header')
<section id="page-header" class="artists-page">
	<div class="container clearfix">
		<hgroup>
			<h1 class="page-title">Bunt Music</h1>
			<h2 class="page-subtitle">Listen to our artists' top songs</span></h2>
		</hgroup>
	
		<hr>
		<!-- playlists -->
		<div class="col-1-2 header-content">
	    	<div class="controls">
				<h3>Filter:</h3>
				<ul>
					<li class="filter" data-filter="all">All</li>
					@foreach ($data['genres'] as $genre)
					<li class="filter" data-filter="{{$genre->name}}">{{$genre->name}}</li>
					@endforeach
				</ul>
			</div>
			<div class="controls">
				<h3>Sort By:</h3>
				<ul>
	    			<li class="sort" data-sort="data-name" data-order="desc">Alphabetically</li>
	    			<li class="sort" data-sort="data-name" data-order="asc">Z-A</li>
	    			<li class="sort" data-sort="data-hits" data-order="asc">Most Popular</li>
	    			<li class="sort" data-sort="data-hits" data-order="desc">Least Popular</li>
	    		</ul>
	    	</div>
	    	
		</div>
		<!-- /playlists -->
	</div>
</section>
@endsection
@section('maincontent')
<section id="main-content" class="container clearfix">
	<section id="song-list">
	<h2>Songs</h2>
	<ul id="songs">
		@foreach($data['songs'] as $song)
			<li class="mix @foreach (Band::find($song->band_id)->genres as $genre){{$genre->name}} @endforeach" data-name="{{$song->title}}" data-hits="{{$song->hits}}" data-band="{{Band::find($song->band_id)->name}}">{{Band::find($song->band_id)->name}} - {{$song->title}}</li>
		@endforeach
	</ul>
	<!-- <div>
		@foreach($data['bands'] as $band)
			<li class="mix @foreach ($band->genres as $genre){{$genre->name}} @endforeach" data-name="{{$band->name}}" data-hits="{{$band->hits}}">{{$band->name}}</li>
		@endforeach
	</div> -->
	</section>
<section id="full-player-wrap">
	<div class="container">
		<!-- player -->
		<div id="full-player">
			<ul id="tracklist" class="autostart">
				@foreach($data['songs'] as $song)
				<li><div class="track" data-url="music/{{Band::find($song->band_id)->name}}/{{$song->filename}}">{{Band::find($song->band_id)->name}} - {{$song->title}}</div></li>
				@endforeach
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
</section>
<div id="load-tracks"><img src="{{URL::asset('img/icon-deck.png')}}"></img></div>
{{HTML::script(URL::asset('/js/jquery.mplayer.min.js'))}}
	<div class="clear"></div>
	<style>
		#songs .mix{
			opacity: 0;
			display: none;
		}
		.filter,.sort{
			cursor: pointer;
		}
		.artists-page div.controls {
			/*border:2px solid #eaeaea;*/
			float: left;
		}
		.artists-page div.controls li{
			display: inline;
		}
		.filter.active{
			border-bottom: 1px solid;
			font-weight: bold;
		}
		img{
			height: auto;
			max-width: 100%;
			vertical-align: middle;
			border: 0;
		}
		#tracklist-nav{
			display: block;
		}
		#main-content > section {
			float: left;
		}
		#full-player-wrap{
			width: 60%;
		}
		#full-player-wrap .container {
			width: auto;
		}
		#song-list{
			width: 40%;
			min-width: 300px;
		}
		#load-tracks{
			position: fixed;
			left: 0;
			top:45%;
		}
		#load-tracks:hover{
			cursor: pointer;
		}
	</style>

<script type="text/javascript">
	$(function(){
	    $('#songs').mixitup();     
	});
	$('#load-tracks').click(function(){
		$('#tracklist').append('<li><div class="track" data-url="music/Metallira/klatsfm.mp3">Κλατς FM</div></li>');
	});
	</script>
</section>
@endsection