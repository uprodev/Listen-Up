<?php $current_term = wp_get_object_terms(get_the_ID(), 'resource_cat')[0] ?>

<?php get_template_part('parts/head', 'resource') ?>

<div class="post-publications">
	<div class="post-publications__content">

		<?php if (get_field('pdf')): ?>
			<div class="post-publications__info">
				<div class="left">

					<?php if ($field = get_field('pdf')['image']): ?>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					<?php endif ?>

				</div>
				<div class="right">

					<?php if ($field = get_field('pdf')['file']): ?>
						<a href="<?= $field['url'] ?>" class="button button-xs button-purple" target="_blank"><?php _e('Download PDF', 'ListenUp') ?></a>
					<?php endif ?>

				</div>
			</div>
		<?php endif ?>

		<?php if ($field = get_the_content()): ?>
			<?= add_class_content($field, 'text-01') ?>
		<?php endif ?>

	</div>
</div>

<?php 
$wp_query = new WP_Query(array('post_type' => 'resource', 'tax_query' => array(array('taxonomy' => 'resource_cat', 'field' => 'id', 'terms' => $current_term->term_id)), 'posts_per_page' => 3, 'post__not_in' => [get_the_ID()], 'paged' => get_query_var('paged'))); 
if($wp_query->have_posts()):
	?>

	<section class="other-publications section-padding--s bg-blue">
		<div class="other-publications__container">
			<div class="other-publications__content">
				<h1 class="title-center"><?= __('Other', 'ListenUp') . ' ' . mb_strtolower(wp_get_object_terms(get_the_ID(), 'resource_cat')[0]->name) ?></h1>
				<div class="other-publications__list filters-block__list">
					
					<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>

						<?php get_template_part('parts/content', 'resource') ?>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>

				</div>
			</div>
		</div>
	</section>
	<?php endif ?>