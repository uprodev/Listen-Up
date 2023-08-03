<?php get_header(); ?>

<?php 
$current_term = wp_get_object_terms(get_the_ID(), 'resource_cat');
switch ($current_term[0]->term_id) {
	case 7:
		include('resource-templates/publication.php');
		break;
	
	default:
		include('resource-templates/podcast.php');
		break;
}
?>

<?php get_footer(); ?>