@extends('front.templates.main')
@section('header')

@endsection
@section('page-header')
<section class="slider">
<div class="fullwidthbanner-container revolution-slider">					
	<div class="fullwidthbanner">
		<ul>
			<li data-transition="fade" data-slotamount="8"> 										
				<img src="placeholders/revolution-slider/03-bg.jpg" />							
				<div class="caption lfb" data-x="350" data-y="80" data-speed="2000" data-start="900" data-easing="easeOutExpo"><img src="placeholders/revolution-slider/03-dj.png" /></div>
				<div class="caption lfb" data-x="350" data-y="80" data-speed="2000" data-start="900" data-easing="easeOutExpo"><img src="placeholders/revolution-slider/03-dj.png" /></div>
				<div class="caption lft very_big_white" data-x="0" data-y="200" data-speed="900" data-start="2200" data-easing="easeOutExpo">bunt <span class="color">gr</span></div>
				<div class="caption lfl big_orange" data-x="0" data-y="290" data-speed="600" data-start="1900" data-easing="easeOutExpo"><span style="font-weight:normal;">Be.U.</span><strong>Not.Them</strong></div>
				<div class="caption lfl medium_text" data-x="40" data-y="380" data-speed="400" data-start="2400" data-easing="easeOutExpo">+ Dubstep</div>
				<div class="caption lfl medium_text" data-x="40" data-y="410" data-speed="400" data-start="2800" data-easing="easeOutExpo">+ Drum and Bass</div>
				<div class="caption lfl medium_text" data-x="40" data-y="440" data-speed="400" data-start="3200" data-easing="easeOutExpo">+ Metal</div>
				<div class="caption lfl medium_text" data-x="40" data-y="470" data-speed="400" data-start="3600" data-easing="easeOutExpo">+ Hip Hop</div>
				<div class="caption lfl medium_text" data-x="40" data-y="500" data-speed="400" data-start="4000" data-easing="easeOutExpo">+ Nu Skool Breaks</div>
			</li>
			<li data-transition="boxslide" data-slotamount="8"> 										
				<img src="placeholders/revolution-slider/02-bg.jpg" />									
				<div class="caption lfl" data-x="200" data-y="310" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="placeholders/revolution-slider/02-vinyl.png" /></div>
				<div class="caption lfl" data-x="30" data-y="300" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="placeholders/revolution-slider/02-cover.png" /></div>
				<div class="caption lft very_big_white" data-x="0" data-y="100" data-speed="400" data-start="2000" data-easing="easeOutExpo">Promises in Empty Words by <span class="color">Fall Of Man.</span></div>
				<div class="caption lfb big_orange" data-x="0" data-y="190" data-speed="400" data-start="2300" data-easing="easeOutExpo"><span style="font-weight:normal;">New awesome <strong>melodic punk</strong> album.</span></div>
			</li>
		<!-- 	<li data-transition="fade" data-slotamount="10"> 										
				<img src="placeholders/revolution-slider/01-bg.jpg" />									
				<div class="caption lft" data-x="100" data-y="50" data-speed="500" data-start="900" data-easing="easeOutExpo"><img src="placeholders/revolution-slider/01-envato.png" /></div>
                <div class="caption lfl" data-x="400" data-y="80" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="placeholders/revolution-slider/01-dj.png" /></div>
				<div class="caption lft very_big_white" data-x="0" data-y="250" data-speed="400" data-start="1700" data-easing="easeOutExpo">Meet DJ Envato.</div>
				<div class="caption lfb big_orange" data-x="0" data-y="340" data-speed="400" data-start="1900" data-easing="easeOutExpo"><span style="font-weight:normal;">Now in</span><strong> Eprom label.</strong></div>
				<div class="caption lfb" data-x="0" data-y="450" data-speed="400" data-start="2000" data-easing="easeOutExpo"><a href="#" class="btn large">View DJ Envato releases</a></div>
			</li> -->
			
		</ul>		
		<div class="tp-bannertimer"></div>												
	</div>					
</div>
</section>
<!-- /page header -->
<!-- full player -->
<section id="full-player-wrap">
	<div class="container">
		<!-- player -->
		<div id="full-player">
			<ul id="tracklist" class="">
				<li><div class="track" data-url="placeholders/mp3/adg3com_bustedchump.mp3" data-show-ui="true">ADG3 Studios - Busted Chump</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_chuckedknuckles.mp3">ADG3 Studios - Chucked Nuckles</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_cloudlessdays.mp3">ADG3 Studios - Cloudlessdays</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_coreissues.mp3">ADG3 Studios - Core Issues</div></li>
				<li><div class="track" data-url="placeholders/mp3/adg3com_electrofreak.mp3">ADG3 Studios - Electro Freak</div></li>
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
@endsection
@section('maincontent')
<section id="main-content" class="container clearfix">
	<!-- recent works -->
	<section class="content items portfolio recent-works">
    	<!-- item -->
		<article class="col-1-4">
			<h2 class="heading-icon deck">Τελευταίες <span class="color">Κυκλοφορίες.</span></h2>
			<p>
				Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.
				<a href="#" class="text-button">View All</a>
			</p>
		</article>
		<!-- /item -->
		<!-- item -->
		<article class="col-1-4 clearfix">
			<a href="#" class="thumb-slide">
				<span class="thumbs-wrap">
					<img src="placeholders/spuro.jpg" alt="" title="" />
					<img src="placeholders/02B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
			</a>
			<footer>
				<h2><a href="#">Strike Back!</a></h2>
				<div class="cat"><a href="#">Glitch</a><a href="#">Breakcore</a></div>
			</footer>
		</article>
		<!-- /item -->
		<!-- item -->
		<article class="col-1-4">
			<a href="#" class="thumb-slide">
				<span class="badge free"></span>
				<span class="thumbs-wrap">
					<img src="placeholders/pwd.jpg" alt="" title="" />
					<img src="placeholders/02B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
			</a>
			<footer>
				<h2><a href="#">Speakerz Massive </a></h2>
				<div class="cat"><a href="#">Glitch</a></div>
			</footer>
		</article>
		<!-- /item -->
		<!-- item -->
		<article class="col-1-4">
			<a href="#" class="thumb-slide">
				<span class="thumbs-wrap">
					<img src="placeholders/fom.jpg" alt="" title="" />
					<img src="placeholders/02B-portfolio-thumb-420x420.jpg" alt="" title="" />
				</span>
			</a>
			<footer>
				<h2><a href="#">Legacy of Bass</a></h2>
				<div class="cat"><a href="#">Glitch</a><a href="#">Dubstep</a></div>
			</footer>
		</article>
		<!-- /item -->
	</section>
	<div class="clear"></div>
	<!-- /recent-works -->
	<!-- boxes -->
	<section class="boxes">
		<!-- box -->
		<article class="box col-2-3">
			<h2>Καλώς Ήλθατε στο<span class="color"> Bunt.gr.</span></h2>
			<img src="placeholders/bunt.jpg" alt="About Eprom" class="aligncenter">
			<p>
Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας. Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα, από τον 15ο αιώνα, όταν ένας ανώνυμος τυπογράφος πήρε ένα δοκίμιο και ανακάτεψε τις λέξεις για να δημιουργήσει ένα δείγμα βιβλίου. Όχι μόνο επιβίωσε πέντε αιώνες</p>
			<p>
				Είναι πλέον κοινά παραδεκτό ότι ένας αναγνώστης αποσπάται από το περιεχόμενο που διαβάζει, όταν εξετάζει τη διαμόρφωση μίας σελίδας. Η ουσία της χρήσης του Lorem Ipsum είναι ότι έχει λίγο-πολύ μία ομαλή κατανομή γραμμάτων, αντίθετα με το να βάλει κανείς κείμενο όπως 'Εδώ θα μπει κείμενο, εδώ θα μπει κείμενο', κάνοντάς το να φαίνεται σαν κανονικό κείμενο.


				<a href="#" class="text-button">Περισσότερα</a>
			</p>
		</article>
		<!-- /box -->
		<!-- box -->
		<div class="box col-1-3 last">
			<div class="widget">
				<h3>Τελευταία <span class="color">Νέα.</span></h3>
				<ul class="recent-entries">
					<li><span class="date">23/11/12</span> <a href="#">Pellentesque elit leo, accumsan sed consectetur.</a> </li>
					<li><span class="date">02/11/12</span> <a href="#">Aliquam eu magna vel metus ultrices ornare in.</a> </li>
					<li><span class="date">30/10/12</span> <a href="#">Suspendisse posuere blandit tortor sit.</a> </li>
					<li><span class="date">23/09/12</span> <a href="#">Quisque porta sodales orci.</a> </li>
					<li><span class="date">07/05/12</span> <a href="#">Mauris est nisi, consequat vitae.</a> </li>
				</ul>
			</div>
			<!-- Twitter feed widget -->
			<div class="widget">
				<h3 class="widget-title">Twitter feed.</h3>
				<!-- twitter feed -->
				<ul class="tweets" data-tweets-count="2">
					<li>Oops, our Twitter feed is unavailable at the moment - <a href="#">Follow us on Twitter!</a></li>
				</ul>	
				<!-- /twitter feed  -->
			</div>
		</div>
		<!-- /box -->
	</section>
	<!-- /boxes -->
	<!-- boxes -->
	<section class="boxes">
		<!-- box -->
		<div class="box col-1-3">
			<h2 class="heading-icon podcast no-margin">Δείτε Νέα<br/><span class="color">podcasts.</span></h2>
		</div>
		<!-- /box -->
		<!-- box -->
		<div class="box col-1-3">
			<a href="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37028581&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29" class="thumb-icon mediabox tip" data-width="auto" data-height="200" data-tip-title="#United Breaks (48 min)" data-tip-desc="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consectetur eros eget lacus fringilla in feugiat odio viverra.">
				<img src="placeholders/bob.jpg" alt="" title="This is an example of a caption" />
				<span class="icon soundcloud"></span>
			</a>
		</div>
		<!-- /box -->
		<!-- box -->
		<div class="box col-1-3 last">
			<a href="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F37028581&amp;auto_play=false&amp;show_artwork=true&amp;color=fa4c29" class="thumb-icon mediabox tip" data-width="auto" data-height="200" data-tip-title="#United Breaks (48 min)" data-tip-desc="Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consectetur eros eget lacus fringilla in feugiat odio viverra.">
				<img src="placeholders/fooom.jpg" alt="" title="This is an example of a caption" />
				<span class="icon soundcloud"></span>
			</a>
		</div>
		<!-- /box -->
	</section>
	<!-- /boxes -->
</section>
@endsection
@section('upcomingevents')
<section id="upcoming-events">
	<section class="container clearfix">
	<!-- left column -->
	<div class="col-1-2">
		<h3 class="medium-heading"><span class="color">Upcoming</span><br/>Events.</h3>
	</div>
	<!-- /left column -->
	<!-- right column -->
	<div class="col-1-2 last">
		<!-- events list -->
		<ul class="none events-list">
			<!-- event -->
			<li>
				<a href="event.html">
					<span class="date">08/10</span>
					<span class="title">Power Bass Festival <span class="details">Melbourne, Australia</span></span>
					<span class="plus-button"></span>
				</a>
			</li>
			<!-- /event -->
			<!-- event -->
			<li>
				<a href="event.html">
					<span class="date">10/11</span>
					<span class="title">Made in Glitch! <span class="details">London, UK</span></span>
					<span class="plus-button"></span>
				</a>
			</li>
			<!-- /event -->
			<!-- event -->
			<li>
				<a href="event.html">
					<span class="date">30/11</span>
					<span class="title">Sanctuary Outdoor Festival <span class="details">Warsaw, Poland</span></span>
					<span class="plus-button"></span>
				</a>
			</li>
			<!-- /event -->
			<!-- event -->
			<li>
				<a href="event.html">
					<span class="date">02/12</span>
					<span class="title">Sunandbass <span class="details">Sardinia, Italy</span></span>
					<span class="plus-button"></span>
				</a>
			</li>
			<!-- /event -->
			<!-- event -->
			<li>
				<a href="event.html">
					<span class="date">11/12</span>
					<span class="title">Amsterdam Dance Event <span class="details">Amsterdam, Holand</span></span>
					<span class="plus-button"></span>
				</a>
			</li>
			<!-- /event -->
		</ul>
		<!-- /events list -->
	</div>
	<!-- /right column -->
	</section>
</section>
@endsection
@section('footertop')
<section id="footer-top">
	<div class="container clearfix">
		<div class="col-2-3">
			<ul class="contact">
				<li class="address">Athens, Greece.</li>
				<!-- <li class="phone">(123) 563-9899-234</li> -->
				<li class="email"><a href="mailto:contact@companyname.com">info@bunt.gr</a></li>
			</ul>
		</div>
		<div class="col-1-3 last">
			 <!-- social icons -->
			<div class="social-icons">
				<a href="#" class="social-icon twitter"></a>
				<a href="#" class="social-icon facebook"></a>
				<a href="#" class="social-icon lastfm"></a>
				<a href="#" class="social-icon soundcloud"></a>
				<a href="#" class="social-icon myspace"></a>
				<a href="#" class="social-icon youtube"></a>
			</div>	
			<!-- /social icons -->
		</div>
	</div>
</section>
@endsection
@section('footer')

@endsection
