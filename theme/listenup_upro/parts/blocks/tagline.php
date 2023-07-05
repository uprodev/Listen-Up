<section class="engagements-info">
	<div class="engagements-info__container">
		<div class="engagements-info__content">
			<div class="engagements-info__block">
				<div class="info">
					
					<?php if ($field = get_field('text')): ?>
						<?= add_class_content($field, '', 'title-white') ?>
					<?php endif ?>
					
				</div>

				<?php if ($field = get_field('image')): ?>
					<div class="image">
						<picture>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						</picture>
					</div>
				<?php endif ?>

			</div>

			<?php if (get_field('info')): ?>
				<div class="engagements-info__info">

					<?php if ($field = get_field('info')['image']): ?>
						<div class="image">
							<picture>
								<?= wp_get_attachment_image($field['ID'], 'full') ?>
							</picture>
						</div>
					<?php endif ?>

					<?php if ($field = get_field('info')['text']): ?>
						<div class="info"><?= $field ?></div>
					<?php endif ?>

				</div>
			</div>
		<?php endif ?>

	</div>
</section>