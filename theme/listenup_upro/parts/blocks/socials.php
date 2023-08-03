
<?php if( have_rows('socials_footer', 'option') ): ?>

	<section class="socials-block">
		<div class="socials-block__container">
			<div class="socials-block__content">
				<div class="socials-block__block">

					<?php if ($field = get_field('title')): ?>
						<span><?= $field ?></span>
					<?php endif ?>
					
					<ul>

						<?php while( have_rows('socials_footer', 'option') ): the_row(); ?>

							<?php if ($icon = get_sub_field('icon')): ?>
								<li>
									<a href="<?= get_sub_field('url') ?>" target="_blank">
										<?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'img-svg')) ?>
									</a>
								</li>
							<?php endif ?>

						<?php endwhile; ?>

					</ul>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>