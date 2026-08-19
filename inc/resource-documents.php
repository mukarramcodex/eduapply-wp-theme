<?php
/**
 * Central registry of Merit List / Fee Structure PDFs for every university.
 *
 * HOW TO UPDATE A PDF (no code editing needed for this step):
 *   1. Upload the PDF in wp-admin under Media → Add New.
 *   2. Open the uploaded file and copy its URL ("Copy URL to clipboard").
 *   3. Paste that URL into the matching 'url' value below.
 *   4. Optionally update 'updated' to the date shown on the page (e.g. "August 2026").
 *
 * That's it — the merit-list / fee-structure page templates read from this
 * file automatically, so nothing else needs to change when a PDF is
 * replaced each admission cycle.
 *
 * Key naming: {university}_{merit|fee}
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Block direct access.
}

/**
 * Returns the full registry of resource documents.
 */
function ccx_get_resource_documents() {
	return array(
		'ucp_merit' => array(
			'url'     => '', // TODO: paste UCP Merit List PDF URL (Media Library)
			'updated' => '',
		),
		'ucp_fee' => array(
			'url'     => '', // TODO: paste UCP Fee Structure PDF URL (Media Library)
			'updated' => '',
		),
		'ucp_chalan' => array(
			'url'     => '', // TODO: paste UCP Fee Chalan PDF URL (Media Library)
			'updated' => '',
		),
		'bims_merit' => array(
			'url'     => '', // TODO: paste BIMS Merit List PDF URL (Media Library)
			'updated' => '',
		),
		'bims_fee' => array(
			'url'     => '', // TODO: paste BIMS Fee Structure PDF URL (Media Library)
			'updated' => '',
		),
		'bims_chalan' => array(
			'url'     => '', // TODO: paste BIMS Fee Chalan PDF URL (Media Library)
			'updated' => '',
		),
		'uor_merit' => array(
			'url'     => '', // TODO: paste UOR Merit List PDF URL (Media Library)
			'updated' => '',
		),
		'uor_fee' => array(
			'url'     => '', // TODO: paste UOR Fee Structure PDF URL (Media Library)
			'updated' => '',
		),
		'uor_chalan' => array(
			'url'     => '', // TODO: paste UOR Fee Chalan PDF URL (Media Library)
			'updated' => '',
		),
		'numl_merit' => array(
			'url'     => '', // TODO: paste NUML Merit List PDF URL (Media Library)
			'updated' => '',
		),
		'numl_fee' => array(
			'url'     => '', // TODO: paste NUML Fee Structure PDF URL (Media Library)
			'updated' => '',
		),
		'numl_chalan' => array(
			'url'     => '', // TODO: paste NUML Fee Chalan PDF URL (Media Library)
			'updated' => '',
		),
		'tmuc_merit' => array(
			'url'     => '', // TODO: paste TMUC Merit List PDF URL (Media Library)
			'updated' => '',
		),
		'tmuc_fee' => array(
			'url'     => '', // TODO: paste TMUC Fee Structure PDF URL (Media Library)
			'updated' => '',
		),
		'tmuc_chalan' => array(
			'url'     => '', // TODO: paste TMUC Fee Chalan PDF URL (Media Library)
			'updated' => '',
		),
		'bahria_merit' => array(
			'url'     => '', // TODO: paste Bahria Merit List PDF URL (Media Library)
			'updated' => '',
		),
		'bahria_fee' => array(
			'url'     => '', // TODO: paste Bahria Fee Structure PDF URL (Media Library)
			'updated' => '',
		),
		'bahria_chalan' => array(
			'url'     => '', // TODO: paste Bahria Fee Chalan PDF URL (Media Library)
			'updated' => '',
		),
	);
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
