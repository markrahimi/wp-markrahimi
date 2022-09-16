<?php /* Template Name: _رزومه_ */ 

get_header();
?>

	<main id="primary" class="site-main">
		
		
	    <!-- Resume Hero Begin -->
		
			<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="breadcrumb__text">
							<?php
								the_title( '<h2 class="page-title">', '</h2>' ); ?>
								<?php the_breadcrumb(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
        <!-- Resume Hero End -->
        
        
			
        <!-- Blog Details Section Begin -->
    <div class="blog-details spad py-4">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            
                            <?php
                        		the_content(
                        			sprintf(
                        				wp_kses(
                        					/* translators: %s: Name of current post. Only visible to screen readers */
                        					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'markrahimi' ),
                        					array(
                        						'span' => array(
                        							'class' => array(),
                        						),
                        					)
                        				),
                        				wp_kses_post( get_the_title() )
                        			)
                        		);
                        		
                        		?>
                        </div>
					</div>
				</div>
			</div>
		</div>
		</div>
	 <!-- resueme To Action Section Begin -->
     <section class="resume latest spad py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>رزومه </h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="box-skills">
                        <h3>زمینه فعالیت</h3>
                        <div class="row">
                            <div class="col-lg-6">
								<?php
									if( have_rows('specialties') ):
								?>
                                <div class="skill-box resume-box">
                                    <h4><i class="fa fa-sitemap"></i> تخصص ها</h4>
									<?php 
										while( have_rows('specialties') ) : the_row();
									?>
									
									<div class="item_resume text-center mb-3">
                                        <h6>
                                           <?php echo get_sub_field('specialty_title_item'); ?>
                                        </h6>
                                        <div class="progress" style="height: 9px;margin: 8px auto;border: 0.09rem solid #fff;">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo get_sub_field('specialty_mastery_item'); ?>%;" aria-valuenow="<?php echo get_sub_field('specialty_mastery_item'); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                    </div>
									
									<?php
										endwhile;
									?>

                                </div>
								
								<?php endif; ?>
								
                            </div>
                            <div class="col-lg-6">
								<?php
									if( have_rows('knowledges') ):
								?>
                                	<div class="knowledge-box resume-box">
                                    
                                    <h4><i class="fa fa-list-ul"></i> دانش ها</h4>

									<?php 
										while( have_rows('knowledges') ) : the_row();
									?>
                                    <div class="item_resume">
                                        <h6>
                                            <i class="fa fa-check"></i>
                                            <?php echo get_sub_field('knowledge_title_item'); ?>
                                        </h6>
                                    </div>
									<?php
										endwhile;
									?>
										</div>  
									<?php endif; ?>
								
								<?php
									if( have_rows('languages') ):
								?>
                                <div class="language-box resume-box">
                                    <h4><i class="fa fa-flag"></i> زبان ها</h4>
									<?php 
										while( have_rows('languages') ) : the_row();
									?>
                                    <div class="item_resume">
                                        <h6 class="mb-1">
                                            <?php echo get_sub_field('language_title_item'); ?>
                                        </h6>

									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum >= 0){ echo ' '; }else{ echo '-o' ;} ?>"></i>
									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum >= 15){ echo ' ' ;}else{ echo '-o' ;} ?>"></i>
									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum >= 30){ echo ' ' ;}else{ echo '-o' ;} ?>"></i>
									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum >= 50){ echo ' ' ;}else{ echo '-o' ;} ?>"></i>
									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum >= 70){ echo ' ' ;}else{ echo '-o' ;} ?>"></i>
									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum > 90){ echo ' ' ;}else{ echo '-o' ;} ?>"></i>
									<i class="fa fa-circle<?php $itemnum = get_sub_field('language_mastery_item');  if($itemnum ==100){ echo ' ' ;}else{ echo '-o' ;}; ?>"></i>
                                   
									</div>

									<?php
										endwhile;
									?>
										</div>  
									<?php endif; ?>
								
								
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-resume">
                        <h3>سابقه فعالیت</h3>
                        <div class="row">
                            <div class="col-lg-6">
								<?php
									if( have_rows('experiences') ):
								?>
                                <div class="experience-box resume-box">
                                    <h4><i class="fa fa-briefcase"></i> فعالیت کاری</h4>
									
									<?php 
										while( have_rows('experiences') ) : the_row();
									?>
                                    <div class="item_resume">
                                        <span class="time-resume"><?php echo get_sub_field('experience_time_item'); ?></span>
                                        <h6>
                                            <?php echo get_sub_field('experience_title_item'); ?>  
                                        </h6>
                                        <p class="company_resume"><?php echo get_sub_field('experience_co_item'); ?></p>
                                        <p class="detail_resume">
                                            <?php echo get_sub_field('experience_detail_item'); ?>
                                        </p>
                                    </div>
                                   <?php
										endwhile;
									?>
									
                                </div>
								<?php endif; ?>
                            </div>

							<div class="col-lg-6">
								<?php
									if( have_rows('educations') ):
								?>
                                <div class="experience-box resume-box">
                                    <h4><i class="fa fa-briefcase"></i> فعالیت آموزشی</h4>
									
									<?php 
										while( have_rows('educations') ) : the_row();
									?>
                                    <div class="item_resume">
                                        <span class="time-resume"><?php echo get_sub_field('education_time_item'); ?></span>
                                        <h6>
                                            <?php echo get_sub_field('education_title_item'); ?>  
                                        </h6>
                                        <p class="company_resume"><?php echo get_sub_field('education_academy_item'); ?></p>
                                        <p class="detail_resume">
                                            <?php echo get_sub_field('education_detail_item'); ?>
                                        </p>
                                    </div>
                                   <?php
										endwhile;
									?>
									
                                </div>
								<?php endif; ?>
                            </div>
							
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- resueme Details Section End -->
    
    


	</main><!-- #main -->

<?php
get_footer();
?>