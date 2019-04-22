@extends('layouts.frontLayouts.frontend_design')
@section('content')

    <section class="ptb-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="ptb-0">
						<a class="mt-10" href="{{ url('/') }}"><i class="mr-5 ion-ios-home"></i>होम</a>
						<a class="mt-10" href=""><i class="mlr-10 ion-chevron-right"></i>राज्य</a>
						<a class="mt-10 mb-30 color-ash"><i class="mlr-10 ion-chevron-right"></i>उत्तर प्रदेश</a>
                    </div>
                    @foreach($posts as $post)
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
							<p class="mt-10">{!! str_limit($post->post_content, $limit=150) !!}</p>
						</div><!-- right-area -->
					</div><!-- sided-250x -->
                    @endforeach
                </div>

                <div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR LATEST NEWS -->
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>LATEST NEWS</b></h4>
						<?php $counter = 0; ?>
                        @foreach($lposts as $post)
						@if($post->post_type == 1)
                        <?php $counter ++; ?>
                        @if( $counter <= 5)
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
            </div>
        </div>
    </section>    

@endsection