<footer class="bg-191 pos-relative color-ccc bg-dark-primary pt-50">
		<div class="abs-tblr pt-50 z--1 text-center">
			<div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>QUICK LINKS</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
							<li><a href="#">होम</a></li>
							<li><a href="#">व्यापार</a></li>
							<li><a href="#">खेल</a></li>
							<li><a href="#">राजनीति</a></li>
							<li><a href="#">यात्रा</a></li>
							<li><a href="#">जीवन शैली</a></li>
							<li><a href="#">संस्कृति</a></li>
							<li><a href="#">टेक</a></li>
							<li><a href="#">वीडियो</a></li>
					</ul>
				</div><!-- col-sm-2 -->
				
				<div class="col-lg-4 col-md-8 col-sm-8">	
					<div class="pl-10 pl-sm-0">	
						<h5 class="f-title"><b>FEATURED VIDEO</b></h5>
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="{{ url('images/frontend/images/video-1-300x300.jpg') }}" alt="">
								<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<h5><a href="#"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व एंग्लैंड छोड़ दिया</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-ash">
									<li><i class="mr-5 font-12 ion-clock color-white"></i>25 जनवरी 2018</li>
									<li><i class="mr-5 font-12 ion-eye color-white"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="{{ url('images/frontend/images/video-2-300x300.jpg') }}" alt="">
								<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<h5><a href="#"><b>समर्थक के प्रभुत्व के दौरान डेन कार्टर ने वर्षों तक रोल किया ...</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-ash">
									<li><i class="mr-5 font-12 ion-clock color-white"></i>25 जनवरी 2018</li>
									<li><i class="mr-5 font-12 ion-eye color-white"></i>105</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
					</div><!-- pl-10 -->
				</div><!-- col-sm-4 -->
				
				
				
				<div class="col-lg-4 col-md-8 col-sm-8">		
					<div class="pr-10 pr-sm-0">	
						<h5 class="f-title"><b>LATEST NEWS</b></h5>
						<?php $counter=1; ?>
						@foreach($posts as $post)
						@if($counter <= 2 )
							<div class="sided-80x mb-30">
								<a class="s-left" href="#">
									<img src="{{ url('images/backend_images/post_images/large/'.$post->post_image) }}" alt="">
									<!--<div class="hover-video sm"><span class="icon"><i class="ion-play"></i></span></div>-->
								</a><!-- s-left -->
								
								<div class="s-right pl-10">
									<h5><a href="#"><b>{{ $post->post_title }}</b></a></h5>
									<ul class="mtb-5 list-li-mr-20 color-ash">
										<li><i class="mr-5 font-12 ion-clock color-white"></i>{{ date('M d, Y', strtotime($post->created_at)) }}</li>
										<li><i class="mr-5 font-12 ion-eye color-white"></i>105</li>
									</ul>
								</div><!-- s-left -->
							</div><!-- sided-80x -->
							<?php $counter++ ; ?>		
						@endif
						@endforeach

					</div><!--pr-10 -->
				</div><!-- col-sm-4 -->

				<div class="col-lg-2 col-md-4 col-sm-4">	
						<h5 class="f-title"><b>Contact us</b></h5>
						<ul class="mb-30 list-hover list-block list-a-ptb-5">
							<li><b>फ़ोन: </b>9041601115</li>
							<li><b>पता: </b>Lorem Ipsum मातम AMET बैठते हैं, consectetur adipiscing elit। चैट रियल एस्टेट डेवलपरों Mauris</li>
							
						</ul>
					</div><!-- col-sm-2 -->
				
			</div><!-- row -->
			
			<div class="mt-20 brdr-ash-1 opacty-4"></div>
			
			<div class="text-center ptb-30">
				<div class="row">
					<div class="col-sm-3">
						<a class="mtb-10 logofooter" href="#"><img src="{{ url('images/frontend/images/logo-black.png" alt=""></a>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-5">
							<p class="text-md-center font-9 pt-5 mtb-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy; <script>document.write(new Date().getFullYear());</script> | All rights reserved </a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-4">
						<ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-rss"></i></a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
			</div><!-- text-center -->
		</div><!-- container -->
    </footer><!-- footer end -->