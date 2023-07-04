<section class="about-adultification bg-purple section-padding">
	<div class="about-adultification__container">
		<div class="about-adultification__content">
			<div class="about-adultification__image image-block">

				<?php if ($field = get_field('image')): ?>
					<picture>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</picture>
				<?php endif ?>
				
			</div>
			<div class="about-adultification__info">

				<?php if ($field = get_field('text')): ?>
					<?= add_class_content($field, 'text-01') ?>
				<?php endif ?>
				
				<?php if ($field = get_field('link')): ?>
					<a href="<?= $field['url'] ?>" class="button button-m button-purple"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
				<?php endif ?>

			</div>
		</div>
	</div>
</section>