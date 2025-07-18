<?php

/**
 * Template Name: Услуги-single
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<main class="main" id="services-single">
  <!-- ЗДЕСЬ ЕСТЬ ИЗМЕНЕНИЯ ДЛЯ СТРАНИЦЫ ТЕЛЕГРАМА. МОИ ИЗМЕНЕНИЯ ЗАКОММЕНЧЕННЫ -->
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            Медицинские<br> услуги на дому<br>
            от Abakumov Clinic
          </h1>
          <p class="front-block__subtitle _subtitle">
            Профессиональная медицинская помощь в комфортных<br> условиях вашего дома — без очередей и лишнего стресса
          </p>
          <div class="front-block__btns">
            <a class="front-block__btn _main-btn" href="#" data-fancybox>
              <!-- ДОБАВИЛ ИКОНКУ ТЕЛЕГИ -->
              <!-- <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?> -->
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
            <img class="front-block__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-16.webp" alt="front-block-16">
          </div>
        </div>
        <!-- ДОБАВИЛ КАРТИНКУ РУКИ ТЕЛЕГИ -->
        <!-- <img class="front-block__img-telegram" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-telegram.webp" alt="hand-telega"> -->
      </div>
      <div class="front-block__links items-center">
        <a class="front-block__link" href="#">
          <span>Прием врача и проведение<br>
            функциональной диагностики на дому</span>
        </a>
        <a class="front-block__link" href="#">
          <span>Лечебно-восстановительная<br>
            терапия на дому</span>
        </a>
        <a class="front-block__link" href="#">
          <span>Анализы на дому</span>
        </a>
      </div>
    </div>
  </section>
  <!-- Преимущества -->
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

    <!-- Заболевание/расшифровка новый -->
    <section class="directions-question">
      <div class="directions-question__bg">
        <?php include(get_template_directory() . '/assets/images/icons/av-bg.svg'); ?>
      </div>
      <div class="container">
        <div class="directions-question__inner">
          <h2 class="directions-question__title _title">
            Что такое<br>
            медицинские<br>
            услуги на дому?
          </h2>
          <div class="directions-question__info">
            <h4 class="directions-question__info-title">
              Медицинские услуги на дому — это<br> возможность получить квалифицированную<br> помощь без необходимости посещения<br> клиники
            </h4>
            <p class="directions-question__info-text">
              Это особенно актуально для пациентов с ограниченной<br> подвижностью, послеоперационными состояниями или<br>
              в период восстановления после серьёзных заболеваний
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Симптомы новый-->
    <section class="directions-simptom relative">
      <div class="container">
        <h2 class="directions-simptom__title _title">
          С какими симптомами<br>
          нужно обратиться?
        </h2>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="directions-simptom__items grid-3">
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              При высокой температуре и слабости,<br> когда нет возможности добраться до<br> клиники
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              После перенесённого инсульта<br> или серьёзных травм
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              В период реабилитации<br>
              после операций
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              При хронических заболеваниях,<br> требующих регулярного наблюдения
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Для проведения плановых процедур<br>
              и анализов без посещения медицинского учреждения​
            </h4>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- Форма обратной связи (2 вариант) новый -->
  <section class="directions-callback">
    <div class="container">
      <div class="directions-callback__inner _image-wrapper">
        <img class="directions-callback__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/directions-callback-2.webp" alt="directions-callback-2">
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
            <input class="directions-callback__form-inp _input" type="tel" name="phone" required placeholder="Введите номер телефона">
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
  <!-- Врач с цитатами (space-null убирает отступ? --- ДА) -->
  <section class="quote-block space-top">
    <div class="container">
      <div class="quote-block__content relative">
        <img class="quote-block__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-block-men-1.webp" alt="men-1">
        <div class="overlay"></div>
        <div class="quote-block__inner">
          <div class="quote-block__left">
            <div class="quote-block__left-icon">
              <?php include(get_template_directory() . '/assets/images/icons/dots.svg'); ?>
            </div>
            <p class="quote-block__left-text">
              «Домашний визит врача — это не только<br> удобство, но и возможность обеспечить вам<br> индивидуальный подход в привычной<br> обстановке, что способствует более<br> эффективному лечению и восстановлению»
            </p>
          </div>
          <div class="quote-block__right">
            <h5 class="quote-block__right-name">
              Хасанов Абдулла Александрович
            </h5>
            <p class="quote-block__right-text">
              Врач уролог, хирург, УЗД
            </p>
            <p class="quote-block__right-exp">
              Стаж 13 лет
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Блок с видео -->
  <section class="video-block">
    <div class="container relative">
      <h2 class="video-block__title _title">
        Посмотрите видео о том,
      </h2>
      <p class="video-block__subtitle _subtitle">
        как услуги на дому от Abakumov Clinic помогают обеспечить непрерывность медицинского наблюдения,<br>
        своевременно реагировать на изменения в состоянии здоровья и повышать качество жизни пациентов
      </p>
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
  <div class="wrapper-gray">
    <!-- Симптомы (space-null убирает отступ?) -->
    <section class="directions-simptom relative space-null">
      <div class="container">
        <h2 class="directions-simptom__title _title">
          Какие услуги<br>
          предоставляются на дому?
        </h2>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="directions-simptom__items grid-4">
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Выезд терапевта и<br> узких специалистов
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Проведение функциональной<br> диагностики (включая УЗИ)
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Постановка капельниц<br>
              и инъекций
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Забор анализов
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Лечебно-восстановительные<br> процедуры после операций<br>
              и травм
            </h4>
          </div>
        </div>
      </div>
    </section>
    <!-- Врач с цитатами (space-null убирает отступ? --ДА) -->
    <section class="quote-block">
      <div class="container">
        <div class="quote-block__content relative">
          <img class="quote-block__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-block-men-1.webp" alt="men-1">
          <div class="overlay"></div>
          <div class="quote-block__inner">
            <div class="quote-block__left">
              <div class="quote-block__left-icon">
                <?php include(get_template_directory() . '/assets/images/icons/dots.svg'); ?>
              </div>
              <p class="quote-block__left-text">
                «Мы стремимся сделать медицинскую<br> помощь максимально доступной и<br> комфортной для каждого пациента,<br> предоставляя полный спектр услуг<br> прямо у вас дома»
              </p>
            </div>
            <div class="quote-block__right">
              <h5 class="quote-block__right-name">
                Хасанов Абдулла Александрович
              </h5>
              <p class="quote-block__right-text">
                Врач уролог, хирург, УЗД
              </p>
              <p class="quote-block__right-exp">
                Стаж 13 лет
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Что может выявить -->
    <section class="examination-reveals">
      <div class="container">
        <h2 class="examination-reveals__title _title">
          Преимущества услуг на дому<br>
          от Abakumov Clinic
        </h2>
        <div class="examination-reveals__inner">
          <div class="examination-reveals__right">
            <div class="cursor">
              <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
            </div>
            <div class="examination-reveals__items grid-3">
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Индивидуальный подход и<br> внимание к каждому пациенту
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Современное оборудование<br> и высококвалифицированные<br> специалисты
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Экономия<br>
                  времени и сил
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Возможность получения<br> медицинской помощи в комфортной<br> и привычной обстановке
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Гибкий график и оперативность<br> выезда специалистов
                </h4>
              </div>
            </div>
            <div class="examination-reveals__right-btns items-center">
              <a class="examination-reveals__btn _gray-btn" href="#" data-fancybox>
                <span>Записаться на прием</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
              </a>
              <a class="examination-reveals__arrow-btn" href="#">
                <span class="examination-reveals__btn-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                </span>
                <span>Записаться через WhatsApp</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Форма обратной связи (1 вариант) -->
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
            <input class="callback__form-inp _input" type="tel" name="phone" required placeholder="Введите номер телефона">
            <button class="callback__form-btn _gray-btn">
              Получите консультацию
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
  <!-- Этапы прохождения -->
  <section class="checkup-stages _section-lg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/checkup-stages-bg-4.webp);">
    <div class="container">
      <h2 class="checkup-stages__title _title">
        Как проходит<br>
        оказание услуг на дому
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
            Оформление<br>
            заявки
          </h4>
          <p class="checkup-stages__elem-text">
            свяжитесь с нами по телефону или через сайт
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
            Подтверждение
            визита
          </h4>
          <p class="checkup-stages__elem-text">
            уточнение времени и перечня необходимых процедур
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
            Выезд специалиста
          </h4>
          <p class="checkup-stages__elem-text">
            врач или медсестра прибывают в согласованное время
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
            Проведение процедур
          </h4>
          <p class="checkup-stages__elem-text">
            осмотр, диагностика, лечение или забор анализов
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
            Рекомендации
            и наблюдение
          </h4>
          <p class="checkup-stages__elem-text">
            при необходимости, составление плана дальнейших действий и наблюдение за состоянием пациента
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Стоимость лечения -->
  <section class="directions-price">
    <div class="container">
      <h2 class="directions-price__title _title">
        Стоимость<br>
        диагностики и лечения
      </h2>
      <div class="directions-price__accordion accordion">
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                01
              </span>
              <h4 class="directions-price__item-title">
                Консультации
              </h4>
            </div>
            <div class="open-item directions-price__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
            </div>
          </div>
          <div class="directions-price__item-body accordion-body">
            <div class="directions-price__item-costs">
              <div class="directions-price__item-cost">
                <h5 class="directions-price__item-name">
                  Прием (осмотр, консультация) врача-уролог,<br>
                  первичный
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    10 000 ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn" href="#">
                    Записаться
                  </a>
                </div>
              </div>
              <div class="directions-price__item-cost">
                <h5 class="directions-price__item-name">
                  Прием (осмотр, консультация) врача-уролог,<br>
                  повторный
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    9 000 ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn" href="#">
                    Записаться
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-bg _section-lg">
    <!-- Медицина нового уровня -->
    <section class="new-level">
      <img class="new-level__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="new-level__title _title">
          Медицина нового уровня<br>
          в Abakumov Clinic
        </h2>
        <img class="new-level__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="new-level__items">
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-1.svg'); ?>
            </span>
            <h4 class="new-level__item-title">
              Опытнейшие профильные<br> врачи Москвы
            </h4>
            <p class="new-level__item-text">
              Чекапы проводят профильные<br> специалисты с большим опытом<br> диагностики и ведения сложных<br>
              случаев
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-2.svg'); ?>
            </span>
            <h4 class="new-level__item-title">
              Персональный координатор<br>
              всегда на связи
            </h4>
            <p class="new-level__item-text">
              Вас сопровождает персональный<br> ассистент: ответит на вопросы, согласует<br> график посещений и
              проконтролирует<br> каждый этап
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-3.svg'); ?>

            </span>
            <h4 class="new-level__item-title">
              Только доказательная<br> медицина
            </h4>
            <p class="new-level__item-text">
              Все обследования и рекомендации<br> соответствуют актуальным <br>клиническим протоколам
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-4.svg'); ?>

            </span>
            <h4 class="new-level__item-title">
              Глубокая диагностика<br> системных рисков
            </h4>
            <p class="new-level__item-text">
              Чекапы направлены не только на выявление<br> симптомов, но и на диагностику фоновых<br> нарушений:
            </p>
            <ul class="new-level__item-list">
              <li class="new-level__item-point">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

                <span>сосудистых</span>
              </li>
              <li class="new-level__item-point">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

                <span>гормональных</span>
              </li>
              <li class="new-level__item-point">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

                <span>аутоиммунных</span>
              </li>
              <li class="new-level__item-point">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

                <span>метаболических</span>
              </li>
            </ul>
            <p class="new-level__item-text">
              <span>Это позволяет действовать на опережение</span>
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-5.svg'); ?>

            </span>
            <h4 class="new-level__item-title">
              Полный цикл — от диагностики<br> до персонального плана действий
            </h4>
            <p class="new-level__item-text">
              По результатам чек-апа вы получаете<br> подробный разбор результатов и<br> выверенный план
              профилактики,<br> терапии или наблюдения
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-6.svg'); ?>

            </span>
            <h4 class="new-level__item-title">
              Максимальный комфорт<br> на всех этапах
            </h4>
            <p class="new-level__item-text">
              Чёткий график, отсутствие ожидания,<br> внимание к мелочам и премиальный<br> уровень заботы о здоровье
            </p>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- Блок отзывов (изображения вытянутые) -->
  <section class="checkup-reviews _section-lg">
    <div class="container">
      <div class="checkup-reviews__top">
        <h2 class="checkup-reviews__title _title">
          Более 1 500 пациентов прошли<br> обследование в 2025 году
        </h2>
        <div class="checkup-reviews__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
        </div>
      </div>
      <div class="checkup-reviews__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp" alt="checkup-reviews-1">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp" alt="checkup-reviews-2">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp" alt="checkup-reviews-3">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp" alt="checkup-reviews-4">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp" alt="checkup-reviews-5">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Видео-отзывы -->
  <section class="checkup-after _section-lg">
    <div class="container">
      <h2 class="checkup-after__title _title">
        Или узнайте больше о том,<br>
        как проходило лечение в клинике<br>
        из интервью с пациентами
      </h2>
      <div class="checkup-after__items">
        <div class="checkup-after__item">
          <a class="checkup-after__item-link" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-1.webp" data-fancybox>
            <img class="checkup-after__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-1.webp" alt="checkup-after-1">
            <div class="play">
              <div class="play__inner">
                <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
              </div>
            </div>
          </a>
          <h4 class="checkup-after__item-text">
            «Прошёл чекап за один день —<br> спокойно, без очередей. Получил <br>чёткие рекомендации и ответы на всё»
          </h4>
        </div>
        <div class="checkup-after__item">
          <a class="checkup-after__item-link" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-2.webp" data-fancybox>
            <img class="checkup-after__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-2.webp" alt="checkup-after-2">
            <div class="play">
              <div class="play__inner">
                <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
              </div>
            </div>
          </a>
          <h4 class="checkup-after__item-text">
            «Сервис как в премиум-отеле, но с<br> медицинской точностью. Понравилось,<br> что ничего лишнего»
          </h4>
        </div>
        <div class="checkup-after__item">
          <a class="checkup-after__item-link" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-3.webp" data-fancybox>
            <img class="checkup-after__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-3.webp" alt="checkup-after-3">
            <div class="play">
              <div class="play__inner">
                <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
              </div>
            </div>
          </a>
          <h4 class="checkup-after__item-text">
            «Получил ответы на вопросы, которые<br> годами игнорировали другие врачи.<br> Спасибоза подход»
          </h4>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-bg _section-lg">
    <!-- Рейтинг клиники -->
    <section class="rating">
      <span class="rating__top-num">
        10
      </span>
      <div class="container">
        <h2 class="rating__title _title">
          Abakumov Clinic входит<br>
          в ТОП-10 частных клиник<br>
          превентивной медицины Москвы
        </h2>
        <p class="rating__subtitle _subtitle">
          по рейтингу и количеству отзывов на независимых площадках
        </p>
        <div class="rating__top">
          <div class="rating__top-left">
            <h3 class="rating__top-title">
              Максимальные оценки<br>
              в сервисе <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-yandex.webp" alt="rating-yandex">
            </h3>
            <img class="rating__top-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-num.webp" alt="rating-num">
          </div>
          <div class="cursor rating__elems-cursor">
            <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
          </div>
          <div class="rating__elems">
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Персонал
                </h5>
                <p class="rating__elem-percent">
                  98%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                172 отзыва
              </p>
            </div>
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Качество лечения
                </h5>
                <p class="rating__elem-percent">
                  98%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                85 отзывов
              </p>
            </div>
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Анализы
                </h5>
                <p class="rating__elem-percent">
                  98%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                41 отзыв
              </p>
            </div>
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Интерьер
                </h5>
                <p class="rating__elem-percent">
                  100%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                40 отзывов
              </p>
            </div>
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Время ожидания
                </h5>
                <p class="rating__elem-percent">
                  91%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                22 отзыва
              </p>
            </div>
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Медицинский осмотр
                </h5>
                <p class="rating__elem-percent">
                  100%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                13 отзывов
              </p>
            </div>
            <div class="rating__elem">
              <div class="rating__elem-top">
                <h5 class="rating__elem-title">
                  Расположение
                </h5>
                <p class="rating__elem-percent">
                  98%
                  <?php include(get_template_directory() . '/assets/images/icons/finger.svg'); ?>
                </p>
              </div>
              <p class="rating__elem-text">
                13 отзывов
              </p>
            </div>
          </div>
          <div class="rating__right swiper-navigation">
            <div class="swiper-button-prev swiper-navigation__prev">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
            <div class="swiper-button-next swiper-navigation__next">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
        </div>
        <div class="rating__swiper swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide rating__slide">
              <a class="rating__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/rating-1.webp" data-fancybox="rating-gallery">
                <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-1.webp" alt="rating-1">
              </a>
            </div>
            <div class="swiper-slide rating__slide">
              <a class="rating__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/rating-2.webp" data-fancybox="rating-gallery">
                <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-2.webp" alt="rating-2">
              </a>
            </div>
            <div class="swiper-slide rating__slide">
              <a class="rating__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/rating-3.webp" data-fancybox="rating-gallery">
                <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-3.webp" alt="rating-3">
              </a>
            </div>
            <div class="swiper-slide rating__slide">
              <a class="rating__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/rating-1.webp" data-fancybox="rating-gallery">
                <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-1.webp" alt="rating-1">
              </a>
            </div>
          </div>
        </div>
        <div class="rating__links">
          <a class="rating__link" href="#" target="_blank">
            <img class="rating__link-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating__logo-1.webp" alt="rating-logo">
            <div class="rating__link-center">
              <?php include(get_template_directory() . '/assets/images/icons/star.svg'); ?>
              <p class="rating__link-num">
                5
              </p>
              <p class="rating__link-grade">
                52 оценки
              </p>
            </div>
            <div class="rating__link-right">
              <p class="arrow-icon">
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </p>
              <span class="rating__right-text">
                Открыть отзывы
              </span>
            </div>
          </a>
          <a class="rating__link" href="#" target="_blank">
            <img class="rating__link-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating__logo-2.webp" alt="rating-logo">
            <div class="rating__link-center">
              <?php include(get_template_directory() . '/assets/images/icons/star.svg'); ?>
              <p class="rating__link-grade">
                19 отзывов
              </p>
            </div>
            <div class="rating__link-right">
              <p class="arrow-icon">
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </p>
              <span class="rating__right-text">
                Открыть отзывы
              </span>
            </div>
          </a>
        </div>
      </div>
    </section>

  </div>


  <!-- Комфорт -->
  <section class="care-comfort">
    <div class="container">
      <h2 class="care-comfort__title _title">
        С заботой о вашем комфорте
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="care-comfort__items">
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-1.webp" alt="care-comfort-1">
          </div>
          <h4 class="care-comfort__item-title">
            Удобная парковка
          </h4>
        </div>
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-2.webp" alt="care-comfort-2">
          </div>
          <h4 class="care-comfort__item-title">
            Бесплатный трансфер<br>
            для пациентов из Москвы и МО
          </h4>
        </div>
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-3.webp" alt="care-comfort-3">
          </div>
          <h4 class="care-comfort__item-title">
            Личный кабинет с доступом <br>к результатам 24/7
          </h4>
        </div>
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-4.webp" alt="care-comfort-4">
          </div>
          <h4 class="care-comfort__item-title">
            VIP-зоны ожидания
          </h4>
        </div>
      </div>
    </div>
  </section>

  <div class="divider"></div>
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
            <input class="_input map-block__form-inp" type="tel" name="phone" required placeholder="Введите номер телефона">
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