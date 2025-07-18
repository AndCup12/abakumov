<?php get_header(); ?>

<main class="main" id="vacancies-page">


  <?php echo renderBlocksRevBizVac(); ?>

  <div class="divider"></div>

  <?php echo contacts(); ?>

  <?php echo map(); ?>


  <!-- <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          Вакансии в Abakumov Clinic
        </h1>
        <p class="front-block__subtitle _subtitle">
          Работать у нас — это не просто быть врачом.<br />
          Это быть частью медицинского будущего
        </p>
      </div>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
          <span>Узнать о доступных вакансиях</span>
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79031003195" target="_blank">
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
          <span>Записаться через WhatsApp</span>
        </a>
      </div>
    </div>
  </section>


  <section class="vacancies-format">
    <div class="container">
      <h2 class="vacancies-format__title _title">
        Abakumov Clinic — это клиника нового<br> формата, где каждый специалист<br>
        не просто выполняет протокол,
      </h2>
      <p class="vacancies-format__subtitle _subtitle">
        а становится наставником, экспертом, проводником пациента к ресурсу, здоровью и уверенности
      </p>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="vacancies-format__items">
        <div class="vacancies-format__item">
          <img class="vacancies-format__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/vacancies-format-1.webp"" alt=" vacancies-format-1">
        </div>
        <div class="vacancies-format__item">
          <img class="vacancies-format__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/vacancies-format-2.webp"" alt=" vacancies-format-2">
        </div>
        <div class="vacancies-format__item">
          <img class="vacancies-format__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/vacancies-format-3.webp"" alt=" vacancies-format-3">
        </div>
      </div>
    </div>
  </section>

  <div class="wrapper-bg _section-lg">

    <section class="new-level bg-bottom padding-bottom-null">
      <img class="new-level__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="new-level__title _title">
          Мы — команда профессионалов,
        </h2>
        <p class="new-level__subtitle _subtitle">
          объединившихся ради одного: делать медицину глубокой,<br> индивидуальной и по-настоящему человечной
        </p>
        <img class="new-level__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
      </div>
    </section>

  </div>

  <section class="checkup-is">
    <div class="container">
      <div class="checkup-is__inner">
        <div class="checkup-is__inner-left">
          <h3 class="checkup-is__inner-title _title">
            Открытые вакансии
          </h3>
          <ul class="checkup-is__inner-list">
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Врач-эндокринолог (опыт от 5 лет)
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Врач-терапевт (опыт от 3 лет, приём + чекапы)
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Врач-гастроэнтеролог
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Медицинская сестра процедурного кабинета
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Администратор службы заботы о пациентах
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Координатор персональных программ
              </p>
            </li>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>

              </span>
              <p class="checkup-is__inner-text">
                Врач-диагност УЗИ
              </p>
            </li>
          </ul>
          <a class="checkup-is__btn _gray-btn" href="#">
            Откликнуться на вакансию
          </a>
        </div>
        <div class="checkup-is__inner-right">
          <div class="checkup-is__inner-wrapper relative">
            <img class="checkup-is__inner-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-is-6.webp" alt="checkup-is-6">
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="wrapper-gray _section-lg space-top">

    <section class="why-works _section-lg padding-bottom">
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

  </div>

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
