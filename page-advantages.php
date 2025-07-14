<?php

/**
 * Template Name: Преимущества клиники
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<!-- 
страница Преимущества клиники


-->

<main class="main" id="advantages-page">
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          Мы создали пространство<br>
          продуманной медицины
        </h1>
        <p class="front-block__subtitle _subtitle">
          Это результат многолетней работы команды врачей, управленцев и исследователей,<br> которые создали медицинское пространство нового уровня
        </p>
        <img class="front-block__yandex" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-2.webp" alt="front-block-yandex">
        <img class="front-block__right" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-3.webp" alt="front-block-3">
      </div>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
          <span>Записаться на прием</span>
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79031003195" target="_blank">
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
          <span>Записаться через WhatsApp</span>
        </a>
      </div>
    </div>
  </section>
  <section class="video-block">
    <div class="container relative">
      <h2 class="video-block__title _title">
        Узнайте все самое важное<br>
        о клинике всего за 1 минуту
      </h2>
      <a class="video-block__video" href="#" data-fancybox>
        <img class="video-block__video-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-block-1.webp" alt="video-block-1">
        <div class="play">
          <div class="play__inner">
            <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
          </div>
        </div>
      </a>
      <img class="video-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-block-2.webp" alt="video-block-2">
    </div>
  </section>
  <div class="wrapper-bg _section-lg">
    <section class="image-block">
      <img class="image-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="image-block__title _title">
          Врачи-пульмонологи<br>
          Abakumov Clinic
        </h2>
        <div class="images-block__wrapper">
          <img class="image-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/image-block-1.webp" alt="image-block-1">
        </div>
      </div>
    </section>
  </div>

  <!-- Контакты -->
  <section class="contacts">
    <div class="container">
      <h2 class="contacts__title _title">
        Ждем вас ежедневно <br>с 8.00 до 20.00
      </h2>

      <div class="contacts__inner">
        <div class="contacts__left">
          <div class="contacts__left-wrapper">
            <img class="contacts__left-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/contacts-1.webp" alt="contacts-1">
          </div>
        </div>
        <div class="contacts__right">
          <div class="contacts__items">
            <div class="contacts__item">
              <div class="contacts__item-icon">
                <?php include(get_template_directory() . '/assets/images/icons/contacts-1.svg'); ?>
              </div>
              <p class="contacts__item-title">
                <span>Адрес:</span> г. Москва,<br>
                ул. 1-я Бородинская д.3
              </p>
            </div>
            <div class="contacts__item">
              <div class="contacts__item-icon">
                <?php include(get_template_directory() . '/assets/images/icons/contacts-2.svg'); ?>
              </div>
              <p class="contacts__item-title">
                <span>Бесплатная</span><br>
                парковка
              </p>
            </div>
            <div class="contacts__item">
              <div class="contacts__item-icon">
                <?php include(get_template_directory() . '/assets/images/icons/contacts-3.svg'); ?>
              </div>
              <p class="contacts__item-title">
                <span>Прием гл. врачом:</span><br> каждый четверг с 15.00<br>
                до 17.00
              </p>
            </div>
          </div>
          <div class="contacts__info">
            <p class="contacts__info-title">
              Запись на прием:
            </p>
            <a class="contacts__info-link" href=tel:+74958431914">
              +7 (495) 843-19-14
            </a>
            <div class="contacts__info-socials">
              <a class="contacts__info-social" href="#">
                <div class="contacts__info-icon contacts__info-icon--whatsapp">
                  <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                </div>
                <p class="contacts__info-text">
                  Запись через<br>
                  WhatsApp
                </p>
              </a>
              <a class="contacts__info-social" href="#">
                <div class="contacts__info-icon contacts__info-icon--telegram">
                  <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
                </div>
                <p class="contacts__info-text">
                  Запись через<br>
                  Telegram
                </p>
              </a>
            </div>
            <a class="contacts__info-btn _gray-btn" href="#" data-fancybox>
              Задать вопрос
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Карта -->
  <section class="map-block">
    <div class="container">
      <h2 class="map-block__title _title">
        Получите схемы проезда<br>
        и все контакты себе клиники в WhatsApp
      </h2>
    </div>
    <div class="map-block__inner relative _section-lg">
      <div class="map-block__map" id="map"></div>
      <div class="container">
        <form class="map-block__form form-submit" method="POST" action="#" enctype="multipart/form-data">
          <input type="hidden" name="from" class="from" value="Закажите обратный звонок">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <h4 class="map-block__form-title _title">
            Заполните форму ниже
          </h4>
          <p class="map-block__form-subtitle">
            чтобы получить подробную <br>схему проезда 
          </p>
          <div class="map-block__form-inner">
            <input class="_input map-block__form-inp" type="tel" name="phone" placeholder="Введите номер телефона">
            <button class="map-block__form-btn _gray-btn" type="submit">
              Получите схемы проезда<br>
              и все контакты в WhatsApp
            </button>
          </div>
          <p class="map-block__form-politic politic-text">
            Нажимая на кнопку, вы соглашаетесь с <a href="#politics" data-fancybox>
              Политикой конфиденциальности
            </a>
          </p>
        </form>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>