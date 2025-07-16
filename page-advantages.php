<?php
get_header();
?>


<main class="main" id="advantages-page">

  <?php echo renderBlocksSingleCheckup(); ?>
<!--
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          Мы создали пространство<br>
          продуманной медицины
        </h1>
        <p class="front-block__subtitle _subtitle">
          Это результат многолетней работы команды врачей, управленцев и исследователей,<br> которые создали медицинское пространство нового уровня
        </p>
        <img class="front-block__yandex" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-2.webp" alt="front-block-yandex">
        <img class="front-block__right" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-3.webp" alt="front-block-3">
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


  <section class="video-block">
    <div class="container relative">
      <h2 class="video-block__title _title">
        Узнайте все самое важное<br>
        о клинике всего за 1 минуту
      </h2>
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


  <div class="wrapper-bg _section-lg">
    <section class="image-block">
      <img class="image-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="image-block__title _title">
          Врачи-пульмонологи<br>
          Abakumov Clinic
        </h2>
        <div class="images-block__wrapper">
          <img class="image-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/image-block-1.webp" alt="image-block-1">
        </div>
      </div>
    </section>
  </div>


  <section class="clinic-concept">
    <div class="container">
      <h2 class="clinic-concept__title _title">
        Концепция клиники –
      </h2>
      <p class="clinic-concept__subtitle _subtitle">
        медицина, в которую хочется возвращаться
      </p>
      <h3 class="clinic-concept__name">
        При создании Abakumov Clinic мы поставили перед собой несколько принципиально важных задач:
      </h3>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="clinic-concept__items">
        <div class="clinic-concept__item">
          <div class="clinic-concept__item-wrapper">
            <img class="clinic-concept__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/clinic-concept-1.webp" alt="clinic-concept-1">
          </div>
          <div class="clinic-concept__item-info">
            <h4 class="clinic-concept__item-title">
              Построить клинику нового поколения
            </h4>
            <p class="clinic-concept__item-text">
              на основе доказательной медицины, экспертной<br> диагностики и технологичной базы
            </p>
          </div>
        </div>
        <div class="clinic-concept__item">
          <div class="clinic-concept__item-wrapper">
            <img class="clinic-concept__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/clinic-concept-2.webp" alt="clinic-concept-2">
          </div>
          <div class="clinic-concept__item-info">
            <h4 class="clinic-concept__item-title">
              Объединить высокий медицинский<br>
              стандарт с эстетикой сервиса —
            </h4>
            <p class="clinic-concept__item-text">
              чтобы каждый визит был комфортным, быстрым и результативны
            </p>
          </div>
        </div>
        <div class="clinic-concept__item">
          <div class="clinic-concept__item-wrapper">
            <img class="clinic-concept__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/clinic-concept-3.webp" alt="clinic-concept-3">
          </div>
          <div class="clinic-concept__item-info">
            <h4 class="clinic-concept__item-title">
              Сместить фокус с «лечения проблем»<br>
              на осознанное управление здоровьем
            </h4>
            <p class="clinic-concept__item-text">
              через регулярные персональные чек-апы
            </p>
          </div>
        </div>
        <div class="clinic-concept__item">
          <div class="clinic-concept__item-wrapper">
            <img class="clinic-concept__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/clinic-concept-4.webp" alt="clinic-concept-4">
          </div>
          <div class="clinic-concept__item-info">
            <h4 class="clinic-concept__item-title">
              Превратить медицинские визиты в новый стандарт<br>
              жизни современного человека —
            </h4>
            <p class="clinic-concept__item-text">
              необходимый, желанный и по-настоящему ценный
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="wrapper-gray _section-lg space-top">

    <section class="directions-doctor">
      <img class="directions-doctor__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="directions-doctor__title _title">
          Клиника стала воплощением опыта,
        </h2>
        <p class="directions-doctor__subtitle _subtitle">
          ценностей и медицинской философии основателя
        </p>
        <div class="directions-doctor__filters">
          <div class="directions-doctor__filters-items">
            <div class="directions-doctor__item filters-item">
              <div class="directions-doctor__left">
                <div class="directions-doctor__left-wrapper">
                  <img class="directions-doctor__left-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/directions-doctor-3.webp" alt="">
                </div>
              </div>
              <div class="directions-doctor__right">
                <h5 class="directions-doctor__right-subtitle _title">
                  Олег Абакумов — врач, который прошёл путь<br> от медбрата скорой помощи до создателя<br> частной клиники нового формата
                </h5>
                <ul class="directions-doctor__right-list">
                  <li class="directions-doctor__right-point">
                    <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
                    <span>
                      Более 10 000 пациентов получили квалифицированную<br> помощь под его руководством.
                    </span>
                  </li>
                  <li class="directions-doctor__right-point">
                    <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
                    <span>
                      В клинической практике делает ставку на точность,<br> индивидуальность и доверие.
                    </span>
                  </li>
                  <li class="directions-doctor__right-point">
                    <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
                    <span>
                      В основе подхода — проверенные методики и живая<br> забота о человеке, а не просто о диагнозе
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>


  <section class="delete-cause">
    <div class="container">
      <h2 class="delete-cause__title _title">
        Лечим не симптомы —<br>
        устраняем причину
      </h2>
      <div class="delete-cause__inner">
        <div class="delete-cause__left">
          <div class="delete-cause__left-wrapper">
            <img class="delete-cause__left-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/delete-cause-1.webp" alt=" delete-cause-1">
          </div>
        </div>
        <div class="delete-cause__right">
          <h4 class="delete-cause__right-title _title">
            Пациенты часто списывают<br> слабость на стресс, головную<br> боль — на погоду, а проблемы<br>
            с ЖКТ — на «что-то не то съел»
          </h4>
          <p class="delete-cause__right-text">
            Но настоящее здоровье — это не жизнь между<br> симптомами, а энергия и ресурсность каждый день
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper-bg _section-lg space-top">
    <section class="new-level bg-bottom">
      <img class="new-level__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="new-level__title _title">
          Abakumov Clinic —<br>
          это клиника-ментор
        </h2>
        <p class="new-level__subtitle _subtitle">
          Мы сопровождаем пациента от первого визита до стабилизации состояния,<br>
          беря на себя всё, что обычно вызывает тревогу и перегрузку
        </p>
        <p class="new-level__name">
          Вам больше не нужно:
        </p>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="new-level__items">
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-1.svg'); ?>
            </span>
            <h4 class="new-level__item-title">
              Разбираться в диагнозах и<br> сложной медицинской<br> терминологии —
            </h4>
            <p class="new-level__item-text">
              мы всё объясняем простым<br> и человеческим языком
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-2.svg'); ?>
            </span>
            <h4 class="new-level__item-title">
              Жить по часам, зависеть<br>
              от таблеток и процедур —
            </h4>
            <p class="new-level__item-text">
              план лечения будет интегрирован в ваш<br> привычный ритм, без стресса и <br>ограничений
            </p>
          </div>
          <div class="new-level__item">
            <span class="new-level__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/new-level-3.svg'); ?>

            </span>
            <h4 class="new-level__item-title">
              Проводить свое свободное<br> время в клинике —
            </h4>
            <p class="new-level__item-text">
              часть обследований и процедур<br> вы можете пройти у себя дома<br> или в офисе
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>


  <section class="care-comfort">
    <div class="container">
      <h2 class="care-comfort__title _title">
        Abakumov Clinic — это забота
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="care-comfort__items grid-3">
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-1.webp" alt="care-comfort-1">
          </div>
          <h4 class="care-comfort__item-title">
            Просторная закрытая<br>
            парковка за шлагбаумом
          </h4>
        </div>
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-4.webp" alt="care-comfort-4">
          </div>
          <h4 class="care-comfort__item-title">
            Комфортная зона ожидания
          </h4>
        </div>
        <div class="care-comfort__item">
          <div class="care-comfort__item-wrapper">
            <img class="care-comfort__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/care-comfort-5.webp" alt="care-comfort-5">
          </div>
          <h4 class="care-comfort__item-title">
            Абсолютная стерильность
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
