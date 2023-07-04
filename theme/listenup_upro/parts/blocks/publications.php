<section class="publications section-padding" <?php if($field = get_field('background')) echo 'style="background-image: url(' . $field['url'] . ');" ' ?>>
	<div class="publications__container">
		<div class="publications__content">

			<?php if ($field = get_field('label')): ?>
				<span class="subtitle"><?= $field ?></span>
			<?php endif ?>

			<?php if ($field = get_field('title')): ?>
				<h2 class="title-white title-center"><?= $field ?></h2>
			<?php endif ?>

			<?php if( have_rows('links') ): ?>

				<div class="publications__buttons">

					<?php while( have_rows('links') ): the_row(); ?>

						<?php if ($field = get_sub_field('link')): ?>
							<a href="<?= $field['url'] ?>" class="button button-m <?= get_row_index() == 1 ? 'button-white' : 'button-white--border' ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
						<?php endif ?>

					<?php endwhile; ?>

				</div>

			<?php endif; ?>

		</div>
	</div>
</section>