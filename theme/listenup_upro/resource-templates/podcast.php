<?php $current_term = wp_get_object_terms(get_the_ID(), 'resource_cat')[0] ?>

<?php get_template_part('parts/head', 'resource') ?>

<div class="podcast-info">
	<?php the_content() ?>
</div>

<?php 
$wp_query = new WP_Query(array('post_type' => 'resource', 'tax_query' => array(array('taxonomy' => 'resource_cat', 'field' => 'id', 'terms' => $current_term->term_id)), 'posts_per_page' => 3, 'post__not_in' => [get_the_ID()], 'paged' => get_query_var('paged'))); 
if($wp_query->have_posts()):
	?>

	<section class="other-podcasts section-padding--s bg-blue">
		<div class="other-podcasts__container">
			<div class="other-podcasts__content">
				<h1 class="title-center"><?= __('Other', 'ListenUp') . ' ' . mb_strtolower($current_term->name) ?></h1>
				<div class="other-podcasts__list filters-block__list">

					<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

						<?php get_template_part('parts/content', 'resource') ?>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</section>
	<?php endif ?>