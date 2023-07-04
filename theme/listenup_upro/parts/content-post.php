<article class="what-we-do__item item">
	<a href="<?php the_permalink($args['post_id']) ?>" class="item__body">
		<div class="item__image">

			<?php if (has_post_thumbnail($args['post_id'])): ?>
				<picture>
				<?= get_the_post_thumbnail($args['post_id'], 'full') ?>
			</picture>
			<?php endif ?>
			
		</div>
		<div class="item__info">
			<h6>
				<?= get_the_title($args['post_id']) ?>
			</h6>
			<p class="text-01">
				<?= get_the_excerpt($args['post_id']) ?>
			</p>
			<span class="link">
				<?php _e('Find out more', 'ListenUp') ?>
				<i>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M22.7479 11.3917C22.7477 11.3914 22.7475 11.3911 22.7472 11.3909L18.2568 6.92212C17.9204 6.58735 17.3762 6.5886 17.0414 6.92504C16.7066 7.26145 16.7079 7.80556 17.0443 8.14037L20.0591 11.1406H1.85938C1.38474 11.1406 1 11.5254 1 12C1 12.4746 1.38474 12.8594 1.85938 12.8594H20.0591L17.0443 15.8596C16.7079 16.1944 16.7066 16.7385 17.0414 17.0749C17.3763 17.4114 17.9204 17.4126 18.2568 17.0779L22.7472 12.6091C22.7475 12.6089 22.7477 12.6086 22.748 12.6083C23.0846 12.2724 23.0835 11.7265 22.7479 11.3917Z" fill="#9642FF" />
					</svg>
				</i>
			</span>
		</div>
	</a>
</article>