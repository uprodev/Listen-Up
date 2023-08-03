<div class="previous-projects__project project">
	<div class="project__body">

		<?php if (has_post_thumbnail()): ?>
			<div class="project__preview">
				<?php the_post_thumbnail('full') ?>
			</div>
		<?php endif ?>

		<div class="project__info">
			<h6>
				<?php the_title() ?>
			</h6>

			<?php if (get_the_excerpt()): ?>
				<p><?php the_excerpt() ?></p>
			<?php endif ?>
			
			<?php if ($field = get_field('url', get_the_ID())): ?>
				<a href="<?= $field ?>" class="link-blue" target="_blank"><?php _e('View report', 'ListenUp') ?></a>
			<?php endif ?>

		</div>
	</div>
</div>