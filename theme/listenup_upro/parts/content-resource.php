<?php $term = wp_get_object_terms(get_the_ID(), 'resource_cat')[0] ?>

<article>
	<a href="<?php the_permalink() ?>" class="item item--video">
		<div class="item__body">
			<div class="item__header">

				<?php if ($field = get_field('icon', 'term_' . $term->term_id)): ?>
					<div class="item__icon-categories"<?php if($colour = get_field('colour', 'term_' . $term->term_id)) echo ' style="background-color:' . $colour . '"' ?>>
						<?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img-svg')) ?>
					</div>
				<?php endif ?>
				
				<?php if (has_post_thumbnail()): ?>
					<div class="item__image">
						<?php the_post_thumbnail('full') ?>
					</div>
				<?php endif ?>
				
			</div>
			<div class="item__content">

				<?php if ($term): ?>
					<span<?php if($colour = get_field('colour', 'term_' . $term->term_id)) echo ' style="color:' . $colour . '"' ?>><?= $term->name ?></span>
				<?php endif ?>
				
				<h5><?php the_title() ?></h5>
			</div>
		</div>
	</a>
</article>