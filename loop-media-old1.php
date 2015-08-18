<?php

/**
 * Library Loop Prova
 *
 * Inspired by BuddyPress Activity Loop
 *
 * @package BuddyDrive
 * @since  version (1.0)
 */


//////////////////////////////////////////
$term =	$wp_query->queried_object;

$d = array(
		'id'                => false,
		'name'              => false,
		'group_id'	        => $group_id,
		'user_id'	        => $user,
		'per_page'	        => 10,
		'paged'		        => 1,
		'type'              => 'buddydrive-file',
		'buddydrive_scope'  => false,
		'search'            => false,
		'buddydrive_parent' => 0,
		'exclude'           => 0,
		'orderby' 		    => 'title',
		'order'             => 'ASC'
);
$args = array(
		'post_type' => 'buddydrive-file',
		'tax_query' => array(
				array(
						'taxonomy' => 'media',
						'field'    => 'id',
						'terms'    => $term->term_id,
				),
		),
		'meta_query' => array(
				//'relation' => 'OR',
				array(
						'key'     => '_buddydrive_sharing_option',
						'value'   => 'public',
						'compare' => '=',
				),
		),
);
//$r = wp_parse_args( $args, $d );

?>
<h1><?php echo $term->name;?></h1>
<div style='font-size: 1.3em'>
<?php 
// The Query

//$the_query = new WP_Query( $args );

// The Loop

$the_query = new WP_Query( $args);

// The Loop
if ( $the_query->have_posts() ) {
	echo '<br />';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$tvox_bd_id = get_the_ID();
		echo '<b>'.get_post_meta( $tvox_bd_id, 'tvox_bd_title', true ).'</b> - <i>' . get_the_title().'</i><br />';		
		echo 'posted by '.get_the_author().' - ';
		the_date();
		$tvox_bd_url=site_url('buddydrive/file/').$the_query->post->post_name;
		echo ' - <a href="'.$tvox_bd_url.'">'.$tvox_bd_url.'</a>';
		echo '<br />'.get_post_meta( $tvox_bd_id, 'tvox_bd_artist', true ).'<br />';
		the_content();
		echo '<br />';
	}
	echo '';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>





