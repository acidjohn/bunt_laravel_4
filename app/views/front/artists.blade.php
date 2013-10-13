@extends('front.templates.main')
@section('page-header')
<section id="page-header" class="homepage">
	<div class="container">
		<hgroup>
			<h1 class="page-title">Bunt Bands</h1>
			<h2 class="page-subtitle">Meet the bands!</h2>
		</hgroup>
		<!-- share it -->
		<div id="share-wrap">
			<div id="share" data-url="releases.html" data-text="Releases" data-title="share"></div>
		</div>
		<!-- /share it -->
		<hr>
		<!-- cat filter -->
		<ul id="cat-filter">
		<?$band_genres = Genre::all()->take(10);?>
		<li><a data-categories="*">All</a></li>
		@foreach ($band_genres as $bg)
			<li><a data-categories="{{$bg->name}}">{{$bg->name}}</a></li>
		@endforeach
			<!-- <li><a data-categories="new">New Tracks</a></li>
			<li><a data-categories="free">Free!</a></li>
			<li><a data-categories="drum-and-bass">Drum and Bass</a></li>
			<li><a data-categories="glitch">Glitch</a></li>
			<li><a data-categories="breakbeat">Breakbeat</a></li>
			<li><a data-categories="uk-funky">UK Funky</a></li>
			<li><a data-categories="dubstep">Dubstep</a></li> -->
		</ul>
		<!-- /cat filter -->
	</div>
</section>
<!-- /page header -->
@endsection
@section('maincontent')

<section id="main-content" class="container clearfix">
	<!-- tags filter -->
<!-- 	<ul id="tag-filter">
		<li><a data-tags="*">All Artists</a></li>
		<li><a data-tags="dj-envato">DJ Envato</a></li>
		<li><a data-tags="dj-graphicriver">DJ Graphicriver</a></li>
		<li><a data-tags="dj-themeforest">DJ Themeforest</a></li>
	</ul> -->
	<!-- /tags filter -->
	<!-- releases -->
	<section class="content items portfolio">
    	<!-- item -->
    	<?$bands = Band::all()->take(12);?>
    	<?$c = 0;?>
    	@foreach ($bands as $band)
    	<? $lastbandid = $band->id; ?>
		<article id="@if($c == 11)hr@endif" class="col-1-4" data-categories="@foreach($band->genres as $genre) {{$genre->name}} @endforeach" data-tags="dj-envato">
			<a href="{{URL::to('artists')}}/{{$band->name}}" class="thumb-slide">
				<span class="badge new"></span>
				<span class="thumbs-wrap">
					<img src="placeholders/04A-portfolio-thumb-420x420.jpg" alt="" title="" />
					<img src="placeholders/04B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
			</a>
			<footer>
				<h2><a href="#">{{$band->name}}</a></h2>
				<div class="cat"><a href="#"></a></div>
			</footer>

		
		</article>
			
			<?$c++;?>
		@endforeach
		<!-- /item -->
		<!-- item -->
		

	</section>
@endsection
@section('footer')
<script type="text/javascript">
	$(document).ready(function(){
		var inc = 5;
		// console.log($("#hr").offset())
		var offset = $("#hr").offset()
		$(window).scroll(function(){
			// console.log(window.pageYOffset);
			console.log(offset.top);
			if (window.pageYOffset > offset.top-400) {
    inc=inc+3;
    console.log("{{$lastbandid}}");
			}
		})
	})
</script>
@endsection