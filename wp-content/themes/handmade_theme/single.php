<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				
<?php get_template_part( 'content', get_post_format() ); ?>
		
<div id="decription_project">
<h1><?php meta('project_title'); ?><h1>

<h2><?php meta('Project_descriptor'); ?></h2>

<p><strong>Client:</strong> <?php meta('project_client'); ?></p>
<p><strong>Studio:</strong> <?php meta('project_studio'); ?></p>
<p><strong>Director:</strong> <?php meta('project_director'); ?></p>
<p><strong>Motion Design:</strong> <?php meta('project_motion'); ?></p>
<p><strong>Offline Edit:</strong> <?php meta('project_offline'); ?></p>
<p><strong>Sound Design:</strong> <?php meta('project_sound'); ?></p>
<p><strong>Producer:</strong> <?php meta('project_producer'); ?></p>
</div>		

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>