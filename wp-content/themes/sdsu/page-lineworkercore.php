<?php
/**
 * Template Name: Lineworker Core
 *

 */

get_header(); ?>
		
		<div id="container">
			<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<span class="breadcrumbs">','</span>');
} ?>
			<div class="sidebar_wrapper">
				
				<?php get_sidebar(); ?>
			</div><!-- sidebar wrapper -->
			<div class="content_wrapper">
				<div id="content">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php get_template_part( 'loop', 'page' ); ?>
					<hr/>
					 				
				<?php $lineworker = new WP_Query( array( 'post_type' => 'lineworkercore','order' => 'DSC' ) ); while($lineworker->have_posts()) : $lineworker->the_post(); ?>
            <?php include("my-curriculum-loop.php"); ?>
         <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>
				
				
				
				
				
 
       
         
                 
        

				</div><!-- content -->
				<a href="#top" class="back_to_top" title="Back to Top">Back To Top</a>
				<?php include("my-access-notes-loop.php"); ?>
			</div><!-- content wrapper -->
		</div><!-- #container -->


<?php get_footer(); ?>
