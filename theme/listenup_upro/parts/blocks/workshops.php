<?php if( have_rows('workshops') ): ?>

	<section class="publications section-padding--s bg-blue"<?php if($field = get_field('background')) echo ' style="background-image: url(' . $field['url'] . ')"' ?>>
		<div class="publications__container">
			<div class="publications__content">
				<div data-spollers class="publications__spollers">

					<?php while( have_rows('workshops') ): the_row(); ?>

						<details class="publication__item">
							<summary class="publication__title">

								<?php if ($field = get_sub_field('label')): ?>
									<span><?= $field ?></span>
								<?php endif ?>
								
								<?php if ($field = get_sub_field('title')): ?>
									<p><?= $field ?></p>
								<?php endif ?>
								
							</summary>
							<div class="publication__body">
								<div class="publication__header">

									<?php if ($field = get_sub_field('time')): ?>
										<div class="hours">
											<i>
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_3648_863)">
														<path d="M8 0.5C3.5888 0.5 0 4.0888 0 8.5C0 12.9112 3.5888 16.5 8 16.5C12.4112 16.5 16 12.9112 16 8.5C16 4.0888 12.4112 0.5 8 0.5ZM8 14.7977C4.52746 14.7977 1.7021 11.9727 1.7021 8.5C1.7021 5.0273 4.52746 2.20226 8 2.20226C11.4725 2.20226 14.2979 5.0273 14.2979 8.5C14.2979 11.9727 11.4725 14.7977 8 14.7977Z" fill="#B7BFC2" />
														<path d="M12.1695 8.25296H8.57425V3.93019C8.57425 3.56642 8.27931 3.27148 7.91554 3.27148C7.55177 3.27148 7.25684 3.56642 7.25684 3.93019V8.91167C7.25684 9.27544 7.55177 9.57037 7.91554 9.57037H12.1695C12.5332 9.57037 12.8282 9.27544 12.8282 8.91167C12.8282 8.54789 12.5332 8.25296 12.1695 8.25296Z" fill="#B7BFC2" />
													</g>
													<defs>
														<clipPath id="clip0_3648_863">
															<rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
														</clipPath>
													</defs>
												</svg>
											</i>
											<?= $field ?>
										</div>
									<?php endif ?>

									<?php if ($field = get_sub_field('location')): ?>
										<div class="pin">
											<i>

												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
													<g clip-path="url(#clip0_3648_870)">
														<path d="M8.5 2C6.01206 2 4 4.0344 4 6.55001C4 9.96248 8.5 15 8.5 15C8.5 15 13 9.96254 13 6.55001C13 4.03443 10.988 2 8.5 2ZM8.5 8.17506C7.61294 8.17506 6.8929 7.44693 6.8929 6.55007C6.8929 5.65312 7.61294 4.92505 8.5 4.92505C9.38703 4.92505 10.1072 5.65309 10.1072 6.55007C10.1072 7.44693 9.38703 8.17506 8.5 8.17506Z" stroke="#B7BFC2" stroke-width="1.5" />
													</g>
													<defs>
														<clipPath id="clip0_3648_870">
															<rect width="16" height="16" fill="white" transform="translate(0 0.5)" />
														</clipPath>
													</defs>
												</svg>
											</i>
											<?= $field ?>
										</div>
									<?php endif ?>

								</div>

								<?php if ($field = get_sub_field('text')): ?>
									<?= $field ?>
								<?php endif ?>

								<?php if ($field = get_sub_field('link')): ?>
									<a href="<?= $field['url'] ?>" class="button button-xs button-purple"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
								<?php endif ?>
								
							</div>
						</details>

					<?php endwhile; ?>

				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>