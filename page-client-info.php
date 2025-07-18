<?php get_header(); ?>


<main class="main" id="client-info">

  <?php echo renderBlocksClinicInfo(); ?>

  <?php echo contacts();?>

  <?php echo map();?>


  <!-- <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container relative">
      <h1 class="front-block__title _title">
        Информация для пациентов
      </h1>
    </div>
  </section>


  <section class="link-items">
    <div class="container">
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="link-items__services">
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-1.webp" alt="link-items-1">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-title">
              Оформление<br>
              налогового вычета
            </h4>
            <div class="link-items__service-btn _gray-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-2.webp" alt="link-items-2">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-title">
              Ответы на часто<br>
              задаваемые вопросы
            </h4>
            <div class="link-items__service-btn _gray-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-3.webp" alt="link-items-3">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-title">
              Подготовка<br>
              к визиту
            </h4>
            <div class="link-items__service-btn _gray-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-4.webp" alt="link-items-4">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-title">
              Заключение договора<br>
              с ООО «ДИ-МЕД»
            </h4>
            <div class="link-items__service-btn _gray-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
        <a class="link-items__service" href="#">
          <div class="link-items__service-wrapper">
            <img class="link-items__service-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/link-items-5.webp" alt="link-items-5">
          </div>
          <div class="link-items__service-info">
            <h4 class="link-items__service-title">
              Порядок проведения<br>
              взаиморасчетов за оказание<br>
              медицинских услуг
            </h4>
            <div class="link-items__service-btn _gray-btn">
              <span>Перейти к прочтению</span>
            </div>
          </div>
        </a>
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
            <input class="_input map-block__form-inp" type="tel" name="phone" placeholder="Введите номер телефона" required>
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
