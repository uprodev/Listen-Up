<section class="hero-main">
	<div class="hero-main__content">
		<div class="hero-main__info">
			<div class="hero-main__container">
				<div>

					<?php if ($field = get_field('text')): ?>
						<?= $field ?>
					<?php endif ?>
					
					<?php if ($field = get_field('link')): ?>
						<a href="<?= $field['url'] ?>" class="button button-purple button-m"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					<?php endif ?>

				</div>
			</div>
		</div>

		<?php if ($field = get_field('image')): ?>
			<div class="hero-main__image">
				<picture>
					<?= wp_get_attachment_image($field['ID'], 'full') ?>
				</picture>
			</div>
		<?php endif ?>
		
	</div>
</section>