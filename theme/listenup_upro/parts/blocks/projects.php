<section class="previous-projects bg-purple section-padding--s">
	<div class="previous-projects__container">
		<div class="previous-projects__content">
			<h2 class="title-center">
				<?php _e('Previous projects', 'ListenUp') ?>
			</h2>
			<div class="previous-projects__list">

				<?php $wp_query = new WP_Query(array('post_type' => 'project', 'posts_per_page' => 2, 'offset' => 1, 'paged' => get_query_var('paged')));
				while ($wp_query->have_posts()): $wp_query->the_post(); ?>

					<?php get_template_part('parts/content', 'project') ?>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
</section>