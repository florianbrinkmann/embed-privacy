<?php
namespace epiphyt\Embed_Privacy;
use function defined;
use function delete_option;
use function delete_site_option;
use function get_option;
use function get_posts;
use function switch_to_blog;
use function wp_delete_post;

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$options = [
	'embed_privacy_is_migrating',
	'embed_privacy_javascript_detection',
	'embed_privacy_migrate_version',
	'embed_privacy_preserve_data_on_uninstall',
];
$sites = get_sites( [ 'number' => 99999 ] );

foreach ( $sites as $site ) {
	switch_to_blog( $site->blog_id );
	
	// do nothing if option says so
	if ( get_option( 'embed_privacy_preserve_data_on_uninstall' ) ) {
		continue;
	}
	
	// delete options
	foreach ( $options as $option ) {
		delete_option( $option );
	}
	
	// delete posts of custom post type
	$embeds = get_posts( [
		'numberposts' => -1,
		'post_status' => 'any',
		'post_type' => 'epi_embed',
	] );
	
	foreach ( $embeds as $embed ) {
		wp_delete_post( $embed->ID, true );
	}
}

// delete site options
foreach ( $options as $option ) {
	delete_site_option( $option );
}
