<?php
/*
Template Name: About
*/
?>

<?php

get_header(); ?>
<html>
<head>
  <meta charset="UTF-8">		
  <title>Fond extensible - version CSS</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>		
</head>
<about>

<body id="<?php echo $bg;?>">

	<div id="primary" class="site-content">


		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
		
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary --></body>

<?php get_sidebar(); ?>
<?php get_footer(); ?></about>