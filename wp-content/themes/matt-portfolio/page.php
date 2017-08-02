<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LM_Custom_Theme
 */

get_header(); ?>

	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			// while ( have_posts() ) : the_post();

			// 	get_template_part( 'template-parts/content', 'page' );

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;

			// endwhile; // End of the loop.
			?>

		</main>
	</div> -->

	<div class="container">
		<div class="section">
			<div class="row">

				<div class="col s10 offset-s2">
					<div class="icon-block">
						<h2 class="">Russell Reid</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse porro perspiciatis sed cum ea itaque iure quod ab eaque praesentium natus, officia totam iste molestiae ducimus cumque culpa rem!</p>
					</div>
				</div>

				<div class="col s6 offset-s6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit esse porro perspiciatis sed cum ea itaque iure quod ab eaque praesentium natus, officia totam iste molestiae ducimus cumque culpa rem!</p>
				</div>

			</div>
		</div>
	</div>

<?php
// get_sidebar();
get_footer();
