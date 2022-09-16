<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package markrahimi
 */

get_header();
?>

	<main id="primary" class="site-main">
	    <!-- Blog Details Hero Begin -->
        <section class="blog-hero spad set-bg" data-setbg="<?php the_post_thumbnail_url('full'); ?>">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog__hero__text">
                            <?php
								the_title( '<h2>', '</h2>' );
								?>
								<?php the_breadcrumb(); ?>
                            <ul>
                                
                                <li><?php echo get_the_date() ?></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Hero End -->
        
        
    <?php
		while ( have_posts() ) :
			the_post(); ?>
			
        <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
				

<?php if(get_post_type() == 'podcast'){?>
				 <div class="col-lg-8 col-md-6 col-12">
					<div class="radiobox">
					
					 <ul class="radiobox-lits">
						 <h1 class="text-center font-20">
							 
						</h1>
						
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
										<h3 class="text-center">
											<?php the_title() ?> 
										</h3>
									</div>
									
									
							 	</div>
						 </li>
			 
						<div class="team__btn w-100 text-center">
							<a href="<?php echo get_theme_mod( 'podcast_more_link', '#' )?>" class="primary-btn">
									<?php echo get_theme_mod( 'podcast_btn', 'مشاهده تمام قسمت ها' )?> 
							</a>
						</div>
						 
					 </ul>
					 
					 
					 
					 </div>
				</div>
				<br>
<?php }; ?>
				
				
				
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
                        <div class="blog__details__tags">
                            <span><i class="fa fa-tag"></i> تگ:</span>
                            <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                              foreach($posttags as $tag) {
                                echo '<a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">' . __( $tag->name ) . '</a>' ; 
                              }
                            }
                            ?>
                            
                        </div>
                        
                        
                        <div class="blog__details__comment">
                            <h4> دیدگاه خودتان را بنویسید</h4>
                            <form action="#">
                                <?php
                                comment_form();
                                ?>
                            </form>
                        </div>

                        <div class="blog__details__recent">
                            <h4>پست های اخیر وبلاگ</h4>
                            <div class="row">
                                <?php
            						$args = array(  
            						  'posts_per_page' => 3,
            						  );
            
            						$loop = new WP_Query($args);
            						if ($loop->have_posts()){  
            						while ($loop->have_posts()) : $loop->the_post(); 
            						?>
						
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog__details__recent__item">
                                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                                        <a href="<?php the_permalink(); ?>">
                                            <h5><?php the_title() ?></h5>
                                        </a>
                                        <span><?php echo get_the_date() ?></span>
                                    </div>
                                </div>
                                
                                	<?php 
							endwhile; 
						 	}
						?>
						
                                
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
    
    

            <?php
            
//             if ( comments_open() || get_comments_number() ) :
// 				comments_template();
// 			endif;

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'markrahimi' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'markrahimi' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
