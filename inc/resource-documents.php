<?php
/**
 * Central registry of Merit List / Fee Structure / Fee Chalan PDFs for
 * every university.
 *
 * HOW TO UPDATE A PDF (no code editing needed — same as everything else
 * in this theme now):
 *   Go to Appearance → Customize → EduApply Settings → Resource Documents
 *   (PDFs). Upload the PDF at Media → Add New, copy its URL, and paste it
 *   into the matching field there. Optionally set the "Updated" date too
 *   (e.g. "August 2026").
 *
 * The merit-list / fee-structure / fee-chalan page templates all read
 * from ccx_get_resource_document() below automatically, so nothing else
 * needs to change when a PDF is replaced each admission cycle.
 *
 * Key naming: {university}_{merit|fee|chalan}
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Block direct access.
}

/**
 * Returns the full registry of resource documents, read live from
 * Appearance → Customize → EduApply Settings → Resource Documents (PDFs).
 * See inc/customizer.php for where these settings are registered.
 */
function ccx_get_resource_documents() {
	$universities = array( 'ucp', 'bims', 'uor', 'numl', 'tmuc', 'bahria', 'iqra' );
	$doc_types    = array( 'merit', 'fee', 'chalan' );

	$docs = array();
	foreach ( $universities as $uni ) {
		foreach ( $doc_types as $type ) {
			$key = "{$uni}_{$type}";
			$docs[ $key ] = array(
				'url'     => get_theme_mod( "ccx_doc_url_{$key}", '' ),
				'updated' => get_theme_mod( "ccx_doc_updated_{$key}", '' ),
			);
		}
	}
	return $docs;
}

/**
 * Returns a single document's data by key (e.g. 'ucp_merit').
 * Always returns an array with 'url' and 'updated' keys (possibly empty)
 * so templates never need to null-check the whole registry.
 */
function ccx_get_resource_document( $key ) {
	$docs = ccx_get_resource_documents();
	if ( isset( $docs[ $key ] ) ) {
		return $docs[ $key ];
	}
	return array(
		'url'     => '',
		'updated' => '',
	);
}
