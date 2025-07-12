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
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-6.webp" alt="services-4">
          </div>
          <span class="services__item-num">01</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Персональный план<br>
              лечения:
            </h4>
            <p class="services__item-text">
              с учётом симптомов, анализов, образа жизни и целей терапии
            </p>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-7.webp" alt="services-2">
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
              каждый врач — специалист с глубокой<br> клинической практикой и научным<br> подходом
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-gray space-top">
    <section class="directions-question">
      <div class="directions-question__bg">
        <?php include(get_template_directory() . '/assets/images/icons/av-bg.svg'); ?>
      </div>
      <div class="container">
        <div class="directions-question__inner">
          <h2 class="directions-question__title _title">
            Что такое<br>
            аллергология?
          </h2>
          <div class="directions-question__info">
            <h4 class="directions-question__info-title">
              Аллергология — раздел медицины,<br> изучающий аллергические реакции<br> организма
            </h4>
            <p class="directions-question__info-text">
              на различные вещества (аллергены) и методы<br> их диагностики, лечения и профилактики
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="directions-simptom relative">
      <div class="container">
        <h2 class="directions-simptom__title _title">
          С какими симптомами нужно
          обратиться к аллергологу?
        </h2>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="directions-simptom__items">
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Постоянный или<br> сезонный насморк,<br> чихание
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Зуд<br>
              и покраснение глаз
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Кожные высыпания,<br> крапивница
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Одышка, кашель<br> без видимой<br> причин
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Реакции на пищу,<br> лекарства или укусы<br> насекомых
            </h4>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="directions-callback">
    <div class="container">
      <div class="directions-callback__inner _image-wrapper">
        <img class="directions-callback__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/directions-callback-1.webp" alt="directions-callback-1">
        <div class="overlay"></div>
        <h2 class="directions-callback__title _title">
          Получите<br> консультацию<br>
          врача по видеосвязи,<br> не выходя из дом
        </h2>
        <div class="directions-callback__subtitle">
          Введите ваш номер телефона в форме ниже и мы выберем<br> удобное время для видео-консультации
        </div>
        <form action="#" class="directions-callback__form form-submit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Консультация с терапевтом">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <div class="directions-callback__form-inputs">
            <input class="directions-callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона">
            <button class="directions-callback__form-btn _gray-btn">
              Записаться на первичную<br>
              видео-консультацию
            </button>
          </div>
          <p class="directions-callback__form-politic politic-text">
            Нажимая на кнопку, вы соглашаетесь с <a href="#politics" data-fancybox>
              Политикой конфиденциальности
            </a>
          </p>
        </form>
      </div>
    </div>
  </section>
  <section class="quote-block">
    <div class="container">
      <div class="quote-block__content relative">
        <img class="quote-block__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-block-men.webp" alt="men">
        <div class="overlay"></div>
        <div class="quote-block__inner">
          <div class="quote-block__left">
            <div class="quote-block__left-icon">
              <?php include(get_template_directory() . '/assets/images/icons/dots.svg'); ?>
            </div>
            <p class="quote-block__left-text">
              «Аллергия — это не просто<br> дискомфорт. Это сигнал иммунной<br> системы, что в организме нарушен<br> баланс. Моя задача — найти<br> причину и восстановить контроль»
            </p>
          </div>
          <div class="quote-block__right">
            <h5 class="quote-block__right-name">
              Анатолий Михайлович Бала
            </h5>
            <p class="quote-block__right-text ">
              Врач аллерголог-иммунолог, кандидат<br> медицинских наук
            </p>
            <p class="quote-block__right-exp ">
              Стаж 16 лет
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
