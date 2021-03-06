@extends('front.templates.main')
@section('page-header')
<section id="page-header">
	<div class="container clearfix">
		<hgroup>
			<h1 class="page-title">Bunticles</h1>
			<h2 class="page-subtitle">Latest news.</h2>
		</hgroup>
		<!-- share it -->
		<div id="share-wrap">
			<div id="share" data-url="blog.html" data-text="Blog" data-title="share"></div>
		</div>
		<!-- /share it -->
		<hr>
	</div>
</section>
@endsection
@section('maincontent')
<section id="main-content" class="container clearfix">
	<!-- main -->
	<section id="main" class="clearfix">
		<article class="entry">
			<h2 class="entry-heading"><a href="blog-single.html">Post with slider.</a></h2>
			<!-- nivo slider -->
			<div class="nivo-slider">
				<a href="/artists.html"><img src="placeholders/blog-02.jpg" alt="" title="" /></a>
				<a href="/artists.html"><img src="placeholders/blog-01.jpg" alt="" title="" /></a>
				<a href="/artists.html"><img src="placeholders/blog-03.jpg" alt="" title="" /></a>
	        </div>
			<!-- /nivo slider -->
			<p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo. </p>
			<ul class="entry-meta none">
				<li class="entry-date">22/12/2012</li>
				<li classs="entry-comments">Comments 12</li>
				<li class="entry-more"><a href="blog-single.html">Read more</a></li>
			</ul>
		</article>
		<article class="entry">
			<h2 class="entry-heading"><a href="blog-single.html">Aliquam ullamcorper eleifend neque.</a></h2>
			<img src="placeholders/blog-01.jpg" alt="" class="aligncenter">
			<p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo. </p>
			<ul class="entry-meta none">
				<li class="entry-date">22/12/2012</li>
				<li classs="entry-comments">Comments 12</li>
				<li class="entry-more"><a href="blog-single.html">Read more</a></li>
			</ul>
		</article>
		<article class="entry">
			<h2 class="entry-heading"><a href="blog-single.html">Playlist for today.</a></h2>
			<ol class="playlist">
				<li><div class="track" data-url="placeholders/mp3/adg3com_bustedchump.mp3">ADG3 Studios - Busted Chump</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_chuckedknuckles.mp3">ADG3 Studios - Chucked Nuckles</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_cloudlessdays.mp3">ADG3 Studios - Cloudlessdays</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_coreissues.mp3">ADG3 Studios - Core Issues</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_electrofreak.mp3">ADG3 Studios - Electro Freak</div></li>
			</ol>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo. </p>
			<ul class="entry-meta none">
				<li class="entry-date">22/12/2012</li>
				<li classs="entry-comments">Comments 12</li>
				<li class="entry-more"><a href="blog-single.html">Read more</a></li>
			</ul>
		</article>
		<article class="entry">
			<h2 class="entry-heading"><a href="blog-single.html">Madoff - Session I</a></h2>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F41795634&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29"></iframe>
			<p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo. </p>
			<ul class="entry-meta none">
				<li class="entry-date">22/12/2012</li>
				<li classs="entry-comments">Comments 12</li>
				<li class="entry-more"><a href="blog-single.html">Read more</a></li>
			</ul>
		</article>
		<article class="entry">
			<h2 class="entry-heading"><a href="blog-single.html">Dubstep party video.</a></h2>
			<!-- video -->
			<div class="video">
				<iframe src="http://player.vimeo.com/video/20774732?color=fa4c29&amp;title=0&amp;byline=0&amp;portrait=0" width="680" height="382" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
			<!-- /video -->
			<p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo. </p>
			<ul class="entry-meta none">
				<li class="entry-date">22/12/2012</li>
				<li classs="entry-comments">Comments 12</li>
				<li class="entry-more"><a href="blog-single.html">Read more</a></li>
			</ul>
		</article>
		<!-- pagination -->
		<ul id="pagination" class="none">
			<li>
				<a href="#" class="nav-prev"></a>
			</li>
			<li>
				<a href="#">1</a>
			</li>
			<li>
				<a href="#">2</a>
			</li>
			<li>
				<span class="active">3</span>
			</li>
			<li>
				<a href="#">4</a>
			</li>
			<li>
				<a href="#">5</a>
			</li>
			<li>
				<a href="#" class="nav-next"></a>
			</li>
		</ul>
		<!-- /pagination -->
		<div class="clear"></div>
	</section>
	<!-- /main -->
	<!-- sidebar -->
	<aside id="sidebar">
		<!-- Search widget -->
		<div class="widget widget_search">
			<h3 class="widget-title">Search.</h3>
			<!-- form -->
			<form method="get" id="searchform" action="#">
                <input type="text" class="input-search" value="" name="s" id="s">
                <input type="submit" class="search-button" id="submit-search" value="Search">
			</form>
			<!-- /form -->
		</div>	
		<!-- Categories widget -->
		<div class="widget">
			<h3 class="widget-title">Categories.</h3>
			<ul class="categories">
				<li> <a href="#">Drum and bass <span></span></a> </li>
				<li> <a href="#">Electro breaks <span></span></a> </li>
				<li> <a href="#">Breakbeat <span></span></a> </li>
				<li> <a href="#">Nu-skool breaks <span></span></a> </li>
			</ul>
		</div>
		<!-- Video widget -->
		<div class="widget">
			<h3 class="widget-title">Video widget.</h3>
			<!-- video -->
			<div class="video">
				<iframe src="http://player.vimeo.com/video/20774732?color=fa4c29&amp;title=0&amp;byline=0&amp;portrait=0" width="288" height="162" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
			<!-- /video -->
		</div>
		<!-- Twitter feed widget -->
		<div class="widget">
			<h3 class="widget-title">Twitter feed.</h3>
			<!-- twitter feed -->
			<ul class="tweets" data-tweets-count="4">
				<li>Oops, our Twitter feed is unavailable at the moment - <a href="#">Follow us on Twitter!</a></li>
			</ul>	
			<!-- /twitter feed  -->
		</div>
		<!-- Flickr widget -->
		<div class="widget">
			<h3 class="widget-title">Flickr widget.</h3>
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user_set&amp;set=72157630861485102"></script>
		</div>
		<!-- Text widget -->
		<div class="widget">
			<h3 class="widget-title">Text widget.</h3>
			<p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. </p>
		</div>
	</aside>
	<!-- /sidebar -->
</section><!-- footer-top -->
@endsection