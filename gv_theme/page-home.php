<?php
/*
 *   Template Name: Home 
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GV_Theme
 */

get_header();
?>

          <!-- Banner Area Start -->
		      <section class="banner-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white pb-10">
                            <div class="is--hero pt-10 pb-10 pl-20">
								              <?php the_content(); ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
        <!-- Banner Area End -->

        <!-- gv Service Area Start -->
        <section class="gv-services-area">
            <div class="container">
                <div class="row">
                    <!-- Mobile Veiw Start -->
                    <div class="col-sm-12 d-md-none d-sm-block">
                        <?php 
                          get_template_part( 'template-parts/mobile' );
                        ?>
                    </div>
                    <!-- Mobile Veiw End -->
                    <!-- Desktop View Start -->
                    <div class="col-md-12 d-none d-md-block mt-20">
                      <?php 
                        if( have_posts() ): 
                          get_template_part( 'template-parts/content', get_post_type() );
                        else:
                          get_template_part( 'template-parts/content', 'none' );
                        endif;
                      ?>                        
                        
                    </div>
                    <!-- Desktop View End -->
                </div>
            </div>
        </section>

	

<?php
get_footer();
