<section class="adultification-section">
	<div class="adultification-section__container">
		<div class="adultification-section__content">

			<?php if ($field = get_field('text')): ?>
				<?= add_class_content($field, 'text-02') ?>
			<?php endif ?>

			<?php if ($field = get_field('text_2')): ?>
			<span><?= $field ?></span>
			<?php endif ?>
			
		</div>
	</div>
</section>