<section class="what-we-do bg-yellow section-padding">
	<div class="what-we-do__container">
		<div class="what-we-do__content">

			<?php if ($field = get_field('title')): ?>
				<h2 class="title-center"><?= $field ?></h2>
			<?php endif ?>
			
			<?php
			$featured_posts = get_field('posts');
			if($featured_posts): 
				?>

				<div class="what-we-do__list">

					<?php foreach($featured_posts as $post): ?>
						<?php get_template_part('parts/content', 'post', ['post_id' => $post->ID]) ?>
					<?php endforeach; ?>

				</div>

			<?php endif ?>

		</div>
	</div>
</section>