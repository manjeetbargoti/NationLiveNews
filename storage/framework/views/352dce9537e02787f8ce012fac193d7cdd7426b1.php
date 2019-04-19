<?php $__env->startSection('content'); ?>

<!-- START OF MAIN SLIDER -->
<section class="pt-0 pb-xs-20">
		<div class="container">
			<div class="row  ptb-10">
				<div class="col-md-8 col-lg-9">
					<a class="btn-fill-red plr-10 mtb-10 btn-b-md" href="#"><b>BREAKING NEWS</b></a>
					<a class="dplay-inl-block color-grey mtb-10 ml-15 ml-md-0 hover-grey" href="#">8:30 AM Eight People 
						have died and violent protest involving tens of thousands...</a>
				</div><!-- col-md-8 -->
				<div class="col-md-4 col-lg-3">
					<form class="abs-form mtb-10" action="<?php echo e(url('/blog')); ?>" method="get">
						<input type="text" placeholder="Search" name="search">
						<button type="submit"><i class="ion-ios-search"></i></button>
					</form>
				</div><!-- col-md-4 -->
			</div><!-- row -->
			<!-- wrapper -->
		</div><!-- container -->
	</section>
	<!-- END OF MAIN SLIDER -->
	

	<section class="ptb-30">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
                    <?php $__currentLoopData = $pcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="ptb-0">
						<a class="mt-10" href="<?php echo e(url('/')); ?>"><i class="mr-5 ion-ios-home"></i><b>HOME</b></a>
                        
						<a class="mt-10 color-ash" href="#"><i class="mlr-10 ion-chevron-right"></i><b><?php echo e($postcat->category_name); ?></b></a>
                        
						<h1 class="mtb-20"><b><?php echo e($postcat->category_name); ?></b></h1>
						<p class="mb-30"><?php echo e($postcat->description); ?></p>
					</div>
					<?php if($postcat->category_url == 'cricket'): ?>
					<div class="p-30 mb-30 card-view">
					<iframe class="ipl" src="https://www.cricket-score.club/embed/live" style="width:100%;height:40em;min-width: 300px;" frameborder="0"  scrolling="yes" sandbox="allow-scripts"></iframe>
					</div>
					<?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					
                    <?php $counter = 0; ?>
					<?php $__currentLoopData = $categorypost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $counter ++; ?>
					<?php if( $counter <= 8): ?>
					<div class="mb-30 sided-250x s-lg-height card-view">
						<div class="s-left">
							<img src="<?php echo e(url( asset('/images/backend_images/post_images/large/'.$post->post_image) )); ?>" alt="<?php echo e($post->post_title); ?>">
						</div><!-- left-area -->
						<div class="s-right ptb-30 pt-sm-20 pb-xs-5 plr-30 plr-xs-0">
							<h4><a href="<?php echo e(url('/news/'.$post->post_url)); ?>"><?php echo e($post->post_title); ?></a></h4>
							<ul class="mtb-10 list-li-mr-20 color-lite-black">
								<li><i class="mr-5 font-12 ion-clock"></i><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></li>
								<li><i class="mr-5 font-12 ion-android-person"></i><?php echo e($post->auth_name); ?></li>
								<!-- <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
								<li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
							</ul>
							<p class="mt-10"><?php echo str_limit($post->post_content, $limit=150); ?></p>
						</div><!-- right-area -->
					</div><!-- sided-250x -->
					<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php echo e($categorypost->render()); ?>

					
				</div><!-- col-sm-8 -->
				
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR LATEST NEWS -->
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>LATEST NEWS</b></h4>
						<?php $counter = 0; ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $counter ++; ?>
                        <?php if( $counter <= 8): ?>
						<div class="sided-80x mb-20">
							<div class="s-left">
								<img src="<?php echo e(url( asset('/images/backend_images/post_images/large/'.$post->post_image) )); ?>" alt="<?php echo e($post->post_title); ?>">
							</div><!-- s-left -->
							
							<div class="s-right">
								<h5><a href="<?php echo e(url('/news/'.$post->post_url)); ?>">
									<b><?php echo e(str_limit($post->post_title, $limit=80)); ?></b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i><?php echo e(date('M d, Y', strtotime($post->created_at))); ?></li>
									<!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!-- card-view -->
					<!-- END OF SIDEBAR LATEST NEWS -->
					
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayouts.frontend_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/laiz37yervyw/resources/views/layouts/category_post.blade.php */ ?>