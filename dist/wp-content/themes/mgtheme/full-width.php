   <?php 
    /*
 Template Name: Full Width
 */
   get_header(); ?>

      <div class="row">

        <div id="primary" class="content-area sixteen columns">

			<main id="main" class="site" role="main">

				<?php
				if (have_posts()) :
					while (have_posts()) :
						the_post();
						get_template_part('content', get_post_format());
					endwhile;
				endif;
				?>

        </div><!-- /.col -->

      </div><!-- /.row -->

   <?php get_footer(); ?>