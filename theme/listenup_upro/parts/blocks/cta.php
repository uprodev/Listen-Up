<section class="section-gradient section-padding">
	<div class="section-gradient__container">
		<div class="section-gradient__content section-padding">
			<div class="section-gradient__body">
				
				<?php if ($field = get_field('text')): ?>
					<?= add_class_content($field, '', 'title-white') ?>
				<?php endif ?>
				
				<?php if ($field = get_field('link')): ?>
					<a href="<?= $field['url'] ?>" class="header__button button button-purple button-xs"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
				<?php endif ?>

			</div>
		</div>
	</div>
</section>