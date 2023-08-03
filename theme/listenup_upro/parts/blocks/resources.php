<section class="resources bg-blue">
	<div class="resources__container">

		<?php if ($field = get_field('title')): ?>
			<h2 class="title-center"><?= $field ?></h2>
		<?php endif ?>
		
		<div class="resources__block filters-block">
			<div data-tabs class="tabs">
				<nav data-tabs-titles class="tabs__navigation filters-block__filter">
					<button type="button" class="tabs__title _tab-active"><?php _e('All', 'ListenUp') ?></button>

					<?php $terms = get_field('all_categories') ? get_terms(['taxonomy' => 'resource_cat', 'hide_empty' => false,]) : get_field('categories') ?>

					<?php if ($terms): ?>
						<?php foreach ($terms as $term): ?>
							<button type="button" class="tabs__title"><?= $term->name ?></button>
						<?php endforeach ?>
					<?php endif ?>
					
				</nav>
				<div data-tabs-body class="tabs__content">
					<div class="tabs__body">
						<div class="filters-block__list">

							<?php $wp_query = new WP_Query(array('post_type' => 'resource', 'posts_per_page' => -1, 'paged' => get_query_var('paged')));
							while ($wp_query->have_posts()): $wp_query->the_post(); ?>

								<?php get_template_part('parts/content','resource') ?>

							<?php endwhile; ?>
							<?php wp_reset_query(); ?>

						</div>
					</div>

					<?php foreach ($terms as $term): ?>
						<div class="tabs__body">
							<div class="filters-block__list">

								<?php $wp_query = new WP_Query(array('post_type' => 'resource', 'tax_query' => array(array('taxonomy' => 'resource_cat', 'field' => 'id', 'terms' => $term->term_id)), 'posts_per_page' => -1, 'paged' => get_query_var('paged')));
								while ($wp_query->have_posts()): $wp_query->the_post(); ?>

									<?php get_template_part('parts/content','resource') ?>

								<?php endwhile; ?>
								<?php wp_reset_query(); ?>

							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>