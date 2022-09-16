<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Hero End -->
        
			
        <!-- Blog Details Section Begin -->
    <div class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <?php
                        		the_content();
 							?>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
 

	</main><!-- #main -->

<?php
get_footer();
?>
