<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package zerif
 */

get_header(); ?>
<div class="clear"></div>
</header> <!-- / END HOME SECTION  -->

	<div class="container">
		<div class="content-left-wrap col-md-9">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php 
						while ( have_posts() ) : 
							get_template_part( 'content', get_post_format() );

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

		<div class="sidebar-wrap col-md-3 content-left-wrap">
			<?php get_sidebar(); ?>
		</div><!-- .sidebar-wrap -->

	</div><!-- .container -->
<?php get_footer(); ?>