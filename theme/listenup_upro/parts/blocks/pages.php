<?php
$featured_posts = get_field('pages');
if($featured_posts): ?>

	<section class="footer-last">
		<div class="footer-last__container">
			<div class="footer-last__content">
				<ul>

					<?php foreach($featured_posts as $post): 

						setup_postdata($post); ?>
						<li>
							<a href="<?php the_permalink($post->ID) ?>" class="item">
								<div class="item__body">
									<div class="item__title">
										<?= get_the_title($post->ID) ?> <i>
											<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
												<g id="Navigation / ">
													<g id="Outlined / Navigation / arrow_forward">
														<path id="ð¹ Icon Color" fill-rule="evenodd" clip-rule="evenodd" d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="#9642FF" />
													</g>
												</g>
											</svg>
										</i>
									</div>

									<?php if (get_the_excerpt($post->ID)): ?>
										<div class="item__text">
										<p><?= get_the_excerpt($post->ID) ?></p>
									</div>
									<?php endif ?>
									
								</div>
							</a>
						</li>
					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</ul>
			</div>
		</div>
	</section>

	<?php endif; ?>