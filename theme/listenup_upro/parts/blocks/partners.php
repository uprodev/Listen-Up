<section class="partners section-padding">
	<div class="partners__container">
		<div class="partners__content">

			<?php if ($field = get_field('title')): ?>
				<h2 class="title-center"><?= $field ?></h2>
			<?php endif ?>
			
			<?php if ($field = get_field('image')): ?>
				<div class="partners__image">
					<picture>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</picture>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</section>