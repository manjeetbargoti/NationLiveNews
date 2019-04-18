@extends('layouts.frontLayouts.frontend_design')
@section('content')

    <!-- START OF MAIN SLIDER -->
    <section class="pt-0 pb-0">
		<div class="container ptb-10">
			<div class="row">
				<div class="col-md-8 col-lg-8">
					<a class="btn-fill-red plr-10 mtb-10 btn-b-md" href="#"><b>ताज़ा खबर</b></a>
					<a class="dplay-inl-block mtb-10 ml-15 ml-md-0 " href="#">8:30 आकाश में बादल नहीं थे और उसका रंग गहरा नीला था</a>
				</div><!-- col-md-8 -->
				<div class="col-md-4 col-lg-4">
					<form class="abs-form mtb-10" action="{{ url('/blog') }}" method="get">
						<input type="text" placeholder="Search" name="search">
						<button type="submit"><i class="ion-ios-search"></i></button>
					</form>
				</div><!-- col-md-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
	<!-- END OF MAIN SLIDER -->
	

	<section class="ptb-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
                    @foreach($posts as $post)
					<div class="ptb-0">
						<a class="mt-10" href="{{ url('/') }}"><i class="mr-5 ion-ios-home"></i>HOME</a>
						<a class="mt-10" href="{{ url('/category/'.$post->cat_url) }}"><i class="mlr-10 ion-chevron-right"></i>{{ $post->cat_name }}</a>
						<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
                        {{ $post->post_title }}</a>
					</div>
                    @endforeach
					
                    @foreach($posts as $post)
					<div class="p-30 mb-30 card-view">
						<img src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}" alt="{{ $post->post_title }}">
						<h3 class="mt-30 mb-5"><b>{{ $post->post_title }}</b></h3>
						<ul class="list-li-mr-10 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
							<li><i class="mr-5 font-12 ion-android-person"></i>{{ $post->auth_name }}</li>
							<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li> -->
							<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
						</ul>
						
						<div class="mt-30">{!! $post->post_content !!}</div>
						
						<div class="sided-half">
							<ul class="s-left ptb-5 list-btn-semiwhite sided-sm-center">
								<li><a href="{{ url('/category/'.$post->cat_url) }}">{{ $post->cat_name }}</a></li>
							</ul>
							<ul class="s-right sided-sm-center ptb-5 list-a-p-5 list-a-plr-10 font-11 color-ash">
								<li><a href="#"><i class="ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="ion-social-google"></i></a></li>
								<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							</ul>
						</div><!-- sided-half -->
					</div><!-- card-view -->
					@endforeach

                    @foreach($users as $auth)
					<div class="p-30 mb-30 card-view">
						<div class="sided-90x">
							<div class="s-left br-3 oflow-hidden">
								<img src="{{ url('images/frontend/images/sidebar-profile-1-100x100.jpg') }}" alt="">
							</div><!-- s-left -->
							
							<div class="s-right">
								<h4><b>{{ $auth->name }}</b></h4>
								<p class="mt-5">Liquam neque sit amet sodales. Lorem ipsum dolor sit amet, 
									consectetur adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla effi 
								</p>
							</div><!-- s-left -->
						</div><!-- sided-90x -->
					</div><!-- card-view -->
                    @endforeach
					
					<div class="p-30 mb-30 card-view">
						<h4 class="p-title"><b>RELATED POST</b></h4>
						<div class="row">
                            <?php $counter = 0; ?>
                            @foreach($allposts as $post)
                            @if ($loop->first) @continue @endif
                            <?php $counter ++; ?>
                            @if( $counter <= 3)
							<div class="col-sm-4 mb-sm-20">
								<img src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}" alt="{{ $post->post_title }}">
								<h5 class="mt-20"><a href="{{ url('/news/'.$post->post_url) }}"><b>{{ str_limit($post->post_title, $limit=50) }}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- col-sm-4 -->
							@endif
                            @endforeach
						</div><!-- row -->
					</div><!-- card-view -->

				</div><!-- col-sm-8 -->
				
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>MOST READ</b></h4>
						<?php $counter = 0; ?>
                        @foreach($allposts as $post)
                        @if ($loop->first) @continue @endif
                        <?php $counter ++; ?>
                        @if( $counter <= 5)
						<div class="sided-80x mb-20">
							<div class="s-left">
								<img src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}" alt="{{ $post->post_title }}">
							</div><!-- s-left -->
							
							<div class="s-right">
								<h5><a href="{{ url('/news/'.$post->post_url) }}">
									<b>{{ str_limit($post->post_title, $limit=50) }}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
                        @endif
                        @endforeach
						
					</div><!-- card-view -->
					<!-- END OF SIDEBAR MOST READ -->
					
					<!-- START OF SIDEBAR ARTICLES BY AUTHOR -->
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>ARTICLES BY AUTHOR</b></h4>
						<?php $counter = 0; ?>
                        @foreach($users as $auth)
                        <?php $counter ++; ?>
                        @if( $counter <= 5)
						<div class="sided-90x mb-20">
							<div class="s-left br-3 oflow-hidden">
								<img src="{{ url('images/frontend/images/sidebar-profile-1-100x100.jpg') }}" alt="">
							</div><!-- s-left -->
							
							<div class="s-right">
								<h4 class="pt-20"><b>{{ $auth->name }}</b></h4>
								<h6 class="color-ash">Admin</h6>
							</div><!-- s-left -->
						</div><!-- sided-90x -->
						@endif
                        @endforeach
					</div><!-- card-view -->
					<!-- END OF SIDEBAR ARTICLES BY AUTHOR -->
					
					<!-- START OF SIDEBAR BANNER-->
					<div class="plr-30 ptb-50 color-white pos-relative text-center bg-7">
						<div class="bg-layer-8">
							<h3><b>REAL ESTATE</b></h3>
							<p class="mb-15 mt-5 color-white">A perfect place to find your home residential real estate may 
								contain either a single family</p>
							<h6><a class="btn-fill-white btn-b-sm plr-10" href="#"><b>READ MORE</b></a></h6>
						</div><!-- banner-area -->
					</div><!-- banner-area -->
					<!-- END OF SIDEBAR BANNER-->
					
					<!-- START OF SIDEBAR NEWSLETTER -->
					<div class="mt-30 p-30 plr-40 card-view text-center">
						<h4><b>NEWSLETTER</b></h4>
						<p>The best selling Magic-Magazine</p>
						<img class="mtb-20 max-w-100x mlr-auto" src="images/sidebar-profile-5-100x150.jpg" alt="">
						
						<form class="form-sm max-w-400x mlr-auto">
							<input type="email" placeholder="Yor Email">
							<h6><button class="mt-15 plr-20 btn-b-sm btn-fill-primary dplay-block" type="submit"><b>SUBSCRIBE NOW</b></button></h6>
						</form>
					</div><!-- card-view -->
					<!-- END OF SIDEBAR NEWSLETTER -->
					
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>

@endsection