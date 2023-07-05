<section class="adultification-review bg-purple section-padding">
	<div class="adultification-review__container">
		<div class="adultification-review__content">

			<?php if ($field = get_field('title')): ?>
				<h2><?= $field ?></h2>
			<?php endif ?>
			
			<?php if (get_field('text')): ?>
				<div class="adultification-review__top">
					<div class="adultification-review__info">
						<div class="info-class">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 30 40" fill="none">
									<g clip-path="url(#clip0_3047_4395)">
										<path d="M23.8815 40.0003H6.11235C2.74171 40.0003 0 37.2633 0 33.8985V15.8552C0 12.4904 2.74171 9.75344 6.11235 9.75344H10.7836L21.6344 0.305104C21.9947 -0.0118724 22.5076 -0.0850209 22.9473 0.110042C23.3869 0.3112 23.6678 0.743995 23.6678 1.22556L23.6984 9.75344H28.7665C29.4443 9.75344 29.9939 10.3021 29.9939 10.9787V33.8985C29.9939 37.2633 27.2522 40.0003 23.8815 40.0003ZM6.11235 12.2039C4.09729 12.2039 2.45471 13.8437 2.45471 15.8552V33.8985C2.45471 35.9101 4.09729 37.5498 6.11235 37.5498H23.8815C25.8966 37.5498 27.5392 35.9101 27.5392 33.8985V12.2039H22.4771C21.7993 12.2039 21.2497 11.6553 21.2497 10.9787L21.2253 3.91376L12.0537 11.8991C11.8278 12.0942 11.5408 12.2039 11.2477 12.2039H6.11846H6.11235Z" fill="#19323C" />
									</g>
									<defs>
										<clipPath id="clip0_3047_4395">
											<rect width="30" height="40" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</i>
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 30 40" fill="none">
									<g clip-path="url(#clip0_3047_4395)">
										<path d="M23.8815 40.0003H6.11235C2.74171 40.0003 0 37.2633 0 33.8985V15.8552C0 12.4904 2.74171 9.75344 6.11235 9.75344H10.7836L21.6344 0.305104C21.9947 -0.0118724 22.5076 -0.0850209 22.9473 0.110042C23.3869 0.3112 23.6678 0.743995 23.6678 1.22556L23.6984 9.75344H28.7665C29.4443 9.75344 29.9939 10.3021 29.9939 10.9787V33.8985C29.9939 37.2633 27.2522 40.0003 23.8815 40.0003ZM6.11235 12.2039C4.09729 12.2039 2.45471 13.8437 2.45471 15.8552V33.8985C2.45471 35.9101 4.09729 37.5498 6.11235 37.5498H23.8815C25.8966 37.5498 27.5392 35.9101 27.5392 33.8985V12.2039H22.4771C21.7993 12.2039 21.2497 11.6553 21.2497 10.9787L21.2253 3.91376L12.0537 11.8991C11.8278 12.0942 11.5408 12.2039 11.2477 12.2039H6.11846H6.11235Z" fill="#19323C" />
									</g>
									<defs>
										<clipPath id="clip0_3047_4395">
											<rect width="30" height="40" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</i>
						</div>

						<?php if ($field = get_field('text')): ?>
							<?= $field ?>
						<?php endif ?>
						
						<?php if ($field = get_field('signature')): ?>
							<strong><?= $field ?></strong>
						<?php endif ?>
						
					</div>
				</div>
			<?php endif ?>
			
			<?php if (get_field('bottom')): ?>
				<div class="adultification-review__bottom">
					<div class="adultification-review__modal">

						<?php if ($field = get_field('bottom')['image']): ?>
							<div class="adultification-review__image">
								<picture>
									<?= wp_get_attachment_image($field['ID'], 'full') ?>
								</picture>
							</div>
						<?php endif ?>

						<?php if ($field = get_field('bottom')['link']): ?>
							<div class="adultification-review__button">
								<a href="<?= $field['url'] ?>" class="button button-m button-purple"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
							</div>
						<?php endif ?>

					</div>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</section>