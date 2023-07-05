<section class="safeguarding-section section-padding">
	<div class="safeguarding-section__container">
		<div class="safeguarding-section__content">
			<div class="safeguarding-section__block">
				<div class="safeguarding-section__info">

					<?php if ($field = get_field('label')): ?>
						<span><?= $field ?></span>
					<?php endif ?>
					
					<?php if ($field = get_field('text')): ?>
						<?= add_class_content($field, '', 'title-white') ?>
					<?php endif ?>
					
				</div>

				<?php if ($field = get_field('image')): ?>
					<div class="safeguarding-section__image">
						<picture>
							<?= wp_get_attachment_image($field['ID'], 'full') ?>
						</picture>
					</div>
				<?php endif ?>

			</div>
		</div>
	</div>
</section>