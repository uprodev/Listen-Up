<?php $wp_query = new WP_Query(array('post_type' => 'project', 'posts_per_page' => 1, 'paged' => get_query_var('paged')));
while ($wp_query->have_posts()): $wp_query->the_post(); ?>

	<section class="last-project">
		<div class="last-project__container">
			<div class="last-project__content">

				<?php if (has_post_thumbnail()): ?>
					<div class="last-project__preview">
						<?php the_post_thumbnail('full') ?>
					</div>
				<?php endif ?>
				
				<div class="last-project__info">
					<div class="last-project__header">
						<span><?php _e('Our latest research project') ?></span>
						<h2><?php the_title() ?></h2>
					</div>

					<?php if (get_the_content()): ?>
						<div class="last-project__list"><?php the_content() ?></div>
					<?php endif ?>
					
					<?php if( have_rows('percentages', get_the_ID()) ): ?>

						<div class="last-project__percentages">
							<ul>

								<?php while( have_rows('percentages', get_the_ID()) ): the_row(); ?>

									<li>

										<?php if ($field = get_sub_field('number')): ?>
											<span><?= $field ?></span>
										<?php endif ?>
										
										<?php if ($field = get_sub_field('text')): ?>
											<p class="text-02"><?= $field ?></p>
										<?php endif ?>
										
									</li>

								<?php endwhile; ?>

							</ul>
						</div>

					<?php endif; ?>

					<?php if ($field = get_field('image', get_the_ID())): ?>
						<div class="last-project__author">
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						</div>
					<?php endif ?>
					
					<?php if ($field = get_field('url', get_the_ID())): ?>
						<a href="<?= $field ?>" class="button button-xs button-purple" target="_blank"><?php _e('READ THE REPORT', 'ListenUp') ?></a>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>
<?php wp_reset_query(); ?>