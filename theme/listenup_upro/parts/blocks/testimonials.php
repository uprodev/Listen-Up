<?php if( have_rows('testimonials') ): ?>

	<section class="testimonials section-padding bg-purple">
		<div class="testimonials__content">

			<?php if ($field = get_field('title')): ?>
				<h2 class="title-center"><?= $field ?></h2>
			<?php endif ?>

			<div class="testimonials__slider swiper">
				<div class="testimonials__wrapper swiper-wrapper">

					<?php while( have_rows('testimonials') ): the_row(); ?>

						<div class="testimonials__slide swiper-slide slide">
							<div class="slide__body">
								<div class="slide__header">

									<?php if ($field = get_sub_field('photo')): ?>
										<div class="avatar">
											<picture>
												<?= wp_get_attachment_image($field['ID'], 'full') ?>
											</picture>
										</div>
									<?php endif ?>
									
									<?php if ($field = get_sub_field('name')): ?>
										<h5><?= $field ?></h5>
									<?php endif ?>
									
									<?php if ($field = get_sub_field('position')): ?>
										<span><?= $field ?></span>
									<?php endif ?>
									
								</div>

								<?php if ($field = get_sub_field('text')): ?>
									<div class="slide__content">
										<div data-showmore="479.98, max" class="slide-content">
											<div data-showmore-content="90" class="slide-content__content"><?= $field ?></div>
											<button hidden data-showmore-button type="button" class="slide-content__more"><span><?php _e('Show more', 'ListenUp') ?></span><span><?php _e('Hide less', 'ListenUp') ?></span></button>
										</div>
									</div>
								<?php endif ?>

							</div>
						</div>

					<?php endwhile; ?>

				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>

	<?php endif; ?>