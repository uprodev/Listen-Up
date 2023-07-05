<section class="meet-with-director">
	<div class="meet-with-director__container">
		<div class="meet-with-director__content">
			<div class="meet-block">

				<?php if ($field = get_field('text')): ?>
					<div class="meet-block__text"><?= $field ?></div>
				<?php endif ?>
				
				<?php if ($field = get_field('image')): ?>
					<div class="meet-block__image">
						<picture>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						</picture>
					</div>
				</div>
			<?php endif ?>

		</div>
	</div>
</section>