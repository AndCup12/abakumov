<?php

/**
 * Template Name: Направления-main
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<main class="main" id="directions-main">
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            Направления в Abakumov Clinic
          </h1>
          <div class="cursor">
            <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
          </div>
          <div class="front-block__items">
            <div class="front-block__item">
              <img class="front-block__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-5.webp" alt="front-block-5">
            </div>
            <div class="front-block__item">
              <img class="front-block__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-6.webp" alt="front-block-6">
            </div>
            <div class="front-block__item">
              <img class="front-block__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-7.webp" alt="front-block-7">
            </div>
            <div class="front-block__item">
              <img class="front-block__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-8.webp" alt="front-block-8">
            </div>
          </div>
          <div class="front-block__btns">
            <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
              <?php include(get_template_directory() . '/assets/images/icons/mail.svg'); ?>
              <span>Записаться на прием</span>
            </a>
            <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79031003195" target="_blank">
              <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              <span>Записаться через WhatsApp</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services">
    <div class="container">
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="services__items">
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-6.webp" alt="services-6">
          </div>
          <span class="services__item-num">01</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Персональный план <br>лечения:
            </h4>
            <p class="services__item-text">
              с учётом симптомов, анализов, <br> образа жизни и целей терапии
            </p>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-7.webp" alt="services-7">
          </div>
          <span class="services__item-num">02</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Современные<br>
              методы диагностики:
            </h4>
            <p class="services__item-text">
              используем передовые<br> лабораторные и инструментальные<br> исследования
            </p>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-2.webp" alt="services-5">
          </div>
          <span class="services__item-num">03</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Опыт, подкреплённый<br> результатами:
            </h4>
            <p class="services__item-text">
              каждый врач — специалист с глубокой<br> клинической практикой и научным <br>подходом
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>