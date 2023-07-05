<?php get_header(); ?>

<?php $current_term = get_queried_object() ?>

<div class="page-header">
	<div class="page-header__container">
		<div class="page-header__content">
			<div class="page-header__breadcrumbs breadcrumbs">
				<nav aria-label="breadcrumb">
					<ul class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display() ?></ul>
				</nav>
			</div>
			<h1 class="title-center"><?php single_term_title() ?></h1>
		</div>
	</div>
</div>

<section class="resources bg-blue">
	<div class="resources__container">
		<div class="resources__block filters-block">
			<div class="filters-block__filter">
				<ul>
					<li>
						<a href="<?php the_permalink(21) ?>">
							All
						</a>
					</li>

					<?php 
					$terms = get_terms( [
						'taxonomy' => 'resource_cat',
						'hide_empty' => false,
					] ); 
					?>

					<?php if ($terms): ?>
						<?php foreach ($terms as $term): ?>
							<li>
								<a href="<?= get_term_link($term->term_id) ?>"<?php if($term->term_id == $current_term->term_id) echo ' class="active"' ?>><?= $term->name ?></a>
							</li>
						<?php endforeach ?>
					<?php endif ?>
					
				</ul>
			</div>
			<div class="filters-block__list">

				<?php $wp_query = new WP_Query(array('post_type' => 'resource', 'tax_query' => array(array('taxonomy' => 'resource_cat', 'field' => 'id', 'terms' => $current_term->term_id)), 'posts_per_page' => -1, 'paged' => get_query_var('paged')));
				while ($wp_query->have_posts()): $wp_query->the_post(); ?>

					<?php get_template_part('parts/content','resource') ?>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>