<?php get_header(); ?>


<main class="main" id="nalog-page">
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
            <a class="breadcrumbs__link active" href="#">Оформление налогового вычета</a>
          </li>
        </ul>
      </div>
      <h1 class="front-block__title _title">
        Оформление налогового вычета
      </h1>
    </div>
  </section>
  <!-- Новый блок с контентом и формой -->
  <section class="content-block">
    <div class="container">
      <div class="content-block__inner">
        <div class="content-block__left">
          <div class="content-block__left-inner theContent">
            <p>
              При оплате медицинских услуг и приобретении медикаментов можно вернуть часть затраченных денежных средств с помощью социального налогового вычета по НДФЛ.
            </p>
            <h6>
              Социальный налоговый вычет на лечение может получить физлицо, оплатившее:
            </h6>
            <h2>Как правильно организовать свое первое обращение?</h2>
            <ul>
              <li>медицинские услуги, в том числе дорогостоящие, оказанные ему самому, его супругу (супруге), родителям, а также детям (в том числе усыновленным) в возрасте до 18 лет (до 24 лет, если дети (в том числе усыновленные) являются обучающимися по очной форме обучения в организациях, осуществляющих образовательную деятельность), подопечным в возрасте до 18 лет (далее — члены семьи);</li>
              <li>назначенные врачом лекарства, в том числе для членов семьи;</li>
              <li>страховые взносы по договору ДМС, заключенному в целях своего лечения или лечения членов семьи.</li>
            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contacts-1.webp" alt="title">
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
              <input class="content-block__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
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

  <!-- Новый блок с аккордионом -->
  <section class="content-block">
    <div class="container">
      <div class="content-block__inner">
        <div class="content-block__left">
          <div class="content-block__left-inner checkup-compound__left accordion">
            <div class="checkup-compound__item accordion-item">
              <div class="checkup-compound__item-header accordion-header">
                <div class="checkup-compound__item-left">
                  <span class="checkup-compound__item-step">
                    01
                  </span>
                  <h4 class="checkup-compound__item-title">
                    Какие документы взять на первый прием?
                  </h4>
                </div>
                <div class="open-item checkup-compound__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

                </div>
              </div>
              <div class="checkup-compound__item-body accordion-body">
                <ul class="checkup-compound__item-list">
                  <li class="checkup-compound__item-point">
                    <span>Врачебная деятельность регулируется регламентами ФЗ №323 «Об основах охраны здоровья граждан Российской Федерации». Для постановки диагноза и назначения лечения недостаточно жалоб пациента. Все заключения врачи делают только после специализированных обследований и на основании указанного выше федерального закона, который включает стандарты оказания медпомощи.</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="checkup-compound__item accordion-item">
              <div class="checkup-compound__item-header accordion-header">
                <div class="checkup-compound__item-left">
                  <span class="checkup-compound__item-step">
                    02
                  </span>
                  <h4 class="checkup-compound__item-title">
                    Оказание медицинской помощи по стандарта
                  </h4>
                </div>
                <div class="open-item checkup-compound__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

                </div>
              </div>
              <div class="checkup-compound__item-body accordion-body">
                <ul class="checkup-compound__item-list">
                  <li class="checkup-compound__item-point">
                    <span>Врачебная деятельность регулируется регламентами ФЗ №323 «Об основах охраны здоровья граждан Российской Федерации». Для постановки диагноза и назначения лечения недостаточно жалоб пациента. Все заключения врачи делают только после специализированных обследований и на основании указанного выше федерального закона, который включает стандарты оказания медпомощи.</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="checkup-compound__item accordion-item">
              <div class="checkup-compound__item-header accordion-header">
                <div class="checkup-compound__item-left">
                  <span class="checkup-compound__item-step">
                    03
                  </span>
                  <h4 class="checkup-compound__item-title">
                    Можно ли опаздывать на прием
                  </h4>
                </div>
                <div class="open-item checkup-compound__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

                </div>
              </div>
              <div class="checkup-compound__item-body accordion-body">
                <ul class="checkup-compound__item-list">
                  <li class="checkup-compound__item-point">
                    <span>Врачебная деятельность регулируется регламентами ФЗ №323 «Об основах охраны здоровья граждан Российской Федерации». Для постановки диагноза и назначения лечения недостаточно жалоб пациента. Все заключения врачи делают только после специализированных обследований и на основании указанного выше федерального закона, который включает стандарты оказания медпомощи.</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="checkup-compound__item accordion-item">
              <div class="checkup-compound__item-header accordion-header">
                <div class="checkup-compound__item-left">
                  <span class="checkup-compound__item-step">
                    04
                  </span>
                  <h4 class="checkup-compound__item-title">
                    Как получить медицинскую помощь на дому?
                  </h4>
                </div>
                <div class="open-item checkup-compound__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

                </div>
              </div>
              <div class="checkup-compound__item-body accordion-body">
                <ul class="checkup-compound__item-list">
                  <li class="checkup-compound__item-point">
                    <span>Врачебная деятельность регулируется регламентами ФЗ №323 «Об основах охраны здоровья граждан Российской Федерации». Для постановки диагноза и назначения лечения недостаточно жалоб пациента. Все заключения врачи делают только после специализированных обследований и на основании указанного выше федерального закона, который включает стандарты оказания медпомощи.</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="checkup-compound__item accordion-item">
              <div class="checkup-compound__item-header accordion-header">
                <div class="checkup-compound__item-left">
                  <span class="checkup-compound__item-step">
                    05
                  </span>
                  <h4 class="checkup-compound__item-title">
                    Как получить результаты моих анализов и обследований?
                  </h4>
                </div>
                <div class="open-item checkup-compound__item-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>

                </div>
              </div>
              <div class="checkup-compound__item-body accordion-body">
                <ul class="checkup-compound__item-list">
                  <li class="checkup-compound__item-point">
                    <span>Врачебная деятельность регулируется регламентами ФЗ №323 «Об основах охраны здоровья граждан Российской Федерации». Для постановки диагноза и назначения лечения недостаточно жалоб пациента. Все заключения врачи делают только после специализированных обследований и на основании указанного выше федерального закона, который включает стандарты оказания медпомощи.</span>
                  </li>
                </ul>
              </div>
            </div>
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
              <input class="content-block__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
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
            <input class="callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
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
  </section>
</main>

<?php get_footer(); ?>
