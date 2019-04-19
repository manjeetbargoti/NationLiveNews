@extends('layouts.frontLayouts.frontend_design')
@section('content')

		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div id="cflow"></div>
				</div>
				<div class="col-xl-4">
					<div class="mb-0 p-10 card-view bg-dark-primary color-white">
						<h4 class="p-title"><b>Top News</b></h4>
						<div class="scrolly">
						<?php $counter = 0;?>
						@foreach($posts as $post)
						@if($post->post_type == 1)
						@if($post->feature_post == 1)
						<?php $counter++;?>
						@if( $counter <= 10)
						<div class="sided-80x mb-20">
							<div class="s-left">
								<img src="{{ url( asset('/images/backend_images/post_images/large/'.$post->post_image) ) }}" alt="">
							</div><!-- s-left -->
							<div class="s-right">
								<h5><a href="{{ url('/news/'.$post->post_url) }}">
									<b>{!! str_limit($post->post_title, $limit= 50) !!}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock color-white"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						@endif
						@endif
						@endif
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END OF MAIN SLIDER -->

	<section class="pt-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<!-- START OF State News Section -->
						<div class="col-sm-12 col-md-6">
							<div class="p-15 card-view mb-30">
								<?php $counter = 0;?>
								@foreach($up as $upn)
								@if($upn->post_type == 1)
								<?php $counter++;?>
								@if( $counter <= 1 )
									<h4 class="p-title"><b>उत्तर प्रदेश</b></h4>
									@if(!empty($upn->post_image))
									<img src="{{ url( asset('/images/backend_images/post_images/large/'.$upn->post_image) ) }}" alt="">
									@elseif(!empty($upn->video_id))
									<iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$upn->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									@endif
									<h4 class="mt-30">
										<a href="{{ url('/news/'.$upn->post_url) }}">
											<b>{!! str_limit( $upn->post_title, $limit=50 ) !!}</b>
										</a>
									</h4>
									@endif
									@endif
									@endforeach

								<?php $counter = 0;?>
								@foreach($up as $upn)
								@if($upn->post_type == 1)
								@if ($loop->first) @continue @endif
								<?php $counter++;?>
								@if($upn->state == 1584)
								@if( $counter <= 4)
									<ul class="box_list">
										<li>
											<a href="{{ url('/news/'.$upn->post_url) }}">{!! str_limit($upn->post_title, $limit=100) !!}</a>
										</li>
									</ul>
								@endif
								@endif
								@endif
								@endforeach
							</div><!-- p-30 card-view -->
						</div><!-- col-sm-6 -->
						<!-- END OF State News Section -->

						<!-- START OF State News Section -->
						<div class="col-sm-12 col-md-6">
							<div class="p-15 card-view mb-30">
								<?php $counter = 0;?>
								@foreach($uk as $ukn)
								@if($ukn->post_type == 1)
								<?php $counter++;?>
								@if( $counter <= 1 )
									<h4 class="p-title"><b>उत्तराखंड</b></h4>
									@if(!empty($ukn->post_image))
									<img src="{{ url( asset('/images/backend_images/post_images/large/'.$ukn->post_image) ) }}" alt="">
									@elseif(!empty($ukn->video_id))
									<iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$ukn->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									@endif
									<h4 class="mt-30">
										<a href="{{ url('/news/'.$ukn->post_url) }}">
											<b>{!! str_limit( $ukn->post_title, $limit=50 ) !!}</b>
										</a>
									</h4>
								@endif
								@endif
								@endforeach

								<?php $counter = 0;?>
								@foreach($uk as $ukn)
								@if($ukn->post_type == 1)
								@if ($loop->first) @continue @endif
								<?php $counter++;?>
								@if($ukn->state == 1585)
								@if( $counter <= 4)
									<ul class="box_list">
										<li>
											<a href="{{ url('/news/'.$ukn->post_url) }}">{!! str_limit($ukn->post_title, $limit=100) !!}</a>
										</li>
									</ul>
								@endif
								@endif
								@endif
								@endforeach
							</div><!-- p-30 card-view -->
						</div><!-- col-sm-6 -->
						<!-- END OF State News Section -->
					</div><!-- row -->
				</div><!-- col-sm-8 -->
				<div class="col-md-12 col-lg-4">
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>LATEST NEWS</b></h4>
						<?php $counter = 0;?>
						@foreach($posts as $post)
						@if($post->post_type == 1)
						<?php $counter++;?>
						@if( $counter <= 4)
						<div class="sided-80x mb-20">
							<div class="s-left">
								@if(!empty($post->post_image))
								<img src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}" alt="{{ $post->post_title }}">
								@elseif(!empty($post->video_id))
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								@endif
							</div><!-- s-left -->
							<div class="s-right">
								<h5><a href="{{ url('/news/'.$post->post_url) }}">
									<b>{{ $post->post_title }}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						@endif
						@endif
						@endforeach
					</div><!-- card-view -->
				</div><!-- col-sm-4 -->
				<div class="col-md-12 col-lg-8">
					<?php $counter = 0;?>
					@foreach($posts as $post)
					@if($post->post_type == 1)
					<?php $counter++;?>
					@if( $counter <= 1)
					<div class="mb-30 p-15 ptb-sm-25 plr-sm-15 card-view">
						<h4 class="p-title"><b>आज की तारीख में</b></h4>
						<div class="images_sec">
							@if(!empty($post->post_image))
							<img src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}" alt="{{ $post->post_title }}">
							@elseif(!empty($post->video_id))
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							@endif
						</div>
						<h3 class="mt-30"><a href="{{ url('/news/'.$post->post_url) }}">{{ $post->post_title }}</a></h3>
						<ul class="mtb-10 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
							<li><i class="mr-5 font-12 ion-ios-pricetags"></i>{{ $post->cat_name }}</li>
							<li><i class="mr-5 font-12 ion-android-person"></i>{{ $post->auth_name }}</li>
							<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li> -->
							<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
						</ul>
						<p>{!! str_limit($post->post_content, $limit=200) !!}</p>
					</div><!-- bg-white -->
					@endif
					@endif
					@endforeach
				</div><!-- col-sm-8 -->

				<div class="col-md-4">
					<?php $counter = 0;?>
					@foreach($posts as $post)
					@if($post->post_type == 1)
					@if ($loop->first) @continue @endif
					<?php $counter++;?>
					@if( $counter <= 4)
					<div class="card-view p-3 mb-30">
					<div class="sided-80x">
						<div class="s-left">
							@if(!empty($post->post_image))
							<img src="{{ asset('/images/backend_images/post_images/large/'.$post->post_image) }}" alt="{{ $post->post_title }}">
							@elseif(!empty($post->video_id))
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							@endif
						</div><!-- left-area -->
						<div class="s-right">
							<h5><a href="{{ url('/news/'.$post->post_url) }}">{!! str_limit($post->post_title, $limit=80) !!}</a></h5>
						</div><!-- right-area -->
						<ul class="list-li-mr-20 color-lite-black">
								<li class="mr-1"><i class="mr-2 font-12 ion-ios-calendar-outline"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
								<li class="mr-1"><i class="mr-2 font-12 ion-ios-pricetags"></i>{{ $post->cat_name }}</li>
								<li class="mr-1"><i class="mr-2 font-12 ion-android-person"></i>{{ $post->auth_name }}</li>
							</ul>
					</div><!-- sided-250x -->
					</div>
					@endif
					@endif
					@endforeach
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section>

	<!-- START OF VIDEO -->
	<section class="pb-20">
		<div class="container">
			<h4 class="p-title"><b>विशेष रुप से प्रदर्शित वीडियो</b></h4>
			<div class="video_carousel">
				<div class="video-carousel owl-carousel owl-theme">
					@foreach($posts as $post)
					@if($post->post_type == 2)
					<div class="item">
						<div class="video_box">
							<div class="pos-relative">
								<iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$post->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<!-- <div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div> -->
							</div>
							<a class="hover-grey dplay-block" href="{{ url('/news/'.$post->post_url) }}"><h5 class="mt-15"><b>{{ strip_tags(str_limit($post->post_title, $limit=50)) }}</b></h5></a>
							<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
								<li><i class="mr-5 font-12 ion-clock"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
								<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
							</ul>
						</div><!-- col-md-3 -->
					</div>
					@endif
					@endforeach
				</div>
			</div>

		</div><!-- container -->
	</section>
	<!-- END OF VIDEO -->

	<section class="pb-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>मनोरंजन</b></h4>
						<?php $counter = 0;?>
						@foreach($ent as $ente)
						@if($ente->post_type == 1)
						<?php $counter++;?>
						@if( $counter <= 1)
						@if(!empty($ente->post_image))
						<img src="{{ asset('/images/backend_images/post_images/large/'.$ente->post_image) }}" alt="">
						@elseif(!empty($ente->video_id))
						<iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$ente->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						@endif
						<h4 class="mt-15"><a href="{{ url('/news/'.$ente->post_url) }}">
							<b>{{ $ente->post_title }}</b></a></h4>
						<ul class="mtb-10 list-li-mr-5 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i>{{ date('M d, Y', strtotime($ente->created_at)) }}</li>

							<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
						</ul>
							@foreach($ent as $ente)
							@if ($loop->first) @continue @endif
							<?php $counter++;?>
							@if( $counter <= 5)
							<ul class="box_list">
								<li>
									<a href="{{ url('/news/'.$post->post_url) }}">{{ $ente->post_title }}</a>
								</li>
							</ul>
							@endif
							@endforeach
						@endif
						@endif
						@endforeach
					</div>
					<!-- END OF SIDEBAR MOST READ -->
				</div><!-- col-sm-4 -->
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>मोबाइल-टेक</b></h4>
						<?php $counter = 0;?>
						@foreach($tech as $tec)
						@if($tec->post_type == 1)
						<?php $counter++;?>
						@if( $counter <= 1)
						@if(!empty($tec->post_image))
						<img src="{{ asset('/images/backend_images/post_images/large/'.$tec->post_image) }}" alt="">
						@elseif(!empty($tec->video_id))
						<iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$tec->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						@endif
						<h4 class="mt-15"><a href="{{ url('/news/'.$tec->post_url) }}">
							<b>{{ $tec->post_title }}</b></a></h4>
						<ul class="mtb-10 list-li-mr-5 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i>{{ date('M d, Y', strtotime($tec->created_at)) }}</li>

							<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
						</ul>
						    <?php $counter = 0;?>
							@foreach($tech as $tec)
							@if ($loop->first) @continue @endif
							<?php $counter++;?>
							@if( $counter <= 5)
							<ul class="box_list">
								<li>
									<a href="{{ url('/news/'.$tec->post_url) }}">{{ $tec->post_title }}</a>
								</li>
							</ul>
							@endif
							@endforeach
						@endif
						@endif
						@endforeach
					</div>
					<!-- END OF SIDEBAR MOST READ -->
				</div><!-- col-sm-4 -->
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>क्राइम</b></h4>
						<?php $counter = 0;?>
						@foreach($crime as $crimes)
						@if($crimes->post_type == 1)
						<?php $counter++;?>
						@if( $counter <= 1)
						@if(!empty($crimes->post_image))
						<img src="{{ asset('/images/backend_images/post_images/large/'.$crimes->post_image) }}" alt="">
						@elseif(!empty($crimes->video_id))
						<iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$crimes->video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						@endif
						<h4 class="mt-15"><a href="{{ url('/news/'.$crimes->post_url) }}">
							<b>{{ $crimes->post_title }}</b></a></h4>
						<ul class="mtb-10 list-li-mr-5 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i>{{ date('M d, Y', strtotime($crimes->created_at)) }}</li>

							<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
						</ul>
							@foreach($crime as $crimes)
							@if ($loop->first) @continue @endif
							<?php $counter++;?>
							@if( $counter <= 5)
							<ul class="box_list">
								<li>
									<a href="{{ url('/news/'.$crimes->post_url) }}">{{ $crimes->post_title }}</a>
								</li>
							</ul>
							@endif
							@endforeach
						@endif
						@endif
						@endforeach
					</div>
					<!-- END OF SIDEBAR MOST READ -->
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>

@endsection