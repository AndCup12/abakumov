<?php
get_header();
?>

<!--
страница Отзывы

-->

<main class="main" id="reviews-page">

  <!-- <?php echo renderBlocksSingleCheckup(); ?> -->

  <!-- Первый блок c картинками отзывов -->
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <h1 class="front-block__title _title">
        Отзывы о Abakumov Clinic
      </h1>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="front-block__reviews">
        <a class="front-block__review" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp" data-fancybox>
          <img class="front-block__review-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp" alt="">
        </a>
        <a class="front-block__review" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp" data-fancybox>
          <img class="front-block__review-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp" alt="">
        </a>
        <a class="front-block__review" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp" data-fancybox>
          <img class="front-block__review-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp" alt="">
        </a>
        <a class="front-block__review" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp" data-fancybox>
          <img class="front-block__review-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp" alt="">
        </a>
        <a class="front-block__review" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp" data-fancybox>
          <img class="front-block__review-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp" alt="">
        </a>
      </div>
    </div>
  </section>
  <!-- Новый блок - слайдер с отзывами  -->
  <section class="checkup-reviews-after _section-lg">
    <div class="container">
      <div class="checkup-reviews-after__top">
        <h2 class="checkup-reviews-after__title _title">
          Свое здоровье нам доверяют<br>
          блогеры и лидеры мнений
        </h2>
        <div class="checkup-reviews-after__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
        </div>
      </div>
      <div class="checkup-reviews-after__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide checkup-reviews-after__slide">
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
          </div>
          <div class="swiper-slide checkup-reviews-after__slide">
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
          </div>
          <div class="swiper-slide checkup-reviews-after__slide">
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
          <div class="swiper-slide checkup-reviews-after__slide">
            <div class="checkup-after__item">
              <a class="checkup-after__item-link"
                href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-1.webp" data-fancybox>
                <img class="checkup-after__item-img _img"
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-1.webp" alt="checkup-after-1">
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
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="checkup-reviews _section-lg">
    <div class="container">
      <div class="checkup-reviews__top">
        <h2 class="checkup-reviews__title _title">
          Честно. Уважительно. <br> По-настоящему. <br>
          Отзывы без редакции
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
