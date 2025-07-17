<?php

/**
 * Template Name: Доктора-single
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<main class="main" id="doctors-single">

<?php echo renderBlocksDoctors(); ?>
<!--
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            Абакумов Олег<br> Александрович
          </h1>
          <p class="front-block__subtitle _subtitle">
            Терапевт, пульмонолог, статус<br> «Московский врач»
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
            <img class="front-block__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-17.webp" alt="front-block-17">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="doctors-specialization">
    <div class="container">
      <div class="doctors-specialization__inner">
        <h2 class="doctors-specialization__title _title">
          Основные<br> заболевания,<br>
          на которых<br> специализируется<br> врач
        </h2>
        <div class="doctors-specialization__right">
          <ul class="doctors-specialization__list">
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                аллергические реакции
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                бронхиальная астма
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                новообразования в легких
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                саркоидоз
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                бронхоэктатическая болезнь
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                острый и хронический бронхит
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                пневмония или состояние после перенесенной пневмонии
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                кашель неясного генеза
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                хроническая обструктивная болезнь легких
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                дефициты
              </span>
            </li>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                сердечно-сосудистой системы
              </span>
            </li>
          </ul>
          <a class="doctors-specialization__btn _gray-btn" href="#">
            <span>Узнать о враче подробнее</span>
            <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
          </a>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-gray space-top">


    <section class="directions-simptom relative">
      <div class="container">
        <h2 class="directions-simptom__title _title">
          Вы можете записаться<br>
          по направлениям
        </h2>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="directions-simptom__items items-center d-flex">
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Аллергические реакции
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Бронхиальная астма
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Бронхит
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Пневмония
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Сердечно- <br>сосудистой системы​
            </h4>
          </div>
          <div class="directions-simptom__item">
            <div class="directions-simptom__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="directions-simptom__item-title">
              Дефициты
            </h4>
          </div>
        </div>
      </div>
    </section>

  </div>

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
                Общие манипуляции и процедуры
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
                  Ботулинотерапия при бруксизме/дисфункции височно-нижнечелюстного сустава 
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    25 000 ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn" href="#">
                    Записаться
                  </a>
                </div>
              </div>
              <div class="directions-price__item-cost">
                <h5 class="directions-price__item-name">
                  Лечение мигрени с применением моноклональных антител (Фреманезумаб (Аджови))
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    35 000 ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn" href="#">
                    Записаться
                  </a>
                </div>
              </div>
              <div class="directions-price__item-cost">
                <h5 class="directions-price__item-name">
                  Ботулинотерапия мигрени
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    43 000 ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn" href="#">
                    Записаться
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                02
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
                  Прием (осмотр, консультация) врача- невролога, первичный
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    8 000 ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn" href="#">
                    Записаться
                  </a>
                </div>
              </div>
              <div class="directions-price__item-cost">
                <h5 class="directions-price__item-name">
                  Прием (осмотр, консультация) врача-невролога, повторный
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    7 000 ₽
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

  <div class="wrapper-bg _section-lg">

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
  </section> -->

</main>

<?php get_footer(); ?>
