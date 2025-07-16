<?php

/**
 * Template Name: Статьи 
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<!-- 
страница Статьи 
-->

<main class="main" id="article-page">
  <!-- Первый блок (нет картинки докторов) -->
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li class="breadcrumbs__point">
            <a class="breadcrumbs__link" href="#">Главная</a>
          </li>
          <li class="breadcrumbs__point">
            <a class="breadcrumbs__link" href="#">Статьи</a>
          </li>
          <li class="breadcrumbs__point">
            <a class="breadcrumbs__link active" href="#">Почему «лечить по симптомам» больше не работает</a>
          </li>
        </ul>
      </div>
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          Почему «лечить по симптомам»<br>
          больше не работает:
        </h1>
        <p class="front-block__subtitle _subtitle">
          новый взгляд на персонализированную медицину
        </p>
      </div>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
          <span>Записаться на прием</span>
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79031003195" target="_blank">
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
          <span>Записаться через WhatsApp</span>
        </a>
      </div>
    </div>
  </section>
  <!-- Новый блок с контентом и формой -->
  <section class="content-block">
    <div class="container">
      <div class="content-block__inner">
        <div class="content-block__left">
          <div class="content-block__left-inner theContent">
            <p>
              Многие привыкли обращаться к врачу, только когда что-то явно беспокоит: заболела голова — выпил обезболивающее, появилось вздутие — попил ферменты, не спишь — ищешь «волшебную» таблетку. Но медицина изменилась. А вместе с ней — и подход к здоровью.
            </p>
            <p>
              Симптомы — это всего лишь поверхность. Они не объясняют, почему организм дал сбой. Настоящая причина может лежать глубже: гормональные нарушения, хроническое воспаление, дефицит микроэлементов, нарушение регуляции со стороны нервной системы. И если ограничиться лечением симптомов — можно на время заглушить проявления, но не остановить процесс.
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacts-1.webp" alt="title">
            <p>
              Многие привыкли обращаться к врачу, только когда что-то явно беспокоит: заболела голова — выпил обезболивающее, появилось вздутие — попил ферменты, не спишь — ищешь «волшебную» таблетку. Но медицина изменилась. А вместе с ней — и подход к здоровью.
            </p>
            <p>
              Симптомы — это всего лишь поверхность. Они не объясняют, почему организм дал сбой. Настоящая причина может лежать глубже: гормональные нарушения, хроническое воспаление, дефицит микроэлементов, нарушение регуляции со стороны нервной системы. И если ограничиться лечением симптомов — можно на время заглушить проявления, но не остановить процесс.
            </p>
          </div>
        </div>
        <form class="content-block__form form-submit relative" action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Есть вопросы или хотите записаться по телефону?">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <div class="content-block__form-inner">
            <h4 class="content-block__form-title _title">
              Заполните форму
            </h4>
            <p class="content-block__form-subtitle">
              Введите телефон в форме ниже
            </p>
            <div class="content-block__form-inputs">
              <input class="content-block__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона">
              <button class="content-block__form-btn _gray-btn">
                Записаться на консультацию
              </button>
            </div>
            <p class="content-block__form-politic politic-text">
              Нажимая на кнопку, вы соглашаетесь с <a href="#politics" data-fancybox>
                Политикой конфиденциальности
              </a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <div class="divider"></div>
  <section class="link-items space-top">
    <div class="container">
      <h2 class="link-items__title _title">
        Рекомендованные статьи
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="link-items__services">
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-4.webp" alt="link-items-4">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-text">
              Abakumov Clinic запускает корпоративные чекапы нового поколения — персонально под задачи бизнеса
            </h4>
            <div class="link-items__service-btn _gray-btn left-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-5.webp" alt="link-items-5">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-text">
              Открыт VIP-дневной стационар: комфорт на уровне пятизвёздочного отеля теперь доступен пациентам
            </h4>
            <div class="link-items__service-btn _gray-btn left-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-6.webp" alt="link-items-6">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-text">
              Abakumov Clinic вошла в топ-10 частных клиник Москвы по уровню сервиса по версии Zdrav.Media
            </h4>
            <div class="link-items__service-btn _gray-btn left-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- в блок внутри обертки добавил заголовок. Также добавил новые классы padding-bottom и padding-top - чтобы можно было делать внутренние отступы в блоке -->
  <div class="wrapper-bg _section-lg">
    <section class="link-items padding-bottom padding-top">
      <img class="link-items__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="link-items__title _title">
          Узнайте больше о клинике
        </h2>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="link-items__services">
          <a class="link-items__service white-bg" href="#">
            <div class="link-items__service-wrapper">
              <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-6.webp" alt="link-items-6">
            </div>
            <div class="link-items__service-info">
              <h4 class="link-items__service-title">
                Преимущества клиники
              </h4>
              <div class="link-items__service-btn _gray-btn">
                <span>Узнать подробнее</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

              </div>
            </div>
          </a>
          <a class="link-items__service white-bg" href="#">
            <div class="link-items__service-wrapper">
              <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-7.webp" alt="link-items-7">
            </div>
            <div class="link-items__service-info">
              <h4 class="link-items__service-title">
                Отзывы
              </h4>
              <div class="link-items__service-btn _gray-btn">
                <span>Узнать подробнее</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

              </div>
            </div>
          </a>
          <a class="link-items__service white-bg" href="#">
            <div class="link-items__service-wrapper">
              <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-8.webp" alt="link-items-8">
            </div>
            <div class="link-items__service-info">
              <h4 class="link-items__service-title">
                Чек-апы
              </h4>
              <div class="link-items__service-btn _gray-btn">
                <span>Узнать подробнее</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

              </div>
            </div>
          </a>
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
            Есть вопросы<br> или хотите <br>записаться<br>
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
            и получите консультацию специалиста
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
    <section class="new-level">
      <img class="new-level__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="new-level__title _title">
          Почему выбирают Abakumov Clinic
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