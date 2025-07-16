<?php

/**
 * Template Name: Для бизнеса
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<!-- 
страница Для бизнеса
-->

<main class="main" id="business-page">
  <!-- Первый блок (нет картинки докторов) -->
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          Abakumov Clinic для бизнеса
        </h1>
        <p class="front-block__subtitle _subtitle">
          Корпоративная медицина нового уровня: забота о здоровье сотрудников<br> без посредников и формальностей
        </p>
      </div>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
          <span>Получить консультацию</span>
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79031003195" target="_blank">
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
          <span>Задать вопросы через WhatsApp</span>
        </a>
      </div>
    </div>
  </section>
  <section class="checkup-is">
    <div class="container">
      <div class="checkup-is__inner">
        <div class="checkup-is__inner-left">
          <h3 class="checkup-is__inner-title _title">
            Что мы предлагаем<br> корпоративным<br> клиентам?
          </h3>
          <p class="checkup-is__inner-subtitle">
            Мы создаём индивидуальные<br> программы медицинского<br> сопровождения, которые помогают:
          </p>
          <ul class="checkup-is__inner-list">
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                    fill="white" />
                </svg>

              </span>
              <p class="checkup-is__inner-text">
                выявить скрытые риски у сотрудников
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                    fill="white" />
                </svg>

              </span>
              <p class="checkup-is__inner-text">
                поддерживать высокий уровень энергии и<br> работоспособности в коллективе
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                    fill="white" />
                </svg>

              </span>
              <p class="checkup-is__inner-text">
                минимизировать затраты компании на лечение,<br> больничные и текучку
              </p>
            </li>
          </ul>
        </div>
        <div class="checkup-is__inner-right">
          <div class="checkup-is__inner-wrapper relative">
            <img class="checkup-is__inner-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-is-5.webp" alt="checkup-is-5">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="callback ">
    <div class="container">
      <div class="callback__inner _image-wrapper relative">
        <div class="overlay"></div>
        <div class="callback__left relative">
          <h2 class="callback__title _title">
            Есть вопросы<br> корпоративным<br> программам?
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
  <!-- Здесь есть новый блок -->
  <div class="wrapper-gray _section-lg space-top">
    <!-- Новый блок -->
    <section class="why-works _section-lg">
      <div class="container">
        <h2 class="why-works__title _title">
          Почему выгодно работать<br> напрямую с клиникой,<br>
          а не через страховую?
        </h2>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="why-works__items">
          <div class="why-works__item">
            <span class="why-works__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </span>
            <h4 class="why-works__item-title">
              Программы подбираются<br> под задачи вашей компании:
            </h4>
            <p class="why-works__item-text">
              с учётом профессии, должности и<br> даже стресс-факторов в работе
            </p>
          </div>
          <div class="why-works__item">
            <span class="why-works__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </span>
            <h4 class="why-works__item-title">
              Стоимость обслуживания ниже,<br> чем при работе со страховыми —
            </h4>
            <p class="why-works__item-text">
              за счёт отсутствия посредников и<br> применения гибких тарифов. Чем больше<br> сотрудников, тем выгоднее цена за одного
            </p>
          </div>
          <div class="why-works__item">
            <span class="why-works__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </span>
            <h4 class="why-works__item-title">
              Все обследования, анализы<br> и лечение —
            </h4>
            <p class="why-works__item-text">
              в одной клинике без беготни и<br> бумажной волокиты. От УЗИ до<br> капельниц и ЭКГ — в одном визите
            </p>
          </div>
          <div class="why-works__item">
            <span class="why-works__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </span>
            <h4 class="why-works__item-title">
              Мы не ограничены рамками<br> страхового договора
            </h4>
            <p class="why-works__item-text">
              и оказываем помощь в сложных<br> ситуациях
            </p>
          </div>
          <div class="why-works__item">
            <span class="why-works__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </span>
            <h4 class="why-works__item-title">
              Налоговые льготы –
            </h4>
            <p class="why-works__item-text">
             вы получаете право на налоговый<br> вычет до 6% от ФОТ (ст. 255 НК РФ)
            </p>
          </div>
          <div class="why-works__item">
            <span class="why-works__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </span>
            <h4 class="why-works__item-title">
              Можно прикрепить не только<br> сотрудников, но и их близких
            </h4>
            <p class="why-works__item-text">
              в рамках расширенного<br> корпоративного пакета
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="examination-reveals">
      <div class="container">
        <h2 class="examination-reveals__title _title">
          Преимущества корпоративной<br>
          медицины на практике
        </h2>
        <div class="examination-reveals__inner">
          <div class="examination-reveals__left">
            <div class="examination-reveals__left-wrapper">
              <img class="examination-reveals__left-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/examination-reveals-4.webp"
                alt="examination-reveals-4">
            </div>
          </div>
          <div class="examination-reveals__right">
            <div class="cursor">
              <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
            </div>
            <div class="examination-reveals__items">
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  До 30% меньше
                  больничных листов
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Снижение текучести сотрудников
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Повышение лояльности и вовлечённости команды
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Имиджевая ценность для HR-бренда
                </h4>
              </div>
              <div class="examination-reveals__item">
                <div class="examination-reveals__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
                </div>
                <h4 class="examination-reveals__item-title">
                  Увеличение прибыли<br> компании за счёт здорового<br> и стабильного коллектива
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
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