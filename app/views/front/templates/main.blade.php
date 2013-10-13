@include('front.inc.head')
<body class="page-home-fullslider">
<!--[if lte IE 7]>
   <div id="ie-message"><p>You are using Internet Explorer 7.0 or older to view this site. Your browser is an eight year old browser which does not display modern web sites properly. Please upgrade to a newer browser to fully enjoy the web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->
<!-- header -->
@include('front.inc.nav')
@yield('header')
<!-- /header --><!-- page header -->
@yield('page-header')
<!-- /full player -->
@yield('maincontent')
<!-- upcoming events -->
@yield('upcomingevents')
<!-- /upcoming events --><!-- footer-top -->
@yield('footertop')
<!-- /footer-top -->
<!-- footer -->
@yield('footer')
@include('front.inc.footer')
<!-- /footer -->
</body>
</html>