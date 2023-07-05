<section class="resources bg-blue">
	<div class="resources__container">

		<?php if ($field = get_field('title')): ?>
			<h2 class="title-center"><?= $field ?></h2>
		<?php endif ?>
		
		<div class="resources__block filters-block">
			<div class="filters-block__filter">
				<ul>
					<li>
						<a href="<?php the_permalink(21) ?>" class="active">
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
								<a href="<?= get_term_link($term->term_id) ?>"><?= $term->name ?></a>
							</li>
						<?php endforeach ?>
					<?php endif ?>
					
				</ul>
			</div>
			<div class="filters-block__list">

				<?php $wp_query = new WP_Query(array('post_type' => 'resource', 'posts_per_page' => -1, 'paged' => get_query_var('paged')));
				while ($wp_query->have_posts()): $wp_query->the_post(); ?>

					<?php get_template_part('parts/content','resource') ?>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>