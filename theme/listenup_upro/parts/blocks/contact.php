<section class="get-in-touch">
	<div class="get-in-touch__container">
		<div class="get-in-touch__content">

			<?php if (get_field('email')): ?>
				<div class="get-in-touch__top">
					<div class="get-in-touch__mail">

						<?php if ($field = get_field('email')['icon']): ?>
							<i>
								<?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img-svg')) ?>
							</i>
						<?php endif ?>
						
						<div>

							<?php if ($field = get_field('email')['title']): ?>
								<span>
									<?= $field ?>
								</span>
							<?php endif ?>
							
							<?php if ($field = get_field('email')['email']): ?>
								<a href="mailto:<?= $field ?>"><?= $field ?></a>
							<?php endif ?>
							
						</div>
					</div>

					<?php if( have_rows('socials_footer', 'option') ): ?>

						<div class="get-in-touch__socials">
							<ul>

								<?php while( have_rows('socials_footer', 'option') ): the_row(); ?>

									<?php if ($icon = get_sub_field('icon')): ?>
										<li>
											<a href="<?php the_sub_field('url') ?>" target="_blank">
												<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'img-svg')) ?>
											</a>
										</li>
									<?php endif ?>

								<?php endwhile; ?>

							</ul>
						</div>

					<?php endif; ?>

				</div>
			<?php endif ?>
			
			<?php if ($field = get_field('form')): ?>
				<?= do_shortcode('[contact-form-7 id="' . $field . '" html_class="get-in-touch__form form"]') ?>
			<?php endif ?>
			
		</div>
	</div>
</section>