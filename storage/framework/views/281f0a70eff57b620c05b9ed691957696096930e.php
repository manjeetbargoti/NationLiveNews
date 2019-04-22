<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- for Google -->
    <?php if(!empty($metaTags[0]->post_title)): ?><meta name="title" content="<?php echo e($metaTags[0]->post_title); ?>"/><?php endif; ?>

    <?php if(!empty($metaTags[0]->post_content)): ?><meta name="description" content="<?php echo e($metaTags[0]->post_title); ?>"/><?php endif; ?>
    
    <?php if(!empty($metaTags[0]->post_keywords)): ?><meta name="keywords" content="<?php echo e($metaTags[0]->post_keywords); ?>"/><?php endif; ?>
    
    <?php if(!empty($metaTags[0]->post_url)): ?><link rel="canonical" href="<?php echo e($metaTags[0]->post_url); ?>" /><?php endif; ?>
    <meta name="copyright" content="Copyright (C) Since 2019 - This Content is owned by original poster" />
    
    <!-- for Facebook -->
    <?php if(!empty($metaTags[0]->post_url)): ?><meta property="og:url" content="<?php echo e(url('/news/'.$metaTags[0]->post_url)); ?>" /><?php endif; ?>

    <meta property="og:type" content="<?php echo e(url('/')); ?>" />
    <?php if(!empty($metaTags[0]->post_title)): ?><meta property="og:title" content="<?php echo e($metaTags[0]->post_title); ?>" /><?php endif; ?>

    <?php if(!empty($metaTags[0]->post_content)): ?><meta property="og:description" content="<?php echo e(strip_tags(str_limit($metaTags[0]->post_content, $limit=150))); ?>" /><?php endif; ?>
    
    <?php if(!empty($metaTags[0]->post_image)): ?><meta property="og:image" content="<?php echo e(asset('/images/backend_images/post_images/large/'.$metaTags[0]->post_image)); ?>"" /><?php endif; ?>

	<title><?php if(!empty($metaTags[0]->post_title)): ?><?php echo e($metaTags[0]->post_title); ?> | Nation Live News <?php else: ?> Nation Live News <?php endif; ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo e(asset('css/frontend/bootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('fonts/ionicons.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/frontend/owl.carousel.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/frontend/styles.css')); ?>">
    <link rel="stylesheet" href="http://releases.flowplayer.org/7.2.7/skin/skin.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/animate.css')); ?>">
	
	
</head>
<body>

<div id="fb-root"></div>
    <!-- Facebook Developer Script -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=336580363551684&autoLogAppEvents=1"></script>


    <?php echo $__env->make('layouts.frontLayouts.front_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.frontLayouts.front_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- SCIPTS -->
    <script src="<?php echo e(asset('js/frontend/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/frontend/tether.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/frontend/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('js/frontend/owl.carousel.js')); ?>"></script>
	<script src="<?php echo e(asset('js/frontend/scripts.js')); ?>"></script>
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
<?php /* D:\NationLive\NationLiveNews\resources\views/layouts/frontLayouts/frontend_design.blade.php */ ?>