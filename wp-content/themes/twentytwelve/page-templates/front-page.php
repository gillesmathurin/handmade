<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<html>
<head>
  <meta charset="UTF-8">		
  <title>Fond extensible - version CSS</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>		
</head>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?></html>