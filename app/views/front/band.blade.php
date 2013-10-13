@extends('front.templates.main')
@section('page-header')
<section id="page-header">
	<div class="container clearfix">
		<hgroup>
			<h1 class="page-title">{{$band->name}}</h1>
			<h2 class="page-subtitle">God is a DJ.</h2>
		</hgroup>
		<!-- share it -->
		<div id="share-wrap">
			<div id="share" data-url="artist.html" data-text="DJ Themeforest" data-title="share"></div>
		</div>
		<!-- /share it -->
		<hr>
		<!-- masonry boxes -->
		<div class="masonry-wrap clearfix">
			<div class="masonry width-1-2 height-1-2">
				<img src="{{URL::asset('placeholders/profile-image-468x468.jpg')}}" alt="" />
			</div>
			<div class="masonry width-1-2 height-1-2 text-box">
				<div class="text-box">
					<div class="inner">
						<hgroup>
							<h2>{{$band->shoutout}}</h2>
						
							<h3>Aliquam ullamcorper eleifend neque, nec pharetra erat aliquam quis. Curabitur aliquet eros in augue facilisis imperdiet. Praesent vestibulum feugiat ligula.</h3>
						</hgroup>
						<!-- <a class="btn medium play-track" data-playlist="mytracklist" data-track="1" href="#tracklist">Play my tracks</a> -->
					</div>
				</div>
			</div>
			
		</div>
		<!-- /masonry boxes -->
	</div>
</section>
@endsection
@section('maincontent')
<section id="main-content" class="container clearfix">
	<!-- left -->
	<article class="col-1-3">
		<h2 class="heading-icon bio">Bio<br/><span class="color">{{$band->name}}.</span></h2>
		<ul class="details none">
			<li>
				<span>Orgin</span>
				<div>London, Berlin</div>
			</li>
			<li>
				<span>Genres</span>
				<div><a href="#">UK Funky</a><a href="#">Nu-Skool Breaks</a></div>
			</li>
			<li>
				<span>Links</span>
				<div><a href="#">Twitter</a><a href="#">Facebook</a></div>
			</li>
		</ul>
	</article>
	<!-- /left -->
	<!-- right -->
	<article class="col-2-3 last">
		<h3>Biography</h3>
		<p>
			{{$band->bio}}
		</p>
		<h3>Tracklist.</h3>
		<ol id="mytracklist" class="playlist">
			<li><div class="track" data-url="placeholders/mp3/adg3com_bustedchump.mp3">ADG3 Studios - Busted Chump</div></li>
			<li><div class="track" data-url="placeholders/mp3/adg3com_chuckedknuckles.mp3">ADG3 Studios - Chucked Nuckles</div></li>
			<li><div class="track" data-url="placeholders/mp3/adg3com_cloudlessdays.mp3">ADG3 Studios - Cloudlessdays</div></li>
			<li><div class="track" data-url="placeholders/mp3/adg3com_coreissues.mp3">ADG3 Studios - Core Issues</div></li>
			<li><div class="track" data-url="placeholders/mp3/adg3com_electrofreak.mp3">ADG3 Studios - Electro Freak</div></li>
		</ol>
	</article>
	<!-- /right -->
	<!-- boxes -->
	<section class="boxes">
		<!-- box -->
		<div class="box col-1-3">
			<h2 class="heading-icon video">Awesome dubstep<br/><span class="color">video.</span></h2>
			<p>Nullam odio eros, dictum ut hendrerit sed, auctor in arcu. Suspendisse auctor, sem ac vestibulum scelerisque, purus lorem sollicitudin nunc.</p>
		</div>
		<!-- /box -->
		<!-- box -->
		<div class="box col-2-3 last">
			<!-- video -->
			<div class="video">
				<iframe src="http://player.vimeo.com/video/20774732?color=fa4c29&amp;title=0&amp;byline=0&amp;portrait=0" width="620" height="348" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
			<!-- /video -->
		</div>
		<!-- /box -->
	</section>
	<!-- /boxes -->
	<!-- boxes -->
	<section class="boxes">
		<!-- box -->
		<div class="box col-1-3">
			<h2 class="heading-icon podcast no-margin">Check my new <br/><span class="color">podcasts.</span></h2>
		</div>
		<!-- /box -->
		<!-- box -->
		<div class="box col-1-3">
			<a href="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37028581&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29" class="thumb-icon mediabox tip" data-width="auto" data-height="200" data-tip-title="#United Breaks (48 min)" data-tip-desc="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consectetur eros eget lacus fringilla in feugiat odio viverra.">
				<img src="placeholders/02-box-image-420x200.jpg" alt="" title="This is an example of a caption" />
				<span class="icon soundcloud"></span>
			</a>
		</div>
		<!-- /box -->
		<!-- box -->
		<div class="box col-1-3 last">
			<a href="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37028581&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29" class="thumb-icon mediabox tip" data-width="auto" data-height="200" data-tip-title="#United Breaks (48 min)" data-tip-desc="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consectetur eros eget lacus fringilla in feugiat odio viverra.">
				<img src="placeholders/01-box-image-420x200.jpg" alt="" title="This is an example of a caption" />
				<span class="icon soundcloud"></span>
			</a>
		</div>
		<!-- /box -->
	</section>
	<!-- /boxes -->
</section><!-- footer-top -->
@endsection