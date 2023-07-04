<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrapper">
    <header class="header">
      <div class="header__container">
        <div class="header__content">

          <?php if ($field = get_field('logo_header', 'option')): ?>
            <a href="<?= get_home_url() ?>" class="header__logo">
              <picture>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </picture>
            </a>
          <?php endif ?>
          
          <div class="header__block">

            <?php 
            $menu = wp_get_nav_menu_items(2);
            $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
            ?>

            <?php if ($menu): ?>
              <div class="header__menu menu">
                <nav class="menu__body">
                  <ul>

                    <?php foreach ($menu as $item): ?>

                      <?php $child_menu = []; ?>
                      <?php foreach ($menu as $item_2): ?>
                        <?php if ($item_2->menu_item_parent == $item->ID) $child_menu[] = $item_2; ?>
                      <?php endforeach ?>

                      <?php if ($item->menu_item_parent === '0'): ?>
                        <li<?php if($child_menu) echo ' class="sub-menu"' ?>>
                          <a href="<?= $item->url ?>"<?php if($item->url == $actual_link) echo ' class="active"' ?><?php if($item->target) echo ' target="_blank"' ?>>
                            <?= $item->title ?>
                          </a>

                          <?php if ($child_menu): ?>
                            <i class="sub-menu__icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.4891 4.84566C14.2524 4.60704 13.8687 4.607 13.632 4.8457L8.00006 10.5247L2.36786 4.84566C2.13121 4.60704 1.74745 4.607 1.51077 4.8457C1.27408 5.08436 1.27408 5.47128 1.51077 5.70994L7.57154 11.821C7.68519 11.9357 7.83934 12 8.00006 12C8.16079 12 8.31497 11.9356 8.42859 11.821L14.489 5.70989C14.7258 5.47128 14.7258 5.08432 14.4891 4.84566Z" fill="#FFC145" />
                              </svg>
                            </i>

                            <ul>

                              <?php foreach ($child_menu as $item_2): ?>
                                <li>
                                  <a href="<?= $item_2->url ?>"<?php if($item_2->target) echo ' target="_blank"' ?>><?= $item_2->title ?></a>
                                </li>
                              <?php endforeach ?>

                            </ul>
                          <?php endif ?>

                        </li>

                      <?php endif ?>

                    <?php endforeach ?>

                  </ul>
                </nav>
              </div>
            <?php endif ?>

            <div class="header__actions">

              <?php if ($field = get_field('link_header', 'option')): ?>
                <a href="<?= $field['url'] ?>" class="header__button button button-purple button-xs"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
              <?php endif ?>

              <button type="button" class="menu__icon icon-menu"><span></span></button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="page">