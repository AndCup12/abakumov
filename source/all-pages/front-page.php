<?php get_header(); ?>
<main class="main">
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          Abakumov Clinic — пространство
          медицины будущего
        </h1>
        <p class="front-block__subtitle _subtitle">
          Здоровье с эстетикой. В каждом этапе жизни.
        </p>
        <img class="front-block__yandex" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-yandex.webp" alt="front-block-yandex">
        <img class="front-block__right" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-2.webp" alt="front-block-2">
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
    <img class="front-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
  </section>
  <section class="comfort">
    <div class="container">
      <div class="comfort__top">
        <div class="comfort__left">
          <div class="comfort__left-top">
            <h2 class="comfort__title _title">
              Комфорт как дома. <br>
              Забота — на каждом шаге
            </h2>
            <p class="comfort__suptitle">
              Никаких стерильных<br> коридоров, шумных<br> регистратур и очередей
            </p>
          </div>
          <div class="comfort__subtitle _subtitle">
            С первых секунд, когда вы перешагиваете порог нашей клиники, <br>
            привычный образ медицинского учреждения растворяется
          </div>
        </div>
        <div class="comfort__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
        </div>
      </div>
      <div class="comfort__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide comfort__slide">
            <div class="comfort__item">
              <div class="comfort__item-wrapper">
                <img class="comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/comfort-1.webp" alt="comfort-1">
              </div>
              <div class="comfort__item-info">
                <p class="comfort__item-text">
                  <span>Уютные зоны отдыха, кафе-лаундж<br>
                    и тишина,</span> где можно восстановиться<br> до или после процедур
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide comfort__slide">
            <div class="comfort__item">
              <div class="comfort__item-wrapper">
                <img class="comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/comfort-2.webp" alt="comfort-2">
              </div>
              <div class="comfort__item-info">
                <p class="comfort__item-text">
                  <span>Доброжелательный персонал,<br></span> который встречает, сопровождает<br> и всегда рядом,
                  если нужно
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide comfort__slide">
            <div class="comfort__item">
              <div class="comfort__item-wrapper">
                <img class="comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/comfort-3.webp" alt="comfort-3">
              </div>
              <div class="comfort__item-info">
                <p class="comfort__item-text">
                  <span>Тёплый свет, мягкие интерьеры,<br> внимание к деталям</span> — всё, чтобы вы<br> чувствовали
                  себя не пациентом, а<br> гостем уровня five stars
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide comfort__slide">
            <div class="comfort__item">
              <div class="comfort__item-wrapper">
                <img class="comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/comfort-4.webp" alt="comfort-4">
              </div>
              <div class="comfort__item-info">
                <p class="comfort__item-text">
                  <span>Даже процедуры проходят мягко:<br></span> во время капельниц — LED-маски,<br> массажёры
                  BORK, VR-очки для<br> снятия тревог
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="divider"></div>
  <section class="just-treat">
    <div class="container">
      <div class="just-treat__top">
        <div class="just-treat__left">
          <div class="just-treat__left-top">
            <h2 class="just-treat__title _title">
              Мы не просто лечим —
            </h2>
          </div>
          <div class="just-treat__subtitle _subtitle">
            мы формируем новое представление о том,<br> какой должна быть медицина
          </div>
        </div>
        <div class="just-treat__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>

          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>

          </div>
        </div>
      </div>
      <div class="just-treat__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide just-treat__slide">
            <img class="just-treat__item" src="<?php echo get_template_directory_uri(); ?>/assets/images/just-treat-1.webp" alt="just-treat-1">
          </div>
          <div class="swiper-slide just-treat__slide">
            <img class="just-treat__item" src="<?php echo get_template_directory_uri(); ?>/assets/images/just-treat-2.webp" alt="just-treat-2">
          </div>
          <div class="swiper-slide just-treat__slide">
            <img class="just-treat__item" src="<?php echo get_template_directory_uri(); ?>/assets/images/just-treat-3.webp" alt="just-treat-3">
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-bg _section-lg">
    <section class="ready-programs">
      <div class="container">
        <h2 class="ready-programs__title _title">
          Готовые программы<br>
          под разные цели
        </h2>
        <p class="ready-programs__subtitle _subtitle">
          красота и омоложение, восстановление энергии,<br> профилактика болезней и многодругое
        </p>
        <h3 class="ready-programs__items-title">
          Что входит в Check-Up
        </h3>
        <div class="ready-programs__items">
          <div class="ready-programs__item">
            <div class="ready-programs__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="ready-programs__item-title">
              Консультации<br>
              профильных специалистов
            </h4>
            <p class="ready-programs__item-text">
              и составление индивидуальной<br>
              программы обследовани
            </p>
          </div>
          <div class="ready-programs__item">
            <div class="ready-programs__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="ready-programs__item-title">
              Лабораторные <br>анализы
            </h4>
          </div>
          <div class="ready-programs__item">
            <div class="ready-programs__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="ready-programs__item-title">
              Инструментальные <br>исследования:
            </h4>
            <p class="ready-programs__item-text">
              УЗИ, ЭКГ, МРТ и др.
            </p>
          </div>
          <div class="ready-programs__item">
            <div class="ready-programs__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
            </div>
            <h4 class="ready-programs__item-title">
              Индивидуальные <br>рекомендации<br>
              по результатам<br> обследования​
            </h4>
          </div>
        </div>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="ready-programs__elems">
          <div class="ready-programs__elem">
            <div class="ready-programs__elem-wrapper">
              <img class="ready-programs__elem-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ready-programs-1.webp" alt="ready-programs-1">
            </div>
            <div class="ready-programs__elem-info">
              <h4 class="ready-programs__elem-title">
                Программы Check-Up <br>
                для женщин
              </h4>
              <a class="ready-programs__elem-btn _gray-btn" href="#">
                <span>Выбрать программу</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

              </a>
            </div>
          </div>
          <div class="ready-programs__elem">
            <div class="ready-programs__elem-wrapper">
              <img class="ready-programs__elem-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ready-programs-2.webp" alt="ready-programs-2">
            </div>
            <div class="ready-programs__elem-info">
              <h4 class="ready-programs__elem-title">
                Программы Check-Up <br>
                для мужчин
              </h4>
              <a class="ready-programs__elem-btn _gray-btn" href="#">
                <span>Выбрать программу</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
              </a>
            </div>
          </div>
          <div class="ready-programs__elem">
            <div class="ready-programs__elem-wrapper">
              <img class="ready-programs__elem-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ready-programs-3.webp" alt="ready-programs-3">
            </div>
            <div class="ready-programs__elem-info">
              <h4 class="ready-programs__elem-title">
                Специальные <br>
                программы
              </h4>
              <a class="ready-programs__elem-btn _gray-btn" href="#">
                <span>Выбрать программу</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="consultation _image-wrapper">
      <div class="container">
        <h2 class="consultation__title _title">
          Консилиум экспертов: когда решает
          команда, а не один врач
        </h2>
        <p class="consultation__subtitle _subtitle">
          Мы объединяем мнения 27 врачей высшей категории,<br>
          в том числе кандидатов медицинских наук и их клинический опыт,
        </p>
        <p class="consultation__text">
          чтобы найти наиболее точный диагноз и эффективный путь к восстановлению
        </p>
        <a class="consultation__btn _main-btn" href="#">
          Узнать о врачах подробнее
        </a>
        <img class="consultation__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
      </div>
    </section>
  </div>
  <section class="services">
    <div class="container">
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="services__items">
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-1.webp" alt="services-1">
          </div>
          <span class="services__item-num">01</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              В Abakumov Clinic нет шаблонов<br> и отказов. Есть решения
            </h4>
            <p class="services__item-text">
              Мы гибко адаптируем программы<br> под ваши цели, график и<br> особенности здоровья
            </p>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-2.webp" alt="services-2">
          </div>
          <span class="services__item-num">02</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Персонализированная диагностика<br> — точность без потери времени
            </h4>
            <p class="services__item-text">
              Это не просто чекап — это чёткое<br> понимание, что происходит с вашим<br> телом и куда двигаться
              дальше
            </p>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-3.webp" alt="services-3">
          </div>
          <span class="services__item-num">03</span>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Назначения проходят двойную<br> проверку: технология + эксперт
            </h4>
            <p class="services__item-text">
              Все назначения проходят цифровую<br> проверку и утверждаются главным<br> врачом — для максимальной
              <br>точности и безопасности лечения
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="catalog _section-lg">
    <div class="container">
      <h2 class="catalog__title _title">
        Только доказательная<br>
        медицина
      </h2>
      <p class="catalog__subtitle _subtitle">
        Проводим лечение по современным международным протоколам,<br> одобренным медицинскими сообществами
      </p>
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
  <section class="callback">
    <div class="container">
      <div class="callback__inner _image-wrapper">
        <div class="callback__left">
          <h2 class="callback__title _title">
            Премиум- <br>сервис с личным<br> помощником <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/callback-1.svg" alt=""><br>24/7
          </h2>
          <div class="callback__info">
            <img class="callback__info-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/callback-manager.webp" alt="callback-manager">
            <p class="callback__info-text">
              Ваш куратор<br> сопровождает<br>
              на каждом этапе:<br>
              от записи до получения<br> результатов
            </p>
          </div>
        </div>
        <form class="callback__form form-submit" action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Получить консультацию">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <h4 class="callback__form-title">
            Обратитесь к личному помощнику уже сейчас абсолютно бесплатно
          </h4>
          <p class="callback__form-subtitle">
            Введите телефон в форме ниже и мы перезвоним вам <span>в течение 7 минут</span>
          </p>
          <div class="callback__form-inputs">
            <input class="callback__form-inp _input" type="tel" name="phone" required placeholder="Введите номер телефона">
            <button class="callback__form-btn _gray-btn">
              Получить консультацию
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
  <section class="video-block">
    <div class="container relative">
      <div class="video-block__icon">
        <?php include(get_template_directory() . '/assets/images/icons/av.svg'); ?>
      </div>
      <h2 class="video-block__title _title">
        Клиника стала<br>
        воплощениемопыта,
      </h2>
      <p class="video-block__subtitle _subtitle">
        ценностей и медицинской философии основателя
      </p>
      <a class="video-block__video" href="#" data-fancybox>
        <img class="video-block__video-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-block-1.webp" alt="video-block-1">
        <div class="play">
          <div class="play__inner">
            <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
          </div>
        </div>
      </a>
      <a class="video-block__btn _gray-btn" href="#">
        Узнать о клинике больше
      </a>
      <img class="video-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-block-2.webp" alt="video-block-2">
    </div>
  </section>
  <section class="reviews _section-lg">
    <div class="container">
      <div class="reviews__top">
        <h2 class="reviews__title _title">
          Свое здоровье нам доверяют<br> блогеры и лидеры мнений
        </h2>
        <div class="reviews__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>

          </div>
        </div>
      </div>
      <div class="reviews__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide reviews__slide">
            <div class="reviews__item">
              <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-1.webp" alt="reviews-1">
              <a class="reviews__item-wrapper" href="#" data-fancybox>
                <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-1-1.webp" alt="reviews-1-1">
                <div class="play">
                  <div class="play__inner">
                    <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide reviews__slide">
            <div class="reviews__item">
              <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-2.webp" alt="reviews-2">
              <a class="reviews__item-wrapper" href="#" data-fancybox>
                <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-2-1.webp" alt="reviews-2-1">
                <div class="play">
                  <div class="play__inner">
                    <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide reviews__slide">
            <div class="reviews__item">
              <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-3.webp" alt="reviews-3">
              <a class="reviews__item-wrapper" href="#" data-fancybox>
                <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-3-1.webp" alt="reviews-3-1">
                <div class="play">
                  <div class="play__inner">
                    <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="swiper-slide reviews__slide">
            <div class="reviews__item">
              <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-4.webp" alt="reviews-4">
              <a class="reviews__item-wrapper" href="#" data-fancybox>
                <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-4-1.webp" alt="reviews-4-1">
                <div class="play">
                  <div class="play__inner">
                    <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a class="reviews__btn _gray-btn" href="#">
        Посмотреть больше отзывов
      </a>
    </div>
    <p class="reviews__bottom-text">
      нам доверяют
    </p>
  </section>
  <section class="contacts">
    <div class="container">
      <h2 class="contacts__title _title">
        Abakumov Clinic — это <br>уверенность, системность и живое<br> участие в вашем восстановлении
      </h2>

      <p class="contacts__subtitle">
        Ждем вас ежедневно с 8.00 до 20.00
      </p>

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