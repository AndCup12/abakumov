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
                <a class="social-block__link social-block__whatsapp" href="https://wa.me/+74958431914">
                  <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                </a>
                <a class="social-block__link social-block__telegram" href="https://wa.me/+74958431914">
                  <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
                </a>
              </div>
              <a class="social-block__phone" href="tel:+74958431914">
                +7 495 843-19-14
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
          <ul class="header__menu-list">
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Чек-апы
              </a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Направления
              </a>
              <div class="submenu__wrapper">
                <ul class="submenu">
                  <li class="submenu__item">
                    <a class="submenu__link" href="#">
                      Аллергология
                    </a>
                    <ul class="submenu">
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Чекап пациентов<br>
                          18-30+ (мужчины)
                        </a>
                      </li>
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Чекап пациентов после<br>
                          40 лет (мужчины)
                        </a>
                      </li>
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Чекап пациентов<br>
                          после 60 лет (мужчины)
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="submenu__item">
                    <a class="submenu__link" href="#">
                      Гастроэнтерология
                    </a>
                    <ul class="submenu">
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Чекап пациентов<br>
                          18-30+ (мужчины)
                        </a>
                      </li>
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Чекап пациентов после<br>
                          40 лет (мужчины)
                        </a>
                      </li>
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Чекап пациентов<br>
                          после 60 лет (мужчины)
                        </a>
                      </li>
                      <li class="submenu__item third-level">
                        <a class="submenu__link" href="#">
                          Гематология
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="submenu__item">
                    <a class="submenu__link" href="#">
                      Гематология
                    </a>
                  </li>
                  <li class="submenu__item">
                    <a class="submenu__link" href="#">
                      Гинекология
                    </a>
                  </li>
                  <li class="submenu__item">
                    <a class="submenu__link" href="#">
                      Функциональная диагностика
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Услуги
              </a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Врачи
              </a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Цены
              </a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                О клинике
              </a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Пациентам
              </a>
            </li>
            <li class="header__menu-item">
              <a class="header__menu-link" href="#">
                Контакты
              </a>
            </li>
          </ul>
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
    <nav class="popup-menu">
      <ul class="popup-menu__menu-list">
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Чек-апы
          </a>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Направления
          </a>
          <div class="popup-submenu__wrapper">
            <ul class="popup-submenu">
              <li class="popup-submenu__item">
                <a class="popup-submenu__link" href="#">
                  Аллергология
                </a>
                <ul class="popup-submenu">
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Чекап пациентов<br>
                      18-30+ (мужчины)
                    </a>
                  </li>
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Чекап пациентов после<br>
                      40 лет (мужчины)
                    </a>
                  </li>
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Чекап пациентов<br>
                      после 60 лет (мужчины)
                    </a>
                  </li>
                </ul>
              </li>
              <li class="popup-submenu__item">
                <a class="popup-submenu__link" href="#">
                  Гастроэнтерология
                </a>
                <ul class="popup-submenu">
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Чекап пациентов<br>
                      18-30+ (мужчины)
                    </a>
                  </li>
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Чекап пациентов после<br>
                      40 лет (мужчины)
                    </a>
                  </li>
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Чекап пациентов<br>
                      после 60 лет (мужчины)
                    </a>
                  </li>
                  <li class="popup-submenu__item third-level">
                    <a class="popup-submenu__link" href="#">
                      Гематология
                    </a>
                  </li>
                </ul>
              </li>
              <li class="popup-submenu__item">
                <a class="popup-submenu__link" href="#">
                  Гематология
                </a>
              </li>
              <li class="popup-submenu__item">
                <a class="popup-submenu__link" href="#">
                  Гинекология
                </a>
              </li>
              <li class="popup-submenu__item">
                <a class="popup-submenu__link" href="#">
                  Функциональная диагностика
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Услуги
          </a>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Врачи
          </a>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Цены
          </a>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            О клинике
          </a>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Пациентам
          </a>
        </li>
        <li class="popup-menu__menu-item">
          <a class="popup-menu__menu-link" href="#">
            Контакты
          </a>
        </li>
      </ul>
    </nav>