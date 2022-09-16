<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markrahimi
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>


			<div class="breadcrumb-option spad set-bg" data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb-bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="breadcrumb__text">
							<?php
								the_archive_title( '<h2 class="page-title">', '</h2>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
								?>
								<?php the_breadcrumb(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<section class="blog spad">
                <div class="container">
                    <div class="row">

            			<?php
            			/* Start the Loop */
            			while ( have_posts() ) :
            				the_post();
            				
            				?>
            				
                			<div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__item latest__item" >
    								<h4><?php the_title() ?></h4>
                                    <ul>
                                        <li><?php echo get_the_date() ?></li>
    <!--                                     <li>05 Comment</li> -->
                                    </ul>
									<?php if(get_post_type() == 'podcast'){?>
										<div class ="row radiobox-lits">
											<?php if( get_field('castbox') ): ?>
											<div class="col text-center">	
												<div class="icon-box text-center">
													<a href="<?php the_field('castbox'); ?>">
													<i> <svg role="img" viewBox="0 0 24 24" style="max-width: 36px;" title="castbox" xmlns="http://www.w3.org/2000/svg"><title>Castbox</title><path d="M12 0c-.29 0-.58.068-.812.206L2.417 5.392c-.46.272-.804.875-.804 1.408v10.4c0 .533.344 1.135.804 1.407l8.77 5.187c.465.275 1.162.275 1.626 0l8.77-5.187c.46-.272.804-.874.804-1.407V6.8c0-.533-.344-1.136-.804-1.408L12.813.206A1.618 1.618 0 0012 0zm-.85 8.304c.394 0 .714.303.714.676v2.224c0 .207.191.375.427.375s.428-.168.428-.375V9.57c0-.373.32-.675.713-.675.394 0 .712.302.712.675v4.713c0 .374-.318.676-.712.676-.394 0-.713-.302-.713-.676v-1.31c0-.206-.192-.374-.428-.374s-.427.168-.427.374v1.226c0 .374-.32.676-.713.676-.394 0-.713-.302-.713-.676v-1.667c0-.207-.192-.375-.428-.375-.235 0-.427.168-.427.375v3.31c0 .373-.319.676-.712.676-.394 0-.713-.303-.713-.676v-2.427c0-.206-.191-.374-.428-.374-.235 0-.427.168-.427.374v.178a.71.71 0 01-.712.708.71.71 0 01-.713-.708v-2.123a.71.71 0 01.713-.708.71.71 0 01.712.708v.178c0 .206.192.373.427.373.237 0 .428-.167.428-.373v-1.53c0-.374.32-.676.713-.676.393 0 .712.303.712.676v.646c0 .206.192.374.427.374.236 0 .428-.168.428-.374V8.98c0-.373.319-.676.713-.676zm4.562 2.416c.393 0 .713.302.713.676v2.691c0 .374-.32.676-.713.676-.394 0-.712-.303-.712-.676v-2.691c0-.374.319-.676.712-.676zm2.28 1.368c.395 0 .713.303.713.676v.67c0 .374-.318.676-.712.676-.394 0-.713-.302-.713-.675v-.67c0-.374.32-.677.713-.677Z"></path></svg></i>
													</a>
												</div>
											</div>
											
											<?php endif; ?>
									
											<?php if( get_field('youtube') ): ?>
											<div class="col text-center">
												<div class="icon-box text-center">
													<a href="<?php the_field('youtube'); ?>"><i class="fa fa-youtube"></i></a>
												</div>
											</div>
											<?php endif; ?>
											
											<?php if( get_field('soundcloud') ): ?>
												<div class="col text-center">
													<div class="icon-box text-center">
														<a href="<?php the_field('soundcloud'); ?>"><i class="fa fa-soundcloud"></i></a>
													</div>
												</div>
											<?php endif; ?>
										
										</div>
									<br>
										<?php }else{ ?>
										<p><?php the_excerpt(); ?></p>
										<?php }; ?>
                                    
                                    <a href="<?php the_permalink(); ?>">ادامه مطلب <span class="arrow_right"></span></a>
                                </div>
                            </div>
                				
            				
            				
            				<?php
            


            
            			endwhile;
            
            			the_posts_navigation();
            
            		else :
            
            			get_template_part( 'template-parts/content', 'none' );
            
            		endif;
            		?>
            		
                </div>
                    <!--<div class="row">-->
                    <!--    <div class="col-lg-12">-->
                    <!--        <div class="pagination__option blog__pagi">-->
                    <!--            <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>-->
                    <!--            <a href="#" class="number__pagination">1</a>-->
                    <!--            <a href="#" class="number__pagination">2</a>-->
                    <!--            <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </section>

	</main><!-- #main -->

<?php
get_footer();
