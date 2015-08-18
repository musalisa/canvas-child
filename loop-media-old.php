<?php
/**
 * Loop - Archive
 *
 * This is the loop logic used on all archive screens.
 *
 * To override this loop in a particular archive type (in all categories, for example), 
 * duplicate the `archive.php` file and rename the duplicate to `category.php`.
 * In the code of `category.php`, change `get_template_part( 'loop', 'archive' );` to 
 * `get_template_part( 'loop', 'category' );` and save the file.
 *
 * Create a duplicate of this file and rename it to `loop-category.php`.
 * Make any changes to this new file and they will be reflected on all your category screens.
 *
 * @package WooFramework
 * @subpackage Template
 */

$term =	$wp_query->queried_object;

$querystr = " SELECT $wpdb->posts.ID,$wpdb->posts.post_title, $wpdb->posts.post_type FROM $wpdb->posts
INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
INNER JOIN $wpdb->postmeta ON ($wpdb->posts.ID = $wpdb->postmeta.post_id)
where 1=1
AND ( $wpdb->term_relationships.term_taxonomy_id IN ($term->term_taxonomy_id) )
AND ($wpdb->posts.post_status = 'publish' OR $wpdb->posts.post_status = 'closed')
AND $wpdb->posts.post_type IN ('buddydrive-file')
AND ( ($wpdb->postmeta.meta_key = '_buddydrive_sharing_option' AND CAST($wpdb->postmeta.meta_value AS CHAR) NOT IN ('private')) )
GROUP BY $wpdb->posts.ID ORDER BY $wpdb->posts.post_date DESC LIMIT 0, 10";


$pageposts = $wpdb->get_results($querystr, OBJECT);


 global $more; $more = 0;
 
woo_loop_before();
//Visualizzo il titolo anche se non ci sono post, quindi fuori dal loop
$title_before = '<h1 class="archive_header">';
$title_after = '</h1>';

woo_archive_title( $title_before, $title_after );

// Display the description for this archive, if it's available.
woo_archive_description();


//Nuovo loop
//print_r ($pageposts);
if ($pageposts){
	global $post;
	foreach ($pageposts as $post){
		setup_postdata($post);
		woo_get_template_part( 'content', 'buddydrive-file' );
		//print_r(get_post_type() )
		//bp_get_template_part( 'buddydrive-entry', false );
	}
}


//Salto il loop originale
//if (have_posts()) { $count = 0;
if (false) { $count = 0;

?>

<div class="fix"></div>

<?php
	while (have_posts()) { the_post(); $count++;

		woo_get_template_part( 'content', get_post_type() );

	} // End WHILE Loop
} else {
	//get_template_part( 'content', 'noposts' );
} // End IF Statement

woo_loop_after();

woo_pagenav();
?>