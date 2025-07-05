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
  <section class="catalog _section-lg">
    <div class="container">
      <h2 class="catalog__title _title">
        Выберите интересующее<br>
        вас направление
      </h2>
      <div class="catalog__items">
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">01</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Аллергология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">02</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Гастроэнтерология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">03</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Гематология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">04</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Гинекология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">05</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Дерматология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">06</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Диетология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">07</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Кардиология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">08</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Косметология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">09</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Маммология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">10</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Неврология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">11</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Онкология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">12</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Оториноларингология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">13</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Пульмонология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">14</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Терапия</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">15</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">УЗИ</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">16</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Урология</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">17</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Физиотерапия</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">18</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Фониатрия</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">19</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Функциональная диагностика</h4>
        </a>
        <a href="#" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num">20</span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title">Эндокринология</h4>
        </a>
      </div>
    </div>
  </section>
  <section class="callback ">
    <div class="container">
      <div class="callback__inner _image-wrapper relative">
        <div class="overlay"></div>
        <div class="callback__left relative">
          <h2 class="callback__title _title">
            Есть вопросы<br> или хотите<br> записаться<br>
            по телефону?
          </h2>
          <div class="callback__info">
            <img class="callback__info-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/callback-manager.webp" alt="callback-manager">
            <p class="callback__info-text">
              Мы перезвоним вам<br> в течение 7 минут
            </p>
          </div>
        </div>
        <form class="callback__form form-submit relative" action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Есть вопросы или хотите записаться по телефону?">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <h4 class="callback__form-title">
            Заполните форму
          </h4>
          <p class="callback__form-subtitle">
            Введите телефон в форме ниже
          </p>
          <div class="callback__form-inputs">
            <input class="callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона">
            <button class="callback__form-btn _gray-btn">
              Записаться на консультацию
            </button>
          </div>
          <p class="callback__form-politic politic-text">
            Нажимая на кнопку, вы соглашаетесь с <a href="#politics" data-fancybox>
              Политикой конфиденциальности
            </a>
          </p>
        </form>
      </div>
    </div>
  </section>
  <section class="checkup-stages _section-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/checkup-stages-bg-3.webp);">
    <div class="container">
      <h2 class="checkup-stages__title _title _white-text">
        Этапы<br>
        лечения
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>

      <div class="checkup-stages__elems">
        <div class="checkup-stages__elem">
          <div class="checkup-stages__elem-top">
            <span class="checkup-stages__elem-num">
              01
            </span>
            <span class="checkup-stages__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </span>
          </div>
          <h4 class="checkup-stages__elem-title">
            Первичная
            консультация
          </h4>
          <p class="checkup-stages__elem-text">
            сбор анамнеза, осмотр, назначение необходимых исследований
          </p>
        </div>
        <div class="checkup-stages__elem">
          <div class="checkup-stages__elem-top">
            <span class="checkup-stages__elem-num">
              02
            </span>
            <span class="checkup-stages__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </span>
          </div>
          <h4 class="checkup-stages__elem-title">
            Прохождение
            диагностики
          </h4>
          <p class="checkup-stages__elem-text">
            проведение кожных проб, лабораторных анализов
          </p>
        </div>
        <div class="checkup-stages__elem">
          <div class="checkup-stages__elem-top">
            <span class="checkup-stages__elem-num">
              03
            </span>
            <span class="checkup-stages__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </span>
          </div>
          <h4 class="checkup-stages__elem-title">
            Разработка
            плана лечения
          </h4>
          <p class="checkup-stages__elem-text">
            и подбор индивидуальной терапии
          </p>
        </div>
        <div class="checkup-stages__elem">
          <div class="checkup-stages__elem-top">
            <span class="checkup-stages__elem-num">
              04
            </span>
            <span class="checkup-stages__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </span>
          </div>
          <h4 class="checkup-stages__elem-title">
            Терапия
            проведение
          </h4>
          <p class="checkup-stages__elem-text">
            лечения согласно разработанному плану
          </p>
        </div>
        <div class="checkup-stages__elem">
          <div class="checkup-stages__elem-top">
            <span class="checkup-stages__elem-num">
              05
            </span>
            <span class="checkup-stages__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </span>
          </div>
          <h4 class="checkup-stages__elem-title">
            Динамическое
            наблюдение
          </h4>
          <p class="checkup-stages__elem-text">
            оценка эффективности <br>лечения, коррекция при необходимости
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>