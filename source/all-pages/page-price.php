<?php

/**
 * Template Name: price
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<main class="main" id="price-page">
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
  <!-- Стоимость лечения -->
  <section class="directions-price">
    <div class="container">
      <h2 class="directions-price__title _title">
        Стоимость
      </h2>
      <form class="directions-price__form form-submit" action="#" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="from" value="Есть вопросы или хотите записаться по телефону?">
        <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
        <input class="directions-price__inp-search" type="text" name="search" placeholder="Поиск по услугам">
        <button class="directions-price__btn-search" type="submit">
          <?php include(get_template_directory() . '/assets/images/icons/search.svg'); ?>
        </button>
      </form>
      <div class="directions-price__accordion accordion">
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                01
              </span>
              <h4 class="directions-price__item-title">
                Вакцинация
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
                Оториноларингологические услуги
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                03
              </span>
              <h4 class="directions-price__item-title">
                Капельницы
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                04
              </span>
              <h4 class="directions-price__item-title">
                Косметологические манипуляции
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                05
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                06
              </span>
              <h4 class="directions-price__item-title">
                Помощь на дому
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                07
              </span>
              <h4 class="directions-price__item-title">
                Анестезиологические и реанимационные пособия
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                08
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                09
              </span>
              <h4 class="directions-price__item-title">
                Манипуляции хирургические
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                10
              </span>
              <h4 class="directions-price__item-title">
                Манипуляции акушерско-гинекологические
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                11
              </span>
              <h4 class="directions-price__item-title">
                Функциональная диагностика
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                12
              </span>
              <h4 class="directions-price__item-title">
                Ультразвуковые диагностические исследования
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                13
              </span>
              <h4 class="directions-price__item-title">
                Физиотерапевтическое отделение
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                14
              </span>
              <h4 class="directions-price__item-title">
                Чекапы/ программы/обследования
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
            </div>
          </div>
        </div>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                15
              </span>
              <h4 class="directions-price__item-title">
                Восполнение дефицитов внутривенно
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
          Каждый врач — это эксперт<br>
          в своём направлении,
        </h2>
        <p class="new-level__subtitle _subtitle">
          прошедший тщательный отбор
        </p>
        <a class="new-level__btn _main-btn" href="#">
          <span>Узнать о врачах подробнее</span>
          <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
        </a>
        <img class="new-level__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
      </div>
    </section>

  </div>
  <!-- Контакты -->
  <section class="contacts">
    <div class="container">
      <h2 class="contacts__title _title">
        Abakumov Clinic — это уверенность,<br>
        системность и живое участие<br>
        в вашем восстановлении
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