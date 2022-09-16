<?php get_header(); ?>


    <!-- Hero Section Begin -->
    <section class="hero">
		  <?php
        $args = array(  
          'post_type' => 'slider',
          );
          
        $loop = new WP_Query($args);
        if ($loop->have_posts()){  
        while ($loop->have_posts()) : $loop->the_post(); ?>
		
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="<?php the_post_thumbnail_url('post-image'); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                
								<?php if( get_field('sub_title') ): ?>
									<span><?php the_field('sub_title'); ?></span>	
								<?php endif; ?>
                                <h2><?php the_title() ?></h2>
								<?php if( get_field('text-btn') ): ?>
                                	<a href="<?php the_field('link_btn'); ?>" class="primary-btn"><?php the_field('text-btn'); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <?php endwhile;  ?>

        <?php }
        
        else{
			?>
		
		  <h2 style="margin:60px auto;color:#fff; text-align:center;"> از پیشخوان، اسلاید جدید اضافه کنید </h2>
			 <?php
			}
			wp_reset_postdata(); 
			?>
		
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>
							<?php echo get_theme_mod( 'service_subtitle', 'خدماتی که ارائه میدهم' ); ?>
							</span>
                            <h2>
								<?php echo get_theme_mod( 'service_title', 'من چه کار هایی میکنم؟' )?>
							</h2>
                        </div>
                        <p>
							<?php echo get_theme_mod( 'service_description', 'من چه کار هایی میکنم؟' )?>
						</p>
                        <a href="<?php echo get_theme_mod( 'service_more_link', 'دیگر چه کار هایی میکنم؟') ?>" class="primary-btn">
							<?php echo get_theme_mod( 'service_btn', 'دیگر چه کار هایی میکنم؟') ?>
						</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
						
						 <?php
						$args = array(  
						  'post_type' => 'service',
						  'posts_per_page' => 4,
						  'tax_query'      => array(
                                array(
                                    'taxonomy'  => 'post_tag',
                                    'field'     => 'slug',
                                    'terms'     => sanitize_title('pin')
                                )
                            )
						  );

						$loop = new WP_Query($args);
						if ($loop->have_posts()){  
						while ($loop->have_posts()) : $loop->the_post(); ?>
						
						
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                                </div>
                                <h4><?php the_title() ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
						
						 <?php endwhile;  ?>

						<?php }

						else{
							?>

						  <h3 style="margin:60px auto;color:#fff; text-align:center;"> از پیشخوان، خدمات جدید اضافه کنید و فقط خدمات با برچسب pin در این قسمت نمایش داده میشود  </h3>
							 <?php
							}
							wp_reset_postdata(); 
							?>
						
						

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio1', 'portfolio1' ) , 'large' ); ?>">
                <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio1', 'portfolio1' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
                <!--<div class="work__item__hover">
                     <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div> -->
            </div>
            <div class="work__item small__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio2', 'portfolio2' ) , 'large' ); ?>">
                   <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio2', 'portfolio2' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio3', 'portfolio3' ) , 'large' ); ?>">
                   <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio3', 'portfolio3' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
            </div>
            <div class="work__item large__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio4', 'portfolio4' ) , 'large' ); ?>">
                   <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio4', 'portfolio4' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
<!--                 <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div> -->
            </div>
            <div class="work__item small__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio5', 'portfolio5' ) , 'large' ); ?>">
                   <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio5', 'portfolio5' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio6', 'portfolio6' ) , 'large' ); ?>">
                   <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio6', 'portfolio6' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(get_theme_mod( 'portfolio7', 'portfolio7' ) , 'large' ); ?>">
                   <a href="<?php  echo get_permalink(get_theme_mod( 'portfolio7', 'portfolio7' ) ); ?> " class="play-btn"><i
                        class="fa fa-link"></i></a>
<!--                 <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Work Section End -->

        <!-- Latest Blog Section Begin -->
        <section class="latest spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title center-title">
                            <span><?php echo get_theme_mod( 'blog_subtitle', 'آخرین نوشته های من' )?></span>
                            <h2><?php echo get_theme_mod( 'blog_title', 'وبلاگ' )?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="latest__slider owl-carousel">
						
						<?php
						$args = array(  
						  'posts_per_page' => 7,
						  );

						$loop = new WP_Query($args);
						if ($loop->have_posts()){  
						while ($loop->have_posts()) : $loop->the_post(); 
						?>
						
                        <div class="col-lg-4">
                            <div class="blog__item latest__item" >
								<h4><?php the_title() ?></h4>
                                <ul>
                                    <li><?php echo get_the_date() ?></li>
<!--                                     <li>05 Comment</li> -->
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>">ادامه مطلب <span class="arrow_right"></span></a>
                            </div>
                        </div>
						
						<?php 
							endwhile; 
						 	}
						?>
						

						
						
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Blog Section End -->
    
    <!-- Team Section Begin -->
	<?php
	$args = array(  
		 'post_type' => 'team',
		 'posts_per_page' => 4,
	);

	$loop = new WP_Query($args);
	$count_team =  $loop->found_posts;
	if ($loop->have_posts()){  
		if($count_team == 1){
			?>
			<section class="team spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <h2> درباره من</h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php while ($loop->have_posts()) : $loop->the_post();  ?>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="<?php the_post_thumbnail_url('medium'); ?>">
                        <div class="team__item__text">

                            <h4><?php the_field('name'); ?></h4>
                            <p><?php the_field('specialty'); ?></p>
                            <div class="team__item__social">
								<?php if( get_field('website') ): ?>
                                	<a href="<?php the_field('website'); ?>"><i class="fa fa-url"></i></a>
								<?php endif; ?>
								<?php if( get_field('instagram') ): ?>
                                	<a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
								<?php endif; ?>
								<?php if( get_field('facebook') ): ?>
                                	<a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
								<?php endif; ?>
								<?php if( get_field('twitter') ): ?>
                                	<a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a>
								<?php endif; ?>
								<?php if( get_field('github') ): ?>
                                	<a href="<?php the_field('github'); ?>"><i class="fa fa-github"></i></a>
								<?php endif; ?>
								<?php if( get_field('dribbble') ): ?>
                                	<a href="<?php the_field('dribbble'); ?>"><i class="fa fa-dribbble"></i></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-9 col-md-6 col-sm-6 p-4 bg-blur">
					<?php if( get_field('bio') ): ?>
						<?php the_field('bio'); ?>
					<?php endif; ?>
				</div>
				
				<?php 
					endwhile; 
				?>
				
                

                <div class="col-lg-12 p-0">
                    <div class="team__btn">
						<a href="<?php echo get_theme_mod( 'resume_link', '#' ) ?>" class="primary-btn"> مشاهده رزمه </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
			
			
			
			<?php
		}else{
	?>
    <section class="team spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>با تیم ما آشنا شوید...</span>
                        <h2>اعضا تیم ما</h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php while ($loop->have_posts()) : $loop->the_post();  ?>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="<?php the_post_thumbnail_url('medium'); ?>">
                        <div class="team__item__text">

                            <h4><?php the_field('name'); ?></h4>
                            <p><?php the_field('specialty'); ?></p>
                            <div class="team__item__social">
								<?php if( get_field('website') ): ?>
                                	<a href="<?php the_field('website'); ?>"><i class="fa fa-url"></i></a>
								<?php endif; ?>
								<?php if( get_field('instagram') ): ?>
                                	<a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
								<?php endif; ?>
								<?php if( get_field('facebook') ): ?>
                                	<a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
								<?php endif; ?>
								<?php if( get_field('twitter') ): ?>
                                	<a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a>
								<?php endif; ?>
								<?php if( get_field('github') ): ?>
                                	<a href="<?php the_field('github'); ?>"><i class="fa fa-github"></i></a>
								<?php endif; ?>
								<?php if( get_field('dribbble') ): ?>
                                	<a href="<?php the_field('dribbble'); ?>"><i class="fa fa-dribbble"></i></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
				<?php 
					endwhile; 
				?>
                

                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">تمام اعضای تیم را بشناسید ...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php
		} 
		}
		?>
    <!-- Team Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <i class="<?php echo get_theme_mod( 'counter_icon1', 'fa fa-check' )?>"></i>
                                <h2 class="counter_num"><?php echo get_theme_mod( 'counter_count1', '107' )?></h2>
                                <p>
									<?php echo get_theme_mod( 'counter_title1', 'پروژه های انجام شده' )?>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <i class="<?php echo get_theme_mod( 'counter_icon2', 'fa fa-check' )?>"></i>
                                <h2 class="counter_num"><?php echo get_theme_mod( 'counter_count2', '107' )?></h2>
                                <p>
									<?php echo get_theme_mod( 'counter_title2', 'پروژه های انجام شده' )?>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                              <i class="<?php echo get_theme_mod( 'counter_icon3', 'fa fa-check' )?>"></i>
                                <h2 class="counter_num"><?php echo get_theme_mod( 'counter_count3', '107' )?></h2>
                                <p>
									<?php echo get_theme_mod( 'counter_title3', 'پروژه های انجام شده' )?>
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                               <i class="<?php echo get_theme_mod( 'counter_icon4', 'fa fa-check' )?>"></i>
                                <h2 class="counter_num"><?php echo get_theme_mod( 'counter_count4', '107' )?></h2>
                                <p>
									<?php echo get_theme_mod( 'counter_title4', 'پروژه های انجام شده' )?>
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->



	<?php
	$args = array(  
		 'post_type' => 'podcast',
		 'posts_per_page' => 4,
	);

	$loop = new WP_Query($args);
	$count_team =  $loop->found_posts;
	if ($loop->have_posts()){  
			?>


    <!-- Call To Action Section Begin -->
    <section class="radio callto spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/bg-sec.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="callto__text text-center radio__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/RADIOBUG1.png" alt="radioGIG">
                        <h2>
							<?php echo get_theme_mod( 'podcast_title', 'رادیو باگ') ?>
						</h2>
                        <p>
							<?php echo get_theme_mod( 'podcast_des', 'رادیو باگ' )?>
						</p>
<!--                         <a href="#">Start your stories</a> -->
                    </div>
                </div>
				 <div class="col-lg-8 col-md-6 col-12">
					<div class="radiobox">
					
					 <ul class="radiobox-lits">
						 <h1 class="text-center font-20">
							 <?php echo get_theme_mod( 'podcast_subtitle', 'رادیو باگ') ?>
						</h1>
						 <?php
							while ($loop->have_posts()) : $loop->the_post(); 
						?>
						  <li>
						 		<div class="row ltr">
									<div class="col-md-8 col-12 ">
										<audio class="wp-audio-shortcode" id="audio-16849-1" preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="<?php the_field('link'); ?>">

										 <a href="<?php the_field('link'); ?>" data-wpel-link="internal"><?php the_field('link'); ?></a>

									 </audio>
									</div>
									
									<div class="col-md-1 col-3">
										<div class="icon-box text-center">
											<a href="<?php the_field('link'); ?>"><i class="fa fa-download"></i></a>
										</div>
									</div>
									
									
										<?php if( get_field('castbox') ): ?>
									<div class="col-md-1 col-3">
										<div class="icon-box text-center">
											<a href="<?php the_field('castbox'); ?>">
											<i> <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Castbox</title><path d="M12 0c-.29 0-.58.068-.812.206L2.417 5.392c-.46.272-.804.875-.804 1.408v10.4c0 .533.344 1.135.804 1.407l8.77 5.187c.465.275 1.162.275 1.626 0l8.77-5.187c.46-.272.804-.874.804-1.407V6.8c0-.533-.344-1.136-.804-1.408L12.813.206A1.618 1.618 0 0012 0zm-.85 8.304c.394 0 .714.303.714.676v2.224c0 .207.191.375.427.375s.428-.168.428-.375V9.57c0-.373.32-.675.713-.675.394 0 .712.302.712.675v4.713c0 .374-.318.676-.712.676-.394 0-.713-.302-.713-.676v-1.31c0-.206-.192-.374-.428-.374s-.427.168-.427.374v1.226c0 .374-.32.676-.713.676-.394 0-.713-.302-.713-.676v-1.667c0-.207-.192-.375-.428-.375-.235 0-.427.168-.427.375v3.31c0 .373-.319.676-.712.676-.394 0-.713-.303-.713-.676v-2.427c0-.206-.191-.374-.428-.374-.235 0-.427.168-.427.374v.178a.71.71 0 01-.712.708.71.71 0 01-.713-.708v-2.123a.71.71 0 01.713-.708.71.71 0 01.712.708v.178c0 .206.192.373.427.373.237 0 .428-.167.428-.373v-1.53c0-.374.32-.676.713-.676.393 0 .712.303.712.676v.646c0 .206.192.374.427.374.236 0 .428-.168.428-.374V8.98c0-.373.319-.676.713-.676zm4.562 2.416c.393 0 .713.302.713.676v2.691c0 .374-.32.676-.713.676-.394 0-.712-.303-.712-.676v-2.691c0-.374.319-.676.712-.676zm2.28 1.368c.395 0 .713.303.713.676v.67c0 .374-.318.676-.712.676-.394 0-.713-.302-.713-.675v-.67c0-.374.32-.677.713-.677Z"/></svg></i>
											</a>
										</div>
									</div>
									
									<?php endif; ?>
									
									<?php if( get_field('youtube') ): ?>
									<div class="col-md-1 col-3">
										<div class="icon-box text-center">
											<a href="<?php the_field('youtube'); ?>"><i class="fa fa-youtube"></i></a>
										</div>
									</div>
									<?php endif; ?>
									
									
									<?php if( get_field('soundcloud') ): ?>
									<div class="col-md-1 col-3">
										<div class="icon-box text-center">
											<a href="<?php the_field('soundcloud'); ?>"><i class="fa fa-soundcloud"></i></a>
										</div>
									</div>
									<?php endif; ?>
									
									
									
									<div class="col-md-12 col-12">
										<a href="<?php the_permalink(); ?>">
											<h3 class="text-center">
												
												 	<?php the_title() ?> 
												
											</h3>
										</a>
									</div>
									
									
							 	</div>
						 </li>
						 <?php 
					endwhile; 
				?>
						 
						
						 
						<div class="team__btn w-100 text-center">
							<a href="<?php echo get_theme_mod( 'podcast_more_link', '#' )?>" class="primary-btn">
									<?php echo get_theme_mod( 'podcast_btn', 'مشاهده تمام قسمت ها' )?> 
							</a>
						</div>
						 
					 </ul>
					 
					 
					 
					 </div>
				</div>
            </div>
        </div>
    </section>
 <?php 
								}
								?>
    <!-- Call To Action Section End -->


<?php get_footer(); ?>