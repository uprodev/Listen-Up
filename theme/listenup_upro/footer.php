</main>
<footer class="footer">
  <div class="footer__container">
    <div class="footer__content">
      <div class="footer__top">

        <?php $locations = get_nav_menu_locations() ?>
        <?php if ($locations): ?>
          <div class="footer__columns">

            <?php foreach ($locations as $index => $footer_menu): ?>

              <?php if (str_contains($index, 'footer')): ?>
                <div class="column">
                  <h6><?= wp_get_nav_menu_object($locations[$index])->name ?></h6>

                  <?php wp_nav_menu( array(
                    'theme_location'  => $index,
                    'container'       => '',
                    'items_wrap'      => '<ul>%3$s</ul>'
                  ) ); ?>

                </div>
              <?php endif ?>

            <?php endforeach ?>

          </div>
        <?php endif ?>

        <?php if ($field = get_field('logo_footer', 'option')): ?>
          <div class="footer__designed">
            <a href="<?= get_home_url() ?>" class="footer__logo">
              <picture>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </picture>
            </a>
          </div>
        <?php endif ?>

      </div>
      <div class="footer__bottom">
        <div class="footer__info">

          <?php if ($field = get_field('copyright_footer', 'option')): ?>
            <div class="footer__copyright"><?= $field ?></div>
          <?php endif ?>
          
          <?php if( have_rows('links_footer', 'option') ): ?>

            <div class="footer__links">
              <ul>

                <?php while( have_rows('links_footer', 'option') ): the_row(); ?>

                  <?php if ($field = get_sub_field('link')): ?>
                    <li>
                      <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                    </li>
                  <?php endif ?>

                <?php endwhile; ?>

              </ul>
            </div>

          <?php endif; ?>

        </div>

        <?php if( have_rows('socials_footer', 'option') ): ?>

          <div class="footer__socials">
            <ul>

              <?php while( have_rows('socials_footer', 'option') ): the_row(); ?>

                <?php if ($icon = get_sub_field('icon')): ?>
                  <li>
                    <a href="<?php the_sub_field('url') ?>" target="_blank">
                      <?= wp_get_attachment_image($icon['ID'], 'full', false, array('class' => 'img-svg')) ?>
                    </a>
                  </li>
                <?php endif ?>

              <?php endwhile; ?>

            </ul>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>