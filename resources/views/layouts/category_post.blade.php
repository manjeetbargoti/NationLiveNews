@extends('layouts.frontLayouts.frontend_design')
@section('content')

	<section class="ptb-30">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
                    @foreach($pcategory as $postcat)
					<div class="ptb-0">
						<a class="mt-10" href="{{ url('/') }}"><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
                        
						<a class="mt-10 color-ash" href="#"><i class="mlr-10 ion-chevron-right"></i><b>{{ $postcat->category_name }}</b></a>
                        
						<h1 class="mtb-20"><b>{{ $postcat->category_name }}</b></h1>
						<p class="mb-30">{{ $postcat->description }}</p>
					</div>
					@if($postcat->category_url == 'cricket')
					<div class="p-30 mb-30 card-view">
						<iframe class="ipl" src="https://www.cricket-score.club/embed/live" style="width:100%;height:40em;min-width: 300px;" frameborder="0"  scrolling="yes" sandbox="allow-scripts"></iframe>
					</div>
					@endif

                    @endforeach
					
					@if($categorypost_count == 0)
						<h4 style="text-align: center;">Oh Snap! No news found.</h4>
					@endif
					
                    <?php $counter = 0; ?>
					@foreach($categorypost as $post)
					<?php $counter ++; ?>
					@if( $counter <= 8)
					<div class="mb-30 sided-250x s-lg-height card-view">
						<div class="s-left">
							@if(!empty($post->post_image))
								<img src="{{ url( asset('/images/backend_images/post_images/large/'.$post->post_image)) }}" alt="{{ $post->post_title }}">
							@elseif(!empty($post->video_id))
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							@endif
						</div><!-- left-area -->
						<div class="s-right ptb-30 pt-sm-20 pb-xs-5 plr-30 plr-xs-0">
							<h4><a href="{{ url('/news/'.$post->post_url) }}">{{ $post->post_title }}</a></h4>
							<ul class="mtb-10 list-li-mr-20 color-lite-black">
								<li><i class="mr-5 font-12 ion-clock"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
								<li><i class="mr-5 font-12 ion-android-person"></i>{{ $post->auth_name }}</li>
								<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
								<li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
							</ul>
							<p class="mt-10">{{ strip_tags(str_limit($post->post_content, $limit=150)) }}</p>
						</div><!-- right-area -->
					</div><!-- sided-250x -->
					@endif
                    @endforeach
					{{ $categorypost->render() }}
					
				</div><!-- col-sm-8 -->
				
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR LATEST NEWS -->
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>LATEST NEWS</b></h4>
						<?php $counter = 0; ?>
                        @foreach($posts as $post)
						@if($post->post_type == 1)
                        <?php $counter ++; ?>
                        @if( $counter <= 8)
						<div class="sided-80x mb-20">
							<div class="s-left">
								@if(!empty($post->post_image))
									<img src="{{ url( asset('/images/backend_images/post_images/large/'.$post->post_image)) }}" alt="{{ $post->post_title }}">
								@elseif(!empty($post->video_id))
									<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								@endif
							</div><!-- s-left -->
							
							<div class="s-right">
								<h5><a href="{{ url('/news/'.$post->post_url) }}">
									<b>{{ str_limit($post->post_title, $limit=80) }}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						@endif
						@endif
                        @endforeach
					</div><!-- card-view -->
					<!-- END OF SIDEBAR LATEST NEWS -->
					
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>

    @endsection