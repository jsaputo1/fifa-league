<?php
/**
 * Custom metaboxes for this theme using CMB2.
 *
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

if ( file_exists( get_template_directory() . '/inc/cmb2/init.php' ) ) {
	require_once( get_template_directory() . '/inc/cmb2/init.php' );
}

/**
 * Add metaboxes.
 */

function fifa_register_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_fifa_';

	$fifa_meta = new_cmb2_box( array(
		'id'            => $prefix . 'Stats',
		'title'         => 'Stats',
		'object_types'  => array( 'post', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
	) );

   $fifa_meta->add_field( array(
		'name' => 'GP',
		'id'   => $prefix . 'gp',
		'type' => 'text',
    ) );
    
    $fifa_meta->add_field( array(
		'name' => 'W',
		'id'   => $prefix . 'w',
		'type' => 'text',
    ) );
    
    $fifa_meta->add_field( array(
		'name' => 'D',
		'id'   => $prefix . 'd',
		'type' => 'text',
    ) );
    $fifa_meta->add_field( array(
		'name' => 'L',
		'id'   => $prefix . 'l',
		'type' => 'text',
    ) );
    $fifa_meta->add_field( array(
		'name' => 'PTS',
		'id'   => $prefix . 'pts',
		'type' => 'text',
    ) );
    $fifa_meta->add_field( array(
		'name' => 'GF',
		'id'   => $prefix . 'gf',
		'type' => 'text',
    ) );
    $fifa_meta->add_field( array(
		'name' => 'GA',
		'id'   => $prefix . 'ga',
		'type' => 'text',
    ) );
    $fifa_meta->add_field( array(
		'name' => 'GD',
		'id'   => $prefix . 'gd',
		'type' => 'text',
	) );
	$fifa_meta->add_field( array(
		'name' => 'Team1',
		'id'   => $prefix . 'team1',
		'type' => 'text',
	) );
	$fifa_meta->add_field( array(
		'name' => 'Team 1 Image',
		'id'   => $prefix . 't1img',
		'type' => 'file',
	) );
	$fifa_meta->add_field( array(
		'name' => 'Team1 Score',
		'id'   => $prefix . 'team1Score',
		'type' => 'text',
	) );
	$fifa_meta->add_field( array(
		'name' => 'Team2',
		'id'   => $prefix . 'team2',
		'type' => 'text',
	) );
	$fifa_meta->add_field( array(
		'name' => 'Team 2 Image',
		'id'   => $prefix . 't2img',
		'type' => 'file',
	) );

	$fifa_meta->add_field( array(
		'name' => 'Team2 Score',
		'id'   => $prefix . 'team2Score',
		'type' => 'text',
	) );
	$fifa_meta->add_field( array(
		'name' => 'Final',
		'id'   => $prefix . 'final',
		'type' => 'text',
	) );

}

add_action( 'cmb2_admin_init', 'fifa_register_metaboxes' );
