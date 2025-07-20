<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon">
  <meta content="<?php echo get_template_directory_uri(); ?>/assets/images/social.png" property="og:image">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

  <?php wp_head(); ?>
</head>

<body>
  <div class="body_wrapper">
    <header class="header ">
      <div class="container">
        <div class="header__inner">
          <div class="header__left">
            <a class="logo header__logo" href="/">
              <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
            </a>
            <a class="header__map" href="https://yandex.ru/maps/-/CHcs6XPF" target="_blank">
              <img class="header__map-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/map-point.webp" alt="map-point">
              <p class="header__map-text">
                <span>Адрес клиники:</span>
                г. Москва, ул. 1-я Бородинская д.3
              </p>
            </a>
          </div>
          <div class="header__right">
            <div class="social-block header__social-block">
              <div class="social-block__left">
                <?php if(get_field('whatsapp', 'option')):?>
                <a class="social-block__link social-block__whatsapp" href="<?php the_field('whatsapp', 'option');?>">
                  <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                </a>
                <?php endif; ?>
                <?php if(get_field('telegram', 'option')):?>
                <a class="social-block__link social-block__telegram" href="<?php the_field('telegram', 'option');?>">
                  <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
                </a>
                <?php endif; ?>
              </div>
              <?php $phone = get_field('phone', 'option');
              $clean_phone = str_replace([' ', '(', ')', '-'], '', $phone);?>
              <a class="social-block__phone" href="tel:<?php echo $clean_phone; ?>">
                <?php echo $phone; ?>
              </a>
            </div>
            <a class="header__btn change-popup" href="#callback-modal" data-fancybox>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manager-btn.webp" alt="manager-btn">
              <span>Записаться</span>
            </a>
          </div>
        </div>
      </div>
      <div class="container">
        <nav class="header__menu center">
            <?php
            wp_nav_menu(array(
                'menu' => 'main_menu',
                'container'      => false,
                'menu_class'     => 'header__menu-list',
                'walker'         => new Custom_Nav_Walker(),
                'depth'          => 3
            ));
            ?>

            <a class="header__map header__menu-map" href="https://yandex.ru/maps/-/CHcs6XPF" target="_blank">
              <img class="header__map-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/map-point.webp" alt="map-point">
              <p class="header__map-text">
                <span>Адрес клиники:</span>
                г. Москва, ул. 1-я Бородинская д.3
              </p>
            </a>
            <form action="#" method="post" class="header__search open-search">
              <div class="header__search-icon">
                <?php include(get_template_directory() . '/assets/images/icons/search.svg'); ?>
              </div>
              <input class="header__search-inp open-search-inp" type="text" name="search" placeholder="Поиск..">
            </form>
            <div class="burger">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>

        </nav>
      </div>
    </header>
    <div class="popup-menu">
      <a class="logo popup-menu__logo" href="/">
        <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
      </a>
      <div class="popup-menu__close">
        x
      </div>
      <nav class="popup-menu__menu">
        <?php
        wp_nav_menu(array(
            'menu'           => 'main_menu',
            'container'      => false,
            'menu_class'     => 'popup-menu__menu-list',
            'walker'         => new Popup_Menu_Walker(),
            'depth'          => 3
        ));
        ?>
      </nav>
    </div>
