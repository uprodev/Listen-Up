<?php if (get_field('video')): ?>

	<?php preg_match('/src="(.+?)"/', get_field('video'), $matches) ?>
	
	<section class="about-video section-padding">
		<div class="about-video__container">
			<div class="about-video__content">

				<?php if ($field = get_field('text')): ?>
					<div class="about-video__text"><?= $field ?></div>
				<?php endif ?>

				<div class="about-video__video" data-popup="#popupVideoAbout" data-popup-youtube="<?= getYoutubeIdFromUrl($matches[1]) ?>">

					<?php if ($field = get_field('preview')): ?>
						<div class="preview">
							<picture>
								<?= wp_get_attachment_image($field['ID'], 'full') ?>
							</picture>
						</div>
					<?php endif ?>

					<?php if (get_field('info')): ?>
						<div class="info">

							<?php if ($field = get_field('info')['text']): ?>
								<div class="info-introduction"><?= $field ?></div>
							<?php endif ?>

							<?php if ($field = get_field('info')['image']): ?>
								<div class="info-listenup">
									<picture>
										<?= wp_get_attachment_image($field['ID'], 'full') ?>
									</picture>
								</div>
							<?php endif ?>

						</div>
					<?php endif ?>

				</div>
			</div>
		</div>
	</section>

	<div id="popupVideoAbout" aria-hidden="true" class="popup-video">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
					<path d="M 4.9902344 3.9902344 A 1.0001 1.0001 0 0 0 4.2929688 5.7070312 L 10.585938 12 L 4.2929688 18.292969 A 1.0001 1.0001 0 1 0 5.7070312 19.707031 L 12 13.414062 L 18.292969 19.707031 A 1.0001 1.0001 0 1 0 19.707031 18.292969 L 13.414062 12 L 19.707031 5.7070312 A 1.0001 1.0001 0 0 0 18.980469 3.9902344 A 1.0001 1.0001 0 0 0 18.292969 4.2929688 L 12 10.585938 L 5.7070312 4.2929688 A 1.0001 1.0001 0 0 0 4.9902344 3.9902344 z" />
				</svg></button>
				<div data-youtube-place class="popup__text">
				</div>
			</div>
		</div>
	</div>
	<?php endif ?>