<?php

/**
 * Template Name: Направления-single
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<main class="main" id="directions-single">
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            Аллергология<br>
            в Abakumov Clinic
          </h1>
          <p class="front-block__subtitle _subtitle">
            Комплексный подход к диагностике и лечению<br> аллергических заболеваний
          </p>
          <div class="front-block__btns">
            <a class="front-block__btn _main-btn" href="#" data-fancybox>
              <span>Записаться на прием</span>
            </a>
            <a class="front-block__arrow-btn" href="#">
              <span class="front-block__btn-icon">
                <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              </span>
              <span>Записаться через WhatsApp</span>
            </a>
          </div>
        </div>
        <div class="front-block__right-item">
          <div class="front-block__right-wrapper">
            <img class="front-block__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-9.webp" alt="front-block-9">
          </div>
        </div>
      </div>
      <div class="front-block__links">
        <a class="front-block__link" href="#">
          <span>Комплекс обследования при<br> острой и хронической крапивнице</span>
        </a>
        <a class="front-block__link" href="#">
          <span>Комплекс обследования при аллергическом<br> риноконъюнктивите и бронхиальной астме</span>
        </a>
        <a class="front-block__link" href="#">
          <span>Крапивница</span>
        </a>
        <a class="front-block__link" href="#">
          <span>Лечение аллергического<br> ринита и конъюнктивита</span>
        </a>
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
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-4.webp" alt="services-4">
          </div>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Более 30 ключевых анализов —<br> от биохимии до иммуноблота
            </h4>
            <p class="services__item-text">
              с персональным разбором результатов<br> и составлением плана лечения
            </p>
            <span class="services__item-num">01</span>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-2.webp" alt="services-2">
          </div>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Врачи-эксперты с опытом работы<br>
              с аутоиммунными заболеваниями
            </h4>
            <p class="services__item-text">
              Только доказательные методики<br>
              и клинические рекомендации
            </p>
            <span class="services__item-num">02</span>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-5.webp" alt="services-5">
          </div>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Все обследования — за 1–2 визита,<br> по индивидуальному графику
            </h4>
            <p class="services__item-text">
              Персональный координатор и бесплатный<br> трансфер для пациентов из Москвы и МО
            </p>
            <span class="services__item-num">03</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>