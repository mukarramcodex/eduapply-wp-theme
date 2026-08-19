<?php
/**
 * EduApply theme functions.
 *
 * Every page template in this theme is a fully self-contained HTML
 * document (own <head>, own inline <style>, own inline <script>) — that
 * mirrors how the site was originally built and deployed as static HTML,
 * and keeps every page's CSS/JS scoped under its own unique wrapper ID
 * (#ccx-page, #ucp-page, #bims-page, etc.) so nothing here can collide
 * with Elementor, other plugins, or other pages on the same install.
 *
 * Because of that, this theme does NOT use a shared header.php/footer.php
 * the way a typical WordPress theme does. Each template calls wp_head()
 * and wp_footer() directly inside its own <head>/<body> so that plugins
 * (SEO, analytics, security, the admin bar when logged in, etc.) still
 * work correctly, without WordPress injecting a second <html>/<head>.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Block direct access.
}

define( 'CCX_THEME_VERSION', '1.0.0' );

/**
 * Basic theme setup.
 */
function ccx_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'custom-logo' );

	// Register the main navigation location, in case a site owner wants to
	// eventually swap the hardcoded nav links for a WordPress-managed menu.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'campus-compass' ),
	) );
}
add_action( 'after_setup_theme', 'ccx_theme_setup' );

/**
 * Enqueue the (intentionally minimal) theme stylesheet.
 * Each page template carries its own full, scoped CSS inline — this just
 * satisfies WordPress's expectation that style.css is registered/enqueued.
 */
function ccx_enqueue_assets() {
	wp_enqueue_style( 'campus-compass-style', get_stylesheet_uri(), array(), CCX_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ccx_enqueue_assets' );

/**
 * Register custom page templates so they show up in the WordPress Page
 * Attributes → Template dropdown, in addition to being auto-applied via
 * the page-{slug}.php naming convention (see the README for the full
 * slug → template mapping).
 */
function ccx_register_page_templates( $templates ) {
	$templates['page-about.php']            = __( 'EduApply — About', 'campus-compass' );
	$templates['page-universities.php']     = __( 'EduApply — Universities', 'campus-compass' );
	$templates['page-programs.php']         = __( 'EduApply — Programs', 'campus-compass' );
	$templates['page-why-choose-us.php']    = __( 'EduApply — Why Choose Us', 'campus-compass' );
	$templates['page-ucp.php']              = __( 'EduApply — UCP', 'campus-compass' );
	$templates['page-bims.php']             = __( 'EduApply — BIMS', 'campus-compass' );
	$templates['page-uor.php']              = __( 'EduApply — UOR', 'campus-compass' );
	$templates['page-numl.php']             = __( 'EduApply — NUML', 'campus-compass' );
	$templates['page-tmuc.php']             = __( 'EduApply — TMUC', 'campus-compass' );
	$templates['page-bahria.php']           = __( 'EduApply — Bahria University', 'campus-compass' );
	$templates['page-apply.php']            = __( 'EduApply — Admission Application', 'campus-compass' );
	return $templates;
}
add_filter( 'theme_page_templates', 'ccx_register_page_templates' );

/**
 * Admission application form handler (AJAX). See inc/admission-handler.php
 * for the full implementation: validation, file uploads, SMTP email via
 * PHPMailer, webhook POST, and the leads.csv fallback log.
 */
require_once get_template_directory() . '/inc/admission-handler.php';
