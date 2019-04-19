<?php $__env->startSection('content'); ?>

<!-- START OF MAIN SLIDER -->
<section class="pt-0 pb-0">
		<div class="container ptb-10">
			<div class="row">
				<div class="col-md-8 col-lg-8">
					<div class="latestnews_strip">
						<div class="title_latest">
							<a class="btn-fill-red plr-10 mtb-10 btn-b-md" href="#"><b>ताज़ा खबर</b></a>
						</div>
						<div class="latestnews owl-carousel owl-theme pt-15">
							<div>
								<a class="dplay-inl-block" href="#">
									कांग्रेस का दावा- पेमा खांडू के काफिले से मिली नकदी, जारी किया वीडियो
								</a>
							</div>
							
							<div>
								<a class="dplay-inl-block" href="#">
									मिशन शक्ति पर सवाल उठाने वाले पाकिस्तान और NASA को ISRO का करारा जवाब
								</a>
							</div>
							
							<div>
								<a class="dplay-inl-block " href="#">
									तेजप्रताप के तेवर से गुस्से में लालू, बड़े बेटे से बात नहीं करना चाहते राजद सुप्रीमो!
								</a>
							</div>
							
							<div>
								<a class="dplay-inl-block " href="#">
									कांग्रेस का वादा, शिक्षा पर जीडीपी का 6% करेगी खर्च, जानें इस वक्त क्या हैं हालात...
								</a>
							</div>								
						</div>
					</div>
				</div><!-- col-md-8 -->
				<div class="col-md-4 col-lg-4">
					<form class="abs-form mtb-10" action="<?php echo e(url('/blog')); ?>" method="get">
						<input type="text" placeholder="Search" name="search">
						<button type="submit"><i class="ion-ios-search"></i></button>
					</form>
				</div><!-- col-md-4 -->
			</div><!-- row -->
		</div><!-- container -->
		
		
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div id="cflow"></div>
				</div>
				<div class="col-xl-4">
					<div class="mb-0 p-10 card-view bg-dark-primary color-white">
						<h4 class="p-title"><b>Top News</b></h4>
						<div class="scrolly">
						<?php $counter = 0; ?>
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($post->feature_post == 1): ?>
						<?php $counter ++; ?>
						<?php if( $counter <= 10): ?>
						<div class="sided-80x mb-20">
							<div class="s-left">
								<img src="<?php echo e(url( asset('/images/backend_images/post_images/large/'.$post->post_image) )); ?>" alt="">
							</div><!-- s-left -->
							<div class="s-right">
								<h5><a href="<?php echo e(url('/news/'.$post->post_url)); ?>">
									<b><?php echo str_limit($post->post_title, $limit= 50); ?></b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock color-white"></i><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						<?php endif; ?>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
								<?php $counter = 0; ?>
								<?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php $counter ++; ?>
								<?php if( $counter <= 1 ): ?>
									<h4 class="p-title"><b>उत्तर प्रदेश</b></h4>
									<img src="<?php echo e(url( asset('/images/backend_images/post_images/large/'.$upn->post_image) )); ?>" alt="">
									<h4 class="mt-30">
										<a href="<?php echo e(url('/news/'.$upn->post_url)); ?>">
											<b><?php echo str_limit( $upn->post_title, $limit=50 ); ?></b>
										</a>
									</h4>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
								
								<?php  $counter = 0; ?>
								<?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($loop->first): ?> <?php continue; ?> <?php endif; ?>
								<?php $counter ++; ?>
								<?php if($upn->state == 1584): ?>
								<?php if( $counter <= 4): ?>	
									<ul class="box_list">
										<li>
											<a href="<?php echo e(url('/news/'.$upn->post_url)); ?>"><?php echo str_limit($upn->post_title, $limit=100); ?></a>
										</li>
									</ul>
								<?php endif; ?>	
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
							</div><!-- p-30 card-view -->
						</div><!-- col-sm-6 -->
						<!-- END OF State News Section -->
						
						<!-- START OF State News Section -->
						<div class="col-sm-12 col-md-6">
							<div class="p-15 card-view mb-30">
								<?php $counter = 0; ?>
								<?php $__currentLoopData = $uk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ukn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php $counter ++; ?>
								<?php if( $counter <= 1 ): ?>
									<h4 class="p-title"><b>उत्तराखंड</b></h4>
									<img src="<?php echo e(url( asset('/images/backend_images/post_images/large/'.$ukn->post_image) )); ?>" alt="">
									<h4 class="mt-30">
										<a href="<?php echo e(url('/news/'.$ukn->post_url)); ?>">
											<b><?php echo str_limit( $ukn->post_title, $limit=50 ); ?></b>
										</a>
									</h4>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
								
								<?php  $counter = 0; ?>
								<?php $__currentLoopData = $uk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ukn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($loop->first): ?> <?php continue; ?> <?php endif; ?>
								<?php $counter ++; ?>
								<?php if($ukn->state == 1585): ?>
								<?php if( $counter <= 4): ?>	
									<ul class="box_list">
										<li>
											<a href="<?php echo e(url('/news/'.$ukn->post_url)); ?>"><?php echo str_limit($ukn->post_title, $limit=100); ?></a>
										</li>
									</ul>
								<?php endif; ?>	
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
							</div><!-- p-30 card-view -->
						</div><!-- col-sm-6 -->
						<!-- END OF State News Section -->
					</div><!-- row -->
				</div><!-- col-sm-8 -->
				<div class="col-md-12 col-lg-4">	
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>LATEST NEWS</b></h4>
						<?php $counter = 0; ?>
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $counter ++; ?>
						<?php if( $counter <= 4): ?>
						<div class="sided-80x mb-20">
							<div class="s-left">
								<img src="<?php echo e(asset('/images/backend_images/post_images/large/'.$post->post_image)); ?>" alt="<?php echo e($post->post_title); ?>">
							</div><!-- s-left -->
							
							<div class="s-right">
								<h5><a href="<?php echo e(url('/news/'.$post->post_url)); ?>">
									<b><?php echo e($post->post_title); ?></b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!-- card-view -->
					
				</div><!-- col-sm-4 -->
				<div class="col-md-12 col-lg-8">
					<?php $counter = 0; ?>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $counter ++; ?>
					<?php if( $counter <= 1): ?>
					<div class="mb-30 p-15 ptb-sm-25 plr-sm-15 card-view">
						<h4 class="p-title"><b>आज की तारीख में</b></h4>
						<div class="images_sec">
						<img src="<?php echo e(url( asset('/images/backend_images/post_images/large/'.$post->post_image) )); ?>" alt="">
						</div>
						<h3 class="mt-30"><a href="<?php echo e(url('/news/'.$post->post_url)); ?>"><?php echo e($post->post_title); ?></a></h3>
						<ul class="mtb-10 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></li>
							<li><i class="mr-5 font-12 ion-ios-pricetags"></i><?php echo e($post->cat_name); ?></li>
							<li><i class="mr-5 font-12 ion-android-person"></i><?php echo e($post->auth_name); ?></li>
							<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li> -->
							<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
						</ul>
						<p><?php echo str_limit($post->post_content, $limit=200); ?></p>
					</div><!-- bg-white -->
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</div><!-- col-sm-8 -->

				<div class="col-md-4">
					
				<?php $counter = 0; ?>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($loop->first): ?> <?php continue; ?> <?php endif; ?>
					<?php $counter ++; ?>
					<?php if( $counter <= 4): ?>
					<div class="card-view p-3 mb-30">
					<div class="sided-80x">
						<div class="s-left">
							<img src="<?php echo e(asset('/images/backend_images/post_images/large/'.$post->post_image)); ?>" alt="<?php echo e($post->post_title); ?>">
						</div><!-- left-area -->
						<div class="s-right">
							<h5><a href="<?php echo e(url('/news/'.$post->post_url)); ?>"><?php echo str_limit($post->post_title, $limit=80); ?></a></h5>
						</div><!-- right-area -->
						<ul class="list-li-mr-20 color-lite-black">
								<li class="mr-1"><i class="mr-2 font-12 ion-ios-calendar-outline"></i><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></li>
								<li class="mr-1"><i class="mr-2 font-12 ion-ios-pricetags"></i><?php echo e($post->cat_name); ?></li>
								<li class="mr-1"><i class="mr-2 font-12 ion-android-person"></i><?php echo e($post->auth_name); ?></li>
							</ul>
					</div><!-- sided-250x -->
					</div>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
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
					<div class="item">
					<div class="video_box">
						<a class="hover-grey dplay-block" href="#">
							<div class="pos-relative"><img src="<?php echo e(url('images/frontend/images/video-1-300x300.jpg')); ?>" alt="">
								<div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div>
							</div>
					
							<h5 class="mt-15"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व इंग्लैंड छोड़ देता है</b></h5></a>
						<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>25 जनवरी 2018</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!-- col-md-3 -->
					</div>

					<div class="item">
					<div class="video_box">
						<a class="hover-grey dplay-block" href="#">
							<div class="pos-relative"><img src="<?php echo e(url('images/frontend/images/video-1-300x300.jpg')); ?>" alt="">
								<div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div>
							</div>
					
							<h5 class="mt-15"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व इंग्लैंड छोड़ देता है</b></h5></a>
						<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>25 जनवरी 2018</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!-- col-md-3 -->
					</div>

					<div class="item">
					<div class="video_box">
						<a class="hover-grey dplay-block" href="#">
							<div class="pos-relative"><img src="<?php echo e(url('images/frontend/images/video-1-300x300.jpg')); ?>" alt="">
								<div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div>
							</div>
					
							<h5 class="mt-15"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व इंग्लैंड छोड़ देता है</b></h5></a>
						<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>25 जनवरी 2018</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!-- col-md-3 -->
					</div>

					<div class="item">
					<div class="video_box">
						<a class="hover-grey dplay-block" href="#">
							<div class="pos-relative"><img src="<?php echo e(url('images/frontend/images/video-1-300x300.jpg')); ?>" alt="">
								<div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div>
							</div>
					
							<h5 class="mt-15"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व इंग्लैंड छोड़ देता है</b></h5></a>
						<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>25 जनवरी 2018</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!-- col-md-3 -->
					</div>

					<div class="item">
					<div class="video_box">
						<a class="hover-grey dplay-block" href="#">
							<div class="pos-relative"><img src="<?php echo e(url('images/frontend/images/video-1-300x300.jpg')); ?>" alt="">
								<div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div>
							</div>
					
							<h5 class="mt-15"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व इंग्लैंड छोड़ देता है</b></h5></a>
						<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>25 जनवरी 2018</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!-- col-md-3 -->
					</div>

					<div class="item">
					<div class="video_box">
						<a class="hover-grey dplay-block" href="#">
							<div class="pos-relative"><img src="<?php echo e(url('images/frontend/images/video-1-300x300.jpg')); ?>" alt="">
								<div class="hover-video"><span class="icon"><i class="ion-play"></i></span></div>
							</div>
					
							<h5 class="mt-15"><b>डैन कार्टर ने वर्षों तक रोल किया जबकि प्रो प्रभुत्व इंग्लैंड छोड़ देता है</b></h5></a>
						<ul class="mt-5 mb-30 list-li-mr-20 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock"></i>25 जनवरी 2018</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
					</div><!-- col-md-3 -->
					</div>
					
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
						<?php $counter = 0; ?>
						<?php $__currentLoopData = $ent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $counter ++; ?>
						<?php if( $counter <= 1): ?>
						<img src="<?php echo e(asset('/images/backend_images/post_images/large/'.$ente->post_image)); ?>" alt="">
						<h4 class="mt-15"><a href="#">
							<b><?php echo e($ente->post_title); ?></b></a></h4>
						<ul class="mtb-10 list-li-mr-5 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i><?php echo e(date('M d, Y', strtotime($ente->created_at))); ?></li>
							
							<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
							<?php $__currentLoopData = $ent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($loop->first): ?> <?php continue; ?> <?php endif; ?>
							<?php $counter ++; ?>
							<?php if( $counter <= 5): ?>
							<ul class="box_list">
								<li>
									<a href="<?php echo e(url('/news/'.$post->post_url)); ?>"><?php echo e($ente->post_title); ?></a>
								</li>
							</ul>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<!-- END OF SIDEBAR MOST READ -->
				</div><!-- col-sm-4 -->
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>मोबाइल-टेक</b></h4>
						<?php $counter = 0; ?>
						<?php $__currentLoopData = $tech; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $counter ++; ?>
						<?php if( $counter <= 1): ?>
						<img src="<?php echo e(asset('/images/backend_images/post_images/large/'.$tec->post_image)); ?>" alt="">
						<h4 class="mt-15"><a href="#">
							<b><?php echo e($tec->post_title); ?></b></a></h4>
						<ul class="mtb-10 list-li-mr-5 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i><?php echo e(date('M d, Y', strtotime($tec->created_at))); ?></li>
							
							<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
						    <?php $counter = 0; ?>
							<?php $__currentLoopData = $tech; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($loop->first): ?> <?php continue; ?> <?php endif; ?>
							<?php $counter ++; ?>
							<?php if( $counter <= 5): ?>
							<ul class="box_list">
								<li>
									<a href="<?php echo e(url('/news/'.$tec->post_url)); ?>"><?php echo e($tec->post_title); ?></a>
								</li>
							</ul>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<!-- END OF SIDEBAR MOST READ -->	
				</div><!-- col-sm-4 -->
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-15 card-view">
						<h4 class="p-title"><b>क्राइम</b></h4>
						<?php $counter = 0; ?>
						<?php $__currentLoopData = $crime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crimes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $counter ++; ?>
						<?php if( $counter <= 1): ?>
						<img src="<?php echo e(asset('/images/backend_images/post_images/large/'.$crimes->post_image)); ?>" alt="">
						<h4 class="mt-15"><a href="#">
							<b><?php echo e($crimes->post_title); ?></b></a></h4>
						<ul class="mtb-10 list-li-mr-5 color-lite-black">
							<li><i class="mr-5 font-12 ion-ios-calendar-outline"></i><?php echo e(date('M d, Y', strtotime($crimes->created_at))); ?></li>
							
							<li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
							<li><i class="mr-5 font-12 ion-eye"></i>105</li>
						</ul>
							<?php $__currentLoopData = $crime; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crimes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($loop->first): ?> <?php continue; ?> <?php endif; ?>
							<?php $counter ++; ?>
							<?php if( $counter <= 5): ?>
							<ul class="box_list">
								<li>
									<a href="<?php echo e(url('/news/'.$crimes->post_url)); ?>"><?php echo e($crimes->post_title); ?></a>
								</li>
							</ul>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<!-- END OF SIDEBAR MOST READ -->	
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayouts.frontend_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* D:\Laravel\NationLive\resources\views/home.blade.php */ ?>