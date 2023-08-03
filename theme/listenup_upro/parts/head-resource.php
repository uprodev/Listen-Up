<div class="post-header">
	<div class="post-header__container">
		<div class="post-header__content">
			<div class="post-header__breadcrumbs breadcrumbs">
				<nav aria-label="breadcrumb">
					<ul class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display() ?></ul>
				</nav>
			</div>
			<div class="post-header__title">

				<?php if ($field = get_field('color_icon', 'term_' . wp_get_object_terms(get_the_ID(), 'resource_cat')[0]->term_id)): ?>
					<div class="post-header__categories-icon">
						<?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img-svg')) ?>
					</div>
				<?php endif ?>
				
				<h1><?php the_title() ?></h1>
			</div>
		</div>
	</div>
</div>