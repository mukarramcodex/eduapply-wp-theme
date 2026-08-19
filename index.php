<?php
/**
 * Fallback template — required by WordPress for every theme.
 *
 * Every real page on this site uses one of the dedicated page templates
 * (front-page.php, page-about.php, page-ucp.php, etc.), each of which is
 * a fully self-contained document. This file only renders if WordPress
 * can't find a more specific template — e.g. for a page/post that hasn't
 * been assigned one of the EduApply templates yet.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div style="max-width:720px; margin:80px auto; padding:0 24px; font-family:sans-serif; color:#15213A;">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<div><?php the_content(); ?></div>
	<?php endwhile; else : ?>
		<h1><?php esc_html_e( 'Nothing found', 'campus-compass' ); ?></h1>
		<p><?php esc_html_e( 'This page has no dedicated EduApply template assigned yet.', 'campus-compass' ); ?></p>
	<?php endif; ?>
</div>
<?php wp_footer(); ?>
</body>
</html>
