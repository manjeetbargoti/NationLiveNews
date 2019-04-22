<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- for Google -->
    @if(!empty($metaTags[0]->post_title))<meta name="title" content="{{ $metaTags[0]->post_title }}"/>@endif

    @if(!empty($metaTags[0]->post_content))<meta name="description" content="{{ $metaTags[0]->post_title }}"/>@endif
    
    @if(!empty($metaTags[0]->post_keywords))<meta name="keywords" content="{{ $metaTags[0]->post_keywords }}"/>@endif
    
    @if(!empty($metaTags[0]->post_url))<link rel="canonical" href="{{ $metaTags[0]->post_url }}" />@endif
    <meta name="copyright" content="Copyright (C) Since 2019 - This Content is owned by original poster" />
    
    <!-- for Facebook -->
    @if(!empty($metaTags[0]->post_url))<meta property="og:url" content="{{ url('/news/'.$metaTags[0]->post_url) }}" />@endif

    <meta property="og:type" content="{{ url('/') }}" />
    @if(!empty($metaTags[0]->post_title))<meta property="og:title" content="{{ $metaTags[0]->post_title }}" />@endif

    @if(!empty($metaTags[0]->post_content))<meta property="og:description" content="{{ strip_tags(str_limit($metaTags[0]->post_content, $limit=150)) }}" />@endif
    
    @if(!empty($metaTags[0]->post_image))<meta property="og:image" content="{{ asset('/images/backend_images/post_images/large/'.$metaTags[0]->post_image) }}" />@endif

	<title>@if(!empty($metaTags[0]->post_title)){{ $metaTags[0]->post_title }} | Nation Live News @else Nation Live News @endif</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/frontend/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/ionicons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/frontend/styles.css') }}">
    <link rel="stylesheet" href="http://releases.flowplayer.org/7.2.7/skin/skin.css">
    <link rel="stylesheet" href="{{ asset('css/frontend/animate.css') }}">
	
</head>
<body>

<div id="fb-root"></div>
    <!-- Facebook Developer Script -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=336580363551684&autoLogAppEvents=1"></script>

    @include('layouts.frontLayouts.front_header')

    @yield('content')

    @include('layouts.frontLayouts.front_footer')

    <!-- SCIPTS -->
    <script src="{{ asset('js/frontend/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/frontend/tether.min.js') }}"></script>
	<script src="{{ asset('js/frontend/bootstrap.js') }}"></script>
	<script src="{{ asset('js/frontend/owl.carousel.js') }}"></script>
	<script src="{{ asset('js/frontend/scripts.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.9.1/hls.light.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>

    <!-- Flowplayer library -->
    <script src="http://releases.flowplayer.org/7.2.7/flowplayer.min.js"></script>

    <script>
		flowplayer("#cflow", {
			key: "$812975748999788",
			  clip: {
				   live: true,
				sources: [
					  { type: "application/x-mpegurl",
					  src:  "http://ayedewvndnl6-hls-live.wmncdn.net/live/tv.stream/index.m3u8" }
				]
			},
			autoplay: true,
			splash: false,      
			embed: false,
			share: false,
			ratio: 	0.5625,
		
		}); 
	</script>

	<script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
	</script>
	
    <script>
        $('.navigation_slide').owlCarousel({
            margin:25,
            loop:false,
            autoWidth:true,
            items:4,
            dots:false,
            nav:false
        })

        $('.latestnews').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items:1,
		loop:true,
		autoplay:true,
    autoplayTimeout:5000,
});
    </script>

    <script>
    $('.video-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
    
    <script>
        var curmdate = moment().format("DD/MM/YYYY");
    </script>

<script>
    window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
    }(document, "script", "twitter-wjs"));
</script>
	
</body>
</html>