<?php

// Функции генерирующие данные типы блоков

// checkupFrontBlock : Первый блок - Чекап сингл
// checkupFrontBlockMain : Первый блок - Чекап основная
// firstBlockDirection : Первый блок - Направления основная
// frontBlockMain : Первый блок - Главная
// firstBlockService : Первый блок - Услуги главная
// firstBlockRev : Первый блок - Отзывы
// advantages : Преимущества
// checkupQuestions : Зачем проходить 'направление'
// doctorWithQuotes : Врач с цитатами
// videoBlock : Блок с видео
// whenExamination : Когда стоит пройти обследование
// examinationReveals : Что может выявить
// checkupStages : Этапы прохождения
// personalPlan : Персональный план
// callback_1 : Форма обратной связи (1 вариант)
// checkupSchedule : График прохождения
// checkupCompound : Состав чекапа
// newLevel : Медицина нового уровня
// checkupReviews : Блок отзывов (изображения вытянутые)
// checkupАfter : Видео-отзывы
// videoRevSlider : Видео-отзывы (слайдер)
// rating : Рейтинг клиники
// careComfort : Комфорт
// contacts : Контакты
// map : Карта
// disease : Заболевание/ расшифровка
// directionsSimptom : Симптомы
// callback_2 : Форма обратной связи (2 вариант)
// directionsMethods : Методы диагностики и лечения
// directionsDoctor : Врачи клиники
// directionsPrice : Стоимость лечения
// stagesOfTreatment : Этапы лечения
// checkupResult : Результат
// readyPrograms : Комплексные обследования
// checkUpPrograms : Программы CheckUp для...
// checkupIs : Чекап это
// reviewsBloger : Отзывы блогеров
// catalogDirections : Каталог направлений
// comfort : Комфорт как дома
// justTreat : Мы не просто лечим
// сonsilium : Консилиум
// catalogDoctors : Каталог врачей
// doctorsSpecialization : Специализация врача
// blockImg : Картинка большая
// concept : Концепция клиники
// doctorExp : Воплощение опыта
// deleteCause : Устраняем причину
// staticNewLevel : Клиника ментор
// care : Забота
// whyWorks : Почему выгодно
// vacanciesFormat : Клиника нового формата

// wrapperStart : Начало обертки
// wrapperEnd : Конец обертки

// Генерация блоков для шаблона custom-checkup-page
function renderBlocksSingleCheckup() {
  if (have_rows('blocksSingleCheckup')) {
    while (have_rows('blocksSingleCheckup')) {
      the_row();
      $block_type = get_sub_field('block_type');
      // echo $block_type . "\n";
      switch ($block_type) {
        case 'checkupFrontBlock':
          echo checkupFrontBlock();
          break;
        case 'checkupFrontBlockMain':
          echo checkupFrontBlockMain();
          break;
        case 'firstBlockDirection':
          echo firstBlockDirection();
          break;
        case 'frontBlockMain';
          echo frontBlockMain();
          break;
        case 'firstBlockService':
          echo firstBlockService();
          break;
        case 'advantages':
          echo advantages();
          break;
        case 'checkupQuestions':
          echo checkupQuestions();
          break;
        case 'doctorWithQuotes':
          echo doctorWithQuotes();
          break;
        case 'videoBlock':
          echo videoBlock();
          break;
        case 'whenExamination':
          echo whenExamination();
          break;
        case 'examinationReveals':
          echo examinationReveals();
          break;
        case 'checkupStages':
          echo checkupStages();
          break;
        case 'personalPlan':
          echo personalPlan();
          break;
        case 'callback_1':
          echo callback_1();
          break;
        case 'checkupSchedule':
          echo checkupSchedule();
          break;
        case 'checkupCompound':
          echo checkupCompound();
          break;
        case 'newLevel':
          echo newLevel();
          break;
        case 'checkupReviews':
          echo checkupReviews();
          break;
        case 'checkupАfter':
          echo checkupАfter();
          break;
        case 'videoRevSlider':
          echo videoRevSlider();
          break;
        case 'rating':
          echo rating();
          break;
        case 'careComfort':
          echo careComfort();
          break;
        case 'contacts':
          echo contacts();
          break;
        case 'map':
          echo map();
          break;
        case 'disease' :
          echo disease();
          break;
        case 'directionsSimptom' :
          echo directionsSimptom();
          break;
        case 'callback_2' :
          echo callback_2();
          break;
        case 'directionsMethods' :
          echo directionsMethods();
          break;
        case 'directionsDoctor' :
          echo directionsDoctor();
          break;
        case 'directionsPrice' :
          echo directionsPrice();
          break;
        case 'stagesOfTreatment':
          echo stagesOfTreatment();
          break;
        case 'checkupResult':
          echo checkupResult();
          break;
        case 'readyPrograms':
          echo readyPrograms();
          break;
        case 'checkUpPrograms':
          echo checkUpPrograms();
          break;
        case 'checkupIs':
          echo checkupIs();
          break;
        case 'reviewsBloger':
          echo reviewsBloger();
          break;
        case 'catalogDirections':
          echo catalogDirections();
          break;
        case 'comfort':
          echo comfort();
          break;
        case 'justTreat':
          echo justTreat();
          break;
        case 'сonsilium':
          echo сonsilium();
          break;
        case 'catalogDoctors':
          echo catalogDoctors();
          break;
        case 'doctorsSpecialization':
          echo doctorsSpecialization();
          break;
        case 'blockImg':
          echo blockImg();
          break;
        case 'concept':
          echo concept();
          break;
        case 'doctorExp':
          echo doctorExp();
          break;
        case 'deleteCause':
          echo deleteCause();
          break;
        case 'staticNewLevel':
          echo staticNewLevel();
          break;
        case 'firstBlockRev':
          echo firstBlockRev();
          break;
        case 'whyWorks':
          echo whyWorks();
          break;
        case 'vacanciesFormat':
          echo vacanciesFormat();
          break;


        case 'wrapperStart':
          $type = get_sub_field('wrapperStart_variants');
          echo wrapperStart($type);
          break;
        case 'wrapperEnd':
          echo wrapperEnd();
          break;
      }
    }
  }
}


// Первый блок - Чекап сингл
function checkupFrontBlock(){
  ob_start(); ?>

    <section class="front-block _image-wrapper _section-lg">
      <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
      <div class="container">
        <div class="front-block__inner">
          <div class="front-block__left">
            <h1 class="front-block__title _title">
              <?php the_field('meta_h1'); ?>
            </h1>
            <p class="front-block__subtitle _subtitle">
              <?php the_sub_field('checkupFrontBlock_subtitle'); ?>
            </p>
            <div class="front-block__btns">
              <?php if(get_sub_field('checkupFrontBlock_btn1') == 1){?>
              <!-- Записаться на чек-ап -->
              <a class="front-block__btn _main-btn change-popup change-popup-from-link" href="#callback-modal" data-fancybox>
                <span>Записаться на чек-ап</span>
              </a>
              <?php } ?>
              <?php if(get_sub_field('checkupFrontBlock_btn2') == 1){?>
              <!-- Записаться на прием -->
              <a class="front-block__btn _main-btn change-popup change-popup-link" href="#callback-modal" data-fancybox>
                <span>Записаться на прием</span>
              </a>
              <?php } ?>
              <?php if(get_sub_field('checkupFrontBlock_btn3') == 1){?>
              <!-- Записаться в WhatsApp -->
              <a class="front-block__arrow-btn" href="#">
                <span class="front-block__btn-icon">
                  <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                </span>
                <span>Записаться через WhatsApp</span>
              </a>
              <?php } ?>
              <?php if(get_sub_field('checkupFrontBlock_btn4') == 1){?>
              <!-- бот телеграм -->
              <a class="front-block__btn _main-btn" href="#" data-fancybox>
              <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
              <span>Открыть мед-бота в Telegram</span>
              </a>
              <?php } ?>

            </div>
          </div>
          <?php if(is_page('tgbot')) { ?>
            <img class="front-block__img-telegram" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-telegram.webp" alt="hand-telega">
            <?php } elseif(get_sub_field('checkupFrontBlock_img')) {
            $img = get_sub_field('checkupFrontBlock_img');
            $img_url = isset($img['url']) ? $img['url'] : '';
            $img_alt = isset($img['alt']) ? $img['alt'] : '';
            ?>
          <div class="front-block__right-item">
            <!-- Сделать через повторитель Посадка -->
            <div class="front-block__right-wrapper">
              <img class="front-block__right-img _img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
            </div>
          </div>
          <?php } ?>
        </div>
        <?php $links = get_sub_field('checkupFrontBlock_links');
        if($links) :?>
        <div class="front-block__links">
          <?php foreach($links as $post) :
            setup_postdata($post); ?>
          <a class="front-block__link" href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
          </a>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
      </div>
    </section>

  <?php return ob_get_clean();
}

// Первый блок - Чекап основная
function checkupFrontBlockMain(){
  ob_start(); ?>
    <section class="front-block _image-wrapper _section-lg">
      <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
      <div class="container">
        <div class="front-block__top">
          <h1 class="front-block__title _title">
            <?php the_field('meta_h1'); ?>
          </h1>
          <p class="front-block__subtitle _subtitle">
            <?php the_sub_field('checkupFrontBlockMain_subtitle'); ?>
          </p>
          <?php if(get_sub_field('checkupFrontBlockMain_img')) :
            $img = get_sub_field('checkupFrontBlockMain_img');?>
          <img class="front-block__right" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
          <?php endif; ?>
        </div>
        <div class="front-block__btns">
          <a class="front-block__btn _main-btn" href="#" data-fancybox>
            <span>Подобрать чекап</span>
          </a>
          <a class="front-block__arrow-btn" href="#">
            <p class="arrow-icon">
              <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                  fill="white" />
              </svg>

            </p>
            <span>Перейти к выбору</span>
          </a>
        </div>
      </div>
    </section>
  <?php return ob_get_clean();
}

// Первый блок - Направления основная
function firstBlockDirection(){
  ob_start(); ?>

  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            <?php the_field('meta_h1'); ?>
          </h1>
          <p class="front-block__subtitle _subtitle">
            Подзаголовок
          </p>
          <div class="cursor">
            <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
          </div>
          <?php if(have_rows('firstblockdirection_images')) : ?>
          <div class="front-block__items">
            <?php while(have_rows('firstblockdirection_images')) : the_row(); ?>
            <?php if(get_sub_field('img')) :
              $img = get_sub_field('img'); ?>
            <div class="front-block__item">
              <img class="front-block__item-img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
          </div>
          <?php endif; ?>
          <div class="front-block__btns">
            <a class="front-block__btn _main-btn change-popup-from-link change-popup" href="#callback-modal" data-fancybox>
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

  <?php return ob_get_clean();
}

// Превый блок - Главная
function frontBlockMain(){
  ob_start(); ?>

  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__top">
        <h1 class="front-block__title _title">
          <?php the_field('meta_h1'); ?>
        </h1>
        <p class="front-block__subtitle _subtitle">
          <?php the_sub_field('frontBlockMain_subtitle'); ?>
        </p>
        <?php if(get_sub_field('frontBlockMain_yandex')):
          $img_yandex = get_sub_field('frontBlockMain_yandex');?>
        <img class="front-block__yandex" src="<?php echo $img_yandex['url'];?>" alt="<?php echo $img_yandex['alt'];?>">
        <?php endif; ?>
        <?php if(get_sub_field('frontBlockMain_imgs')):
          $imgs = get_sub_field('frontBlockMain_imgs'); ?>
        <img class="front-block__right" src="<?php $imgs['url'];?>" alt="<?php echo $imgs['alt'];?>">
        <?php endif; ?>
      </div>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn change-popup" href="#callback-modal" data-fancybox>
          <?php include(get_template_directory() . '/assets/images/icons/mail.svg'); ?>
          <span>Записаться на прием</span>
        </a>
        <a class="front-block__btn _whatsapp-btn" href="https://wa.me/+79031003195" target="_blank">
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
          <span>Записаться через WhatsApp</span>
        </a>
      </div>
    </div>
    <?php if(get_sub_field('frontBlockMain_doctors')) :
      $doctors = get_sub_field('frontBlockMain_doctors'); ?>
    <img class="front-block__img" src="<?php echo $doctors['url'];?>" alt="<?php echo $doctors['alt'];?>">
    <?php endif; ?>
  </section>

  <?php return ob_get_clean();
}

// Первый блок - Услуги главная
function firstBlockService(){
  ob_start(); ?>

  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container relative">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            <?php the_field('meta_h1'); ?>
          </h1>
          <?php $services = get_sub_field('firstBlockService_services');
          if($services) :?>
              <div class="cursor">
                  <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
              </div>
              <div class="front-block__services">
                  <?php foreach($services as $post_ids) :?>
                  <a class="front-block__service" href="<?php echo get_permalink($post_ids); ?>">
                      <?php if(get_the_post_thumbnail($post_ids)) :?>
                      <div class="front-block__service-wrapper">
                          <?php echo get_the_post_thumbnail($post_ids, 'full', [
                              'class' => 'front-block__service-img _img',
                              'alt' => get_the_title($post_ids),
                              'loading' => 'lazy'
                          ]); ?>
                      </div>
                      <?php endif; ?>
                      <div class="front-block__service-info">
                          <h4 class="front-block__service-title">
                              <?php echo get_the_title($post_ids); ?>
                          </h4>
                          <div class="front-block__service-btn _gray-btn">
                              <span>Узнать подробнее</span>
                              <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
                          </div>
                      </div>
                  </a>
                  <?php endforeach;?>
              </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Первый блок - Отзывы
function firstBlockRev(){
  ob_start(); ?>

  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-fff.svg" alt="abacumov">
    <div class="container">
      <h1 class="front-block__title _title">
        <?php the_field('meta_h1'); ?>
      </h1>
      <?php if(have_rows('firstBlockRev_images')) : ?>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="front-block__reviews">
        <?php while(have_rows('firstBlockRev_images')) : the_row();
        $img = get_sub_field('img'); ?>
        <a class="front-block__review" href="<?php echo $img['url'];?>" data-fancybox>
          <img class="front-block__review-img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
        </a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Преимущества
function advantages() {
  ob_start(); ?>

  <section class="services">
    <div class="container">
      <div class="cursor @@class">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
          <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <path class="tooltip-horizontal-scroll-icon_hand"
            d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
            fill="rgba(190,190,190,1)"></path>
          <style>
            .tooltip-horizontal-scroll-icon_hand {
                  animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
                }

                .tooltip-horizontal-scroll-icon_card {
                  animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
                }

                @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
                  0% {
                    transform: translateX(80px) scale(1);
                    opacity: 0
                  }

                  10% {
                    transform: translateX(80px) scale(1);
                    opacity: 1
                  }

                  20%,
                  60% {
                    transform: translateX(175px) scale(.6);
                    opacity: 1
                  }

                  80% {
                    transform: translateX(5px) scale(.6);
                    opacity: 1
                  }

                  to {
                    transform: translateX(5px) scale(.6);
                    opacity: 0
                  }
                }

                @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

                  0%,
                  60% {
                    transform: translateX(0)
                  }

                  80%,
                  to {
                    transform: translateX(-240px)
                  }
                }
          </style>
        </svg>
      </div>
      <div class="services__items">
        <?php
        $counter = 1;
        if (have_rows('advantages')) :
          while (have_rows('advantages')) :
            the_row();
            $num = str_pad($counter, 2, '0', STR_PAD_LEFT);
            $img = get_sub_field('advantages_img');
        ?>
          <div class="services__item">
            <div class="services__item-wrapper">
              <?php if ($img && isset($img['url'])) : ?>
                <img class="services__item-img _img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt'] ?? ''); ?>">
              <?php endif; ?>
            </div>
            <div class="services__item-info">
              <?php if (get_sub_field('advantages_title')) : ?>
                <h4 class="services__item-title"><?php the_sub_field('advantages_title'); ?></h4>
              <?php endif; ?>
              <?php if (get_sub_field('advantages_text')) : ?>
                <p class="services__item-text"><?php the_sub_field('advantages_text'); ?></p>
              <?php endif; ?>
              <span class="services__item-num"><?php echo $num; ?></span>
            </div>
          </div>
        <?php
            $counter++;
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}

// Зачем проходить <направление>
function checkupQuestions(){
  ob_start(); ?>

    <section class="checkup-question">
      <div class="container">
        <h2 class="checkup-question__title _title">
          <?php the_sub_field('checkupQuestions_title'); ?>
        </h2>
        <p class="checkup-question__subtitle _subtitle">
          <?php the_sub_field('checkupQuestions_subtitle'); ?>
        </p>
        <?php if(have_rows('checkupQuestions_points')) : ?>
        <div class="checkup-question__items">
          <?php while(have_rows('checkupQuestions_points')) : the_row(); ?>
          <div class="checkup-question__item">
            <div class="checkup-question__item-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.79 15.17C10.59 15.17 10.4 15.09 10.26 14.95L7.84 12.53C7.55 12.24 7.55 11.76 7.84 11.47C8.13 11.18 8.61 11.18 8.9 11.47L10.79 13.36L15.09 9.06003C15.38 8.77003 15.86 8.77003 16.15 9.06003C16.44 9.35003 16.44 9.83003 16.15 10.12L11.32 14.95C11.18 15.09 10.99 15.17 10.79 15.17Z"
                  fill="white" />
                <path
                  d="M12 22.75C11.37 22.75 10.74 22.54 10.25 22.12L8.67 20.76C8.51 20.62 8.11 20.48 7.9 20.48H6.18C4.7 20.48 3.5 19.28 3.5 17.8V16.09C3.5 15.88 3.36 15.49 3.22 15.33L1.87 13.74C1.05 12.77 1.05 11.24 1.87 10.27L3.22 8.68C3.36 8.52 3.5 8.13 3.5 7.92V6.2C3.5 4.72 4.7 3.52 6.18 3.52H7.91C8.12 3.52 8.52001 3.37 8.68001 3.24L10.26 1.88C11.24 1.04 12.77 1.04 13.75 1.88L15.33 3.24C15.49 3.38 15.89 3.52 16.1 3.52H17.8C19.28 3.52 20.48 4.72 20.48 6.2V7.9C20.48 8.11 20.63 8.51 20.77 8.67L22.13 10.25C22.97 11.23 22.97 12.76 22.13 13.74L20.77 15.32C20.63 15.48 20.48 15.88 20.48 16.09V17.79C20.48 19.27 19.28 20.47 17.8 20.47H16.1C15.89 20.47 15.49 20.62 15.33 20.75L13.75 22.11C13.26 22.54 12.63 22.75 12 22.75ZM6.18 5.02C5.53 5.02 5 5.55 5 6.2V7.91C5 8.48 4.73 9.21 4.36 9.64L3.01 11.23C2.66 11.64 2.66 12.35 3.01 12.76L4.36 14.35C4.73 14.79 5 15.51 5 16.08V17.79C5 18.44 5.53 18.97 6.18 18.97H7.91C8.49 18.97 9.22 19.24 9.66 19.62L11.24 20.98C11.65 21.33 12.37 21.33 12.78 20.98L14.36 19.62C14.8 19.25 15.53 18.97 16.11 18.97H17.81C18.46 18.97 18.99 18.44 18.99 17.79V16.09C18.99 15.51 19.26 14.78 19.64 14.34L21 12.76C21.35 12.35 21.35 11.63 21 11.22L19.64 9.64C19.26 9.2 18.99 8.47 18.99 7.89V6.2C18.99 5.55 18.46 5.02 17.81 5.02H16.11C15.53 5.02 14.8 4.75 14.36 4.37L12.78 3.01C12.37 2.66 11.65 2.66 11.24 3.01L9.66 4.38C9.22 4.75 8.48 5.02 7.91 5.02H6.18Z"
                  fill="white" />
              </svg>
            </div>
            <h4 class="checkup-question__item-title">
              <?php the_sub_field('point'); ?>
            </h4>
          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>

  <?php return ob_get_clean();
}

// Врач с цитатами (space-null убирает отступ?)
function doctorWithQuotes(){
  ob_start(); ?>

  <?php
  $img = get_sub_field('doctorWithQuotes_img');
  $space = get_sub_field('doctorWithQuotes_space') == 1 ? 'space-null' : '';
  ?>

  <section class="quote-block <?php echo $space; ?>">
      <div class="container">
        <div class="quote-block__content relative">
              <?php if ($img && isset($img['url'])) : ?>
                  <img class="quote-block__img _img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt'] ?? ''); ?>">
              <?php endif; ?>
          <div class="overlay"></div>
          <div class="quote-block__inner">
            <div class="quote-block__left">
              <div class="quote-block__left-icon">
                <svg width="33" height="25" viewBox="0 0 33 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.8 12.3C5.06667 12.1667 3.66667 11.6 2.6 10.6C1.53333 9.6 1 8.26666 1 6.6C1 4.73333 1.6 3.3 2.8 2.3C4 1.3 5.5 0.799995 7.3 0.799995C9.5 0.93333 11.0333 1.8 11.9 3.4C12.8333 5 13.3 6.76666 13.3 8.69999C13.3 10.5 13 12.2 12.4 13.8C11.8667 15.3333 11.1333 16.8 10.2 18.2C9.26667 19.6 8.16667 20.8333 6.9 21.9C5.7 22.9667 4.43333 23.7333 3.1 24.2L0.7 20.9C2.03333 19.9667 3.26667 18.7 4.4 17.1C5.6 15.5 6.4 13.9 6.8 12.3ZM25.7 12.3C23.9667 12.1667 22.5667 11.6 21.5 10.6C20.4333 9.6 19.9 8.26666 19.9 6.6C19.9 4.73333 20.5 3.3 21.7 2.3C22.9 1.3 24.4 0.799995 26.2 0.799995C28.4 0.93333 29.9333 1.8 30.8 3.4C31.7333 5 32.2 6.76666 32.2 8.69999C32.2 10.5 31.9 12.2 31.3 13.8C30.7667 15.3333 30.0333 16.8 29.1 18.2C28.1667 19.6 27.0667 20.8333 25.8 21.9C24.6 22.9667 23.3333 23.7333 22 24.2L19.6 20.9C20.9333 19.9667 22.1667 18.7 23.3 17.1C24.5 15.5 25.3 13.9 25.7 12.3Z"
                    fill="white" />
                </svg>
              </div>
              <p class="quote-block__left-text">
                  <?php the_sub_field('doctorWithQuotes_quote'); ?>
              </p>
            </div>
            <div class="quote-block__right">
              <h5 class="quote-block__right-name">
                <?php the_sub_field('doctorWithQuotes_name'); ?>
              </h5>
              <p class="quote-block__right-text">
                <?php the_sub_field('doctorWithQuotes_position'); ?>
              </p>
              <p class="quote-block__right-exp">
                <?php the_sub_field('doctorWithQuotes_exp'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <?php return ob_get_clean();
}

// Блок с видео
function videoBlock(){
  ob_start(); ?>

    <section class="video-block">
        <div class="container relative">
            <h2 class="video-block__title _title">
                <?php the_sub_field('videoBlock_title'); ?>
            </h2>
            <p class="video-block__subtitle _subtitle">
                <?php the_sub_field('videoBlock_subtitle'); ?>
            </p>
            <?php
            $img = get_sub_field('videoBlock_preview');
            $link = get_sub_field('videoBlock_link');
            if ($img && $link) : ?>
                <a class="video-block__video" href="<?php echo esc_url($link); ?>" data-fancybox>
                    <img class="video-block__video-img _img"
                        src="<?php echo esc_url($img['url'] ?? ''); ?>"
                        alt="<?php echo esc_attr($img['alt'] ?? ''); ?>">
                    <div class="play">
                        <div class="play__inner">
                            <svg width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M41.4506 21.5916C43.9927 23.1529 43.9927 26.8471 41.4506 28.4084L17.8435 42.908C15.1783 44.545 11.75 42.6273 11.75 39.4996L11.75 10.5004C11.75 7.37267 15.1783 5.45503 17.8435 7.09199L41.4506 21.5916Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </a>

            <img class="video-block__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/video-block-2.webp" alt="video-block-2">
            <?php endif; ?>
        </div>
    </section>

  <?php return ob_get_clean();
}

// Когда стоит пройти обследование
function whenExamination(){
  ob_start(); ?>

  <section class="when-examination">
      <div class="container">
          <h2 class="when-examination__title _title">
              <?php the_sub_field('whenExamination_title'); ?>
          </h2>
          <div class="cursor @@class">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
                  <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
                      fill="rgba(190,190,190,0.3)"></rect>
                  <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
                      fill="rgba(190,190,190,0.3)"></rect>
                  <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
                      fill="rgba(190,190,190,0.3)"></rect>
                  <path class="tooltip-horizontal-scroll-icon_hand"
                      d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
                      fill="rgba(190,190,190,1)"></path>
                  <style>
                      .tooltip-horizontal-scroll-icon_hand {
                          animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
                      }

                      .tooltip-horizontal-scroll-icon_card {
                          animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
                      }

                      @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
                          0% {
                              transform: translateX(80px) scale(1);
                              opacity: 0
                          }

                          10% {
                              transform: translateX(80px) scale(1);
                              opacity: 1
                          }

                          20%,
                          60% {
                              transform: translateX(175px) scale(.6);
                              opacity: 1
                          }

                          80% {
                              transform: translateX(5px) scale(.6);
                              opacity: 1
                          }

                          to {
                              transform: translateX(5px) scale(.6);
                              opacity: 0
                          }
                      }

                      @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

                          0%,
                          60% {
                              transform: translateX(0)
                          }

                          80%,
                          to {
                              transform: translateX(-240px)
                          }
                      }
                  </style>
              </svg>
          </div>
          <div class="when-examination__items">
              <?php if(have_rows('whenExamination_points')) :
                  while(have_rows('whenExamination_points')) : the_row(); ?>
                  <div class="when-examination__item">
                      <div class="when-examination__item-icon">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M12 22.75C6.07 22.75 1.25 17.93 1.25 12C1.25 6.07 6.07 1.25 12 1.25C17.93 1.25 22.75 6.07 22.75 12C22.75 17.93 17.93 22.75 12 22.75ZM12 2.75C6.9 2.75 2.75 6.9 2.75 12C2.75 17.1 6.9 21.25 12 21.25C17.1 21.25 21.25 17.1 21.25 12C21.25 6.9 17.1 2.75 12 2.75Z"
                                  fill="white" />
                              <path
                                  d="M12 13.75C11.59 13.75 11.25 13.41 11.25 13V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V13C12.75 13.41 12.41 13.75 12 13.75Z"
                                  fill="white" />
                              <path
                                  d="M12 16.9999C11.87 16.9999 11.74 16.9699 11.62 16.9199C11.5 16.8699 11.39 16.7999 11.29 16.7099C11.2 16.6099 11.13 16.5099 11.08 16.3799C11.03 16.2599 11 16.1299 11 15.9999C11 15.8699 11.03 15.7399 11.08 15.6199C11.13 15.4999 11.2 15.3899 11.29 15.2899C11.39 15.1999 11.5 15.1299 11.62 15.0799C11.86 14.9799 12.14 14.9799 12.38 15.0799C12.5 15.1299 12.61 15.1999 12.71 15.2899C12.8 15.3899 12.87 15.4999 12.92 15.6199C12.97 15.7399 13 15.8699 13 15.9999C13 16.1299 12.97 16.2599 12.92 16.3799C12.87 16.5099 12.8 16.6099 12.71 16.7099C12.61 16.7999 12.5 16.8699 12.38 16.9199C12.26 16.9699 12.13 16.9999 12 16.9999Z"
                                  fill="white" />
                          </svg>
                      </div>
                      <h4 class="when-examination__item-title">
                          <?php the_sub_field('whenExamination_point'); ?>
                      </h4>
                  </div>
                  <?php endwhile;
              endif; ?>
          </div>
      </div>
  </section>

  <?php return ob_get_clean();
}

// Что может выявить
function examinationReveals(){
  ob_start(); ?>

  <section class="examination-reveals">
      <div class="container">
          <h2 class="examination-reveals__title _title">
              <?php the_sub_field('examinationReveals_title'); ?>
          </h2>
          <div class="examination-reveals__inner">
            <?php if (get_sub_field('examinationReveals_img')) : ?>
              <div class="examination-reveals__left">
                  <div class="examination-reveals__left-wrapper">
                      <?php $img = get_sub_field('examinationReveals_img'); ?>
                          <img class="examination-reveals__left-img _img"
                              src="<?php echo esc_url($img['url']); ?>"
                              alt="<?php echo esc_attr($img['alt']); ?>">

                  </div>
              </div>
              <?php endif; ?>
              <div class="examination-reveals__right">
                <!-- Посадка -->
                <h3 class="examination-reveals__right-title _title">
                  Что объединяет всех врачей<br>
                  нашей клиники?
                </h3>
                  <div class="cursor @@class">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
                          <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
                              fill="rgba(190,190,190,0.3)"></rect>
                          <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
                              fill="rgba(190,190,190,0.3)"></rect>
                          <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
                              fill="rgba(190,190,190,0.3)"></rect>
                          <path class="tooltip-horizontal-scroll-icon_hand"
                              d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
                              fill="rgba(190,190,190,1)"></path>
                          <style>
                              .tooltip-horizontal-scroll-icon_hand {
                                  animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
                              }

                              .tooltip-horizontal-scroll-icon_card {
                                  animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
                              }

                              @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
                                  0% {
                                      transform: translateX(80px) scale(1);
                                      opacity: 0
                                  }

                                  10% {
                                      transform: translateX(80px) scale(1);
                                      opacity: 1
                                  }

                                  20%,
                                  60% {
                                      transform: translateX(175px) scale(.6);
                                      opacity: 1
                                  }

                                  80% {
                                      transform: translateX(5px) scale(.6);
                                      opacity: 1
                                  }

                                  to {
                                      transform: translateX(5px) scale(.6);
                                      opacity: 0
                                  }
                              }

                              @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

                                  0%,
                                  60% {
                                      transform: translateX(0)
                                  }

                                  80%,
                                  to {
                                      transform: translateX(-240px)
                                  }
                              }
                          </style>
                      </svg>
                  </div>
                  <div class="examination-reveals__items <?php echo get_sub_field('examinationReveals_img') ? '' : 'grid-3'; ?>">
                      <?php if(have_rows('examinationReveals_points')) :
                          while(have_rows('examinationReveals_points')) : the_row(); ?>
                          <div class="examination-reveals__item">
                              <div class="examination-reveals__item-icon">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M10.79 15.17C10.59 15.17 10.4 15.09 10.26 14.95L7.84 12.53C7.55 12.24 7.55 11.76 7.84 11.47C8.13 11.18 8.61 11.18 8.9 11.47L10.79 13.36L15.09 9.06003C15.38 8.77003 15.86 8.77003 16.15 9.06003C16.44 9.35003 16.44 9.83003 16.15 10.12L11.32 14.95C11.18 15.09 10.99 15.17 10.79 15.17Z"
                                          fill="white" />
                                      <path
                                          d="M12 22.75C11.37 22.75 10.74 22.54 10.25 22.12L8.67 20.76C8.51 20.62 8.11 20.48 7.9 20.48H6.18C4.7 20.48 3.5 19.28 3.5 17.8V16.09C3.5 15.88 3.36 15.49 3.22 15.33L1.87 13.74C1.05 12.77 1.05 11.24 1.87 10.27L3.22 8.68C3.36 8.52 3.5 8.13 3.5 7.92V6.2C3.5 4.72 4.7 3.52 6.18 3.52H7.91C8.12 3.52 8.52001 3.37 8.68001 3.24L10.26 1.88C11.24 1.04 12.77 1.04 13.75 1.88L15.33 3.24C15.49 3.38 15.89 3.52 16.1 3.52H17.8C19.28 3.52 20.48 4.72 20.48 6.2V7.9C20.48 8.11 20.63 8.51 20.77 8.67L22.13 10.25C22.97 11.23 22.97 12.76 22.13 13.74L20.77 15.32C20.63 15.48 20.48 15.88 20.48 16.09V17.79C20.48 19.27 19.28 20.47 17.8 20.47H16.1C15.89 20.47 15.49 20.62 15.33 20.75L13.75 22.11C13.26 22.54 12.63 22.75 12 22.75ZM6.18 5.02C5.53 5.02 5 5.55 5 6.2V7.91C5 8.48 4.73 9.21 4.36 9.64L3.01 11.23C2.66 11.64 2.66 12.35 3.01 12.76L4.36 14.35C4.73 14.79 5 15.51 5 16.08V17.79C5 18.44 5.53 18.97 6.18 18.97H7.91C8.49 18.97 9.22 19.24 9.66 19.62L11.24 20.98C11.65 21.33 12.37 21.33 12.78 20.98L14.36 19.62C14.8 19.25 15.53 18.97 16.11 18.97H17.81C18.46 18.97 18.99 18.44 18.99 17.79V16.09C18.99 15.51 19.26 14.78 19.64 14.34L21 12.76C21.35 12.35 21.35 11.63 21 11.22L19.64 9.64C19.26 9.2 18.99 8.47 18.99 7.89V6.2C18.99 5.55 18.46 5.02 17.81 5.02H16.11C15.53 5.02 14.8 4.75 14.36 4.37L12.78 3.01C12.37 2.66 11.65 2.66 11.24 3.01L9.66 4.38C9.22 4.75 8.48 5.02 7.91 5.02H6.18Z"
                                          fill="white" />
                                  </svg>
                              </div>
                              <h4 class="examination-reveals__item-title">
                                  <?php the_sub_field('point'); ?>
                              </h4>
                          </div>
                          <?php endwhile;
                      endif; ?>
                  </div>
                  <!-- Посадка -->
                  <div class="examination-reveals__right-btns">
                      <a class="examination-reveals__btn _gray-btn change-popup change-popup-from-link" href="#callback-modal" data-fancybox>
                          <span>Записаться на обследование</span>
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M10.75 2C10.75 1.58579 10.4142 1.25 10 1.25L3.25 1.25C2.83578 1.25 2.5 1.58579 2.5 2C2.5 2.41421 2.83578 2.75 3.25 2.75L9.25 2.75L9.25 8.75C9.25 9.16421 9.58579 9.5 10 9.5C10.4142 9.5 10.75 9.16421 10.75 8.75L10.75 2ZM2 10L2.53033 10.5303L10.5303 2.53033L10 2L9.46967 1.46967L1.46967 9.46967L2 10Z"
                                  fill="white" />
                          </svg>
                      </a>
                      <a class="examination-reveals__arrow-btn" href="#">
                          <span class="examination-reveals__btn-icon">
                              <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M11.9512 2.04167C10.6341 0.729166 8.87805 0 7.02439 0C3.17073 0 0.0487797 3.11111 0.0487797 6.95139C0.0487797 8.16667 0.390244 9.38194 0.97561 10.4028L0 14L3.70732 13.0278C4.73171 13.5625 5.85366 13.8542 7.02439 13.8542C10.878 13.8542 14 10.7431 14 6.90278C13.9512 5.10417 13.2683 3.35417 11.9512 2.04167ZM10.3902 9.43056C10.2439 9.81944 9.56097 10.2083 9.21951 10.2569C8.92683 10.3056 8.53659 10.3056 8.14634 10.2083C7.90244 10.1111 7.56098 10.0139 7.17073 9.81945C5.41463 9.09028 4.29268 7.34028 4.19512 7.19444C4.09756 7.09722 3.46342 6.27083 3.46342 5.39583C3.46342 4.52083 3.90244 4.13194 4.04878 3.9375C4.19512 3.74306 4.39024 3.74306 4.53658 3.74306C4.63415 3.74306 4.78049 3.74306 4.87805 3.74306C4.97561 3.74306 5.12195 3.69444 5.26829 4.03472C5.41463 4.375 5.7561 5.25 5.80488 5.29861C5.85366 5.39583 5.85366 5.49306 5.80488 5.59028C5.7561 5.6875 5.70731 5.78472 5.60975 5.88194C5.51219 5.97917 5.41463 6.125 5.36585 6.17361C5.26829 6.27083 5.17073 6.36805 5.26829 6.51389C5.36585 6.70833 5.70732 7.24305 6.2439 7.72917C6.92683 8.3125 7.46341 8.50695 7.65854 8.60417C7.85366 8.70139 7.95122 8.65278 8.04878 8.55556C8.14634 8.45833 8.48781 8.06945 8.58537 7.875C8.68293 7.68056 8.82927 7.72917 8.97561 7.77778C9.12195 7.82639 10 8.26389 10.1463 8.36111C10.3415 8.45833 10.439 8.50694 10.4878 8.55556C10.5366 8.70139 10.5366 9.04167 10.3902 9.43056Z"
                                      fill="white" />
                              </svg>
                          </span>
                          <span>Записаться через WhatsApp</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <?php return ob_get_clean();
}

// Этапы прохождения
function checkupStages(){
  ob_start(); ?>

  <section class="checkup-stages _section-lg" style="background-image: url(<?php echo esc_url(get_sub_field('checkupStages_img')['url']); ?>);">
      <div class="container">
          <h2 class="checkup-stages__title _title">
              <?php the_sub_field('checkupStages_title'); ?>
          </h2>
          <div class="cursor @@class">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
                  <!-- SVG content remains unchanged -->
                  <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
                      fill="rgba(190,190,190,0.3)"></rect>
                  <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
                      fill="rgba(190,190,190,0.3)"></rect>
                  <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
                      fill="rgba(190,190,190,0.3)"></rect>
                  <path class="tooltip-horizontal-scroll-icon_hand"
                      d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
                      fill="rgba(190,190,190,1)"></path>
                  <style>
                      .tooltip-horizontal-scroll-icon_hand {
                          animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
                      }

                      .tooltip-horizontal-scroll-icon_card {
                          animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
                      }

                      @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
                          0% {
                              transform: translateX(80px) scale(1);
                              opacity: 0
                          }

                          10% {
                              transform: translateX(80px) scale(1);
                              opacity: 1
                          }

                          20%,
                          60% {
                              transform: translateX(175px) scale(.6);
                              opacity: 1
                          }

                          80% {
                              transform: translateX(5px) scale(.6);
                              opacity: 1
                          }

                          to {
                              transform: translateX(5px) scale(.6);
                              opacity: 0
                          }
                      }

                      @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

                          0%,
                          60% {
                              transform: translateX(0)
                          }

                          80%,
                          to {
                              transform: translateX(-240px)
                          }
                      }
                  </style>
              </svg>
          </div>
          <div class="checkup-stages__items">
              <?php
              if(have_rows('checkupStages_steps')) :
                $counter = 1;
                  while(have_rows('checkupStages_steps')) : the_row();
                      $num = str_pad($counter, 2, '0', STR_PAD_LEFT); ?>
              <div class="checkup-stages__item">
                  <span class="checkup-stages__item-stage">
                      <?php echo $num; ?>
                  </span>
                  <span class="checkup-stages__item-icon">
                      <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M10.8225 24.6783C10.1725 24.6783 9.55501 24.3533 9.13251 23.7792L7.83253 22.0458C7.83253 22.0567 7.77836 22.0242 7.75669 22.0242H7.35586C3.65086 22.0242 1.35419 21.0167 1.35419 16.0225V11.6892C1.35419 7.12834 4.13837 5.93668 6.47837 5.73084C6.73837 5.69834 7.0417 5.6875 7.35586 5.6875H14.2892C18.2109 5.6875 20.2909 7.76751 20.2909 11.6892V16.0225C20.2909 16.3367 20.28 16.64 20.2367 16.9325C20.0417 19.24 18.85 22.0242 14.2892 22.0242H13.8559L12.5125 23.7792C12.09 24.3533 11.4725 24.6783 10.8225 24.6783ZM7.35586 7.3125C7.1067 7.3125 6.86836 7.32333 6.64086 7.345C4.12753 7.56167 2.97919 8.93751 2.97919 11.6892V16.0225C2.97919 19.7383 4.12753 20.3992 7.35586 20.3992H7.78919C8.27669 20.3992 8.82918 20.67 9.13251 21.06L10.4325 22.8042C10.6709 23.1292 10.9742 23.1292 11.2125 22.8042L12.5125 21.0708C12.8267 20.6483 13.325 20.3992 13.8559 20.3992H14.2892C17.0409 20.3992 18.4167 19.24 18.6225 16.77C18.655 16.51 18.6659 16.2717 18.6659 16.0225V11.6892C18.6659 8.66668 17.3117 7.3125 14.2892 7.3125H7.35586Z"
                              fill="white" />
                          <path
                              d="M10.8228 15.3727C10.2161 15.3727 9.73944 14.8852 9.73944 14.2894C9.73944 13.6936 10.2269 13.2061 10.8228 13.2061C11.4186 13.2061 11.9061 13.6936 11.9061 14.2894C11.9061 14.8852 11.4294 15.3727 10.8228 15.3727Z"
                              fill="white" />
                          <path
                              d="M14.2891 15.3727C13.6824 15.3727 13.2057 14.8852 13.2057 14.2894C13.2057 13.6936 13.6932 13.2061 14.2891 13.2061C14.8849 13.2061 15.3724 13.6936 15.3724 14.2894C15.3724 14.8852 14.8849 15.3727 14.2891 15.3727Z"
                              fill="white" />
                          <path
                              d="M7.36648 15.3727C6.75981 15.3727 6.28314 14.8852 6.28314 14.2894C6.28314 13.6936 6.77064 13.2061 7.36648 13.2061C7.96231 13.2061 8.44981 13.6936 8.44981 14.2894C8.44981 14.8852 7.96231 15.3727 7.36648 15.3727Z"
                              fill="white" />
                          <path
                              d="M19.4352 17.6473C19.2185 17.6473 19.0018 17.5607 18.8502 17.3982C18.6768 17.2248 18.601 16.9757 18.6335 16.7374C18.666 16.5099 18.6768 16.2715 18.6768 16.0223V11.689C18.6768 8.66651 17.3227 7.31234 14.3002 7.31234H7.36682C7.11765 7.31234 6.87935 7.32317 6.65185 7.34484C6.41351 7.37734 6.16433 7.29066 5.991 7.12816C5.81766 6.95482 5.72015 6.71652 5.74182 6.47818C5.93682 4.13818 7.13932 1.354 11.7002 1.354H18.6335C22.5552 1.354 24.6352 3.43401 24.6352 7.35568V11.689C24.6352 16.2498 21.851 17.4415 19.511 17.6473C19.4785 17.6473 19.4568 17.6473 19.4352 17.6473ZM7.49685 5.68734H14.2893C18.211 5.68734 20.291 7.76735 20.291 11.689V15.8815C22.1327 15.4265 22.9993 14.0723 22.9993 11.689V7.35568C22.9993 4.33318 21.6452 2.979 18.6227 2.979H11.6893C9.30601 2.979 7.96268 3.84567 7.49685 5.68734Z"
                              fill="white" />
                      </svg>
                  </span>
                  <h4 class="checkup-stages__item-title">
                      <?php the_sub_field('title_step'); ?>
                  </h4>
                  <p class="checkup-stages__item-text">
                      <?php the_sub_field('text_step'); ?>
                  </p>
                  <?php if(have_rows('list')) : ?>
                  <ul class="checkup-stages__item-list">
                      <?php while(have_rows('list')) : the_row(); ?>
                      <li class="checkup-stages__item-point">
                          <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                                  fill="white" />
                          </svg>
                          <span>
                              <?php the_sub_field('point'); ?>
                          </span>
                      </li>
                      <?php endwhile; ?>
                  </ul>
                  <?php endif; ?>
                  <span class="checkup-stages__item-step">
                      <?php echo $num; ?>
                  </span>
              </div>
              <?php
                  $counter++;
                  endwhile;
              endif;
              ?>
          </div>
      </div>
  </section>

  <?php return ob_get_clean();
}

// Персональный план
function personalPlan(){
  ob_start(); ?>

  <section class="personal-plan">
    <div class="container">
      <h2 class="personal-plan__title _title">
        В результате вы получите<br>
        персональный план лечения<br>
        или профилактики
      </h2>
      <div class="personal-plan__inner relative">
        <img class="personal-plan__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/personal-plan-1.webp" alt="personal-plan-1">
        <div class="personal-plan__info">
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12.9998 24.6462C6.57567 24.6462 1.354 19.4245 1.354 13.0003C1.354 6.57616 6.57567 1.35449 12.9998 1.35449C19.424 1.35449 24.6457 6.57616 24.6457 13.0003C24.6457 19.4245 19.424 24.6462 12.9998 24.6462ZM12.9998 2.97949C7.47484 2.97949 2.979 7.47533 2.979 13.0003C2.979 18.5253 7.47484 23.0212 12.9998 23.0212C18.5248 23.0212 23.0207 18.5253 23.0207 13.0003C23.0207 7.47533 18.5248 2.97949 12.9998 2.97949Z"
              fill="white" />
            <path
              d="M17.3333 13.8125H8.66663C8.22246 13.8125 7.85413 13.4442 7.85413 13C7.85413 12.5558 8.22246 12.1875 8.66663 12.1875H17.3333C17.7775 12.1875 18.1458 12.5558 18.1458 13C18.1458 13.4442 17.7775 13.8125 17.3333 13.8125Z"
              fill="white" />
            <path
              d="M13 18.1462C12.5558 18.1462 12.1875 17.7778 12.1875 17.3337V8.66699C12.1875 8.22283 12.5558 7.85449 13 7.85449C13.4442 7.85449 13.8125 8.22283 13.8125 8.66699V17.3337C13.8125 17.7778 13.4442 18.1462 13 18.1462Z"
              fill="white" />
          </svg>

          <p class="personal-plan__info-text">
            включая схемы<br> наблюдения, нутритивную<br> и медикаментозную<br> поддержку
          </p>
        </div>
        <img class="personal-plan__right-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/personal-plan-2.webp" alt="personal-plan-2">
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Форма обратной связи (1 вариант)
function callback_1(){
  ob_start(); ?>

  <section class="callback">
    <div class="container">
      <div class="callback__inner _image-wrapper relative">
        <div class="overlay"></div>
        <div class="callback__left relative">
          <h2 class="callback__title _title">
            <?php the_sub_field('callback_1_title');?>
          </h2>
          <div class="callback__info">
            <img class="callback__info-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/callback-manager.webp" alt="callback-manager">
            <!-- Посадка -->
            <p class="callback__info-text">
              Мы перезвоним вам<br> в течение 7 минут
            </p>
          </div>
        </div>
        <form class="callback__form form-submit relative" action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Есть вопросы или хотите записаться по телефону?">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <!-- Посадка -->
          <h4 class="callback__form-title">
            Заполните форму
          </h4>
          <!-- Посадка -->
          <p class="callback__form-subtitle">
            Введите телефон в форме ниже
          </p>
          <div class="callback__form-inputs">
            <input class="callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
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

  <?php return ob_get_clean();
}

// График прохождения
function checkupSchedule(){
  ob_start(); ?>

  <section class="checkup-schedule">
    <div class="container">
      <h2 class="checkup-schedule__title _title">
        <?php the_sub_field('checkupSchedule_title'); ?>
      </h2>
      <div class="cursor @@class">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
          <!-- SVG остается таким же -->
        </svg>
      </div>
      <div class="checkup-schedule__items">
        <!-- Левая карточка -->
        <?php if (have_rows('checkupSchedule_leftCard')) : ?>
          <?php while (have_rows('checkupSchedule_leftCard')) : the_row(); ?>
            <div class="checkup-schedule__item">
              <p class="checkup-schedule__item-suptitle">
                <?php the_sub_field('leftCard_Suptitle'); ?>
              </p>
              <h4 class="checkup-schedule__item-title _title">
                <?php the_sub_field('leftCard_Title'); ?>
              </h4>
              <p class="checkup-schedule__item-subtitle">
                <?php the_sub_field('leftCard_Subtitle'); ?>
              </p>
              <p class="checkup-schedule__item-text">
                <?php the_sub_field('leftCard_Text'); ?>
              </p>
              <div class="checkup-schedule__item-doctors">
                <?php if (have_rows('leftCard_Doctors')) : ?>
                  <?php while (have_rows('leftCard_Doctors')) : the_row(); ?>
                    <?php
                    $doctor_image = get_sub_field('icon_doctor'); // Предполагаю, что у вас есть такое поле в подгруппе
                    if ($doctor_image) : ?>
                      <img class="checkup-schedule__item-doctor" src="<?php echo esc_url($doctor_image['url']); ?>" alt="<?php echo esc_attr($doctor_image['alt']); ?>">
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <!-- Правая карточка -->
        <?php if (have_rows('checkupSchedule_rightCard')) : ?>
          <?php while (have_rows('checkupSchedule_rightCard')) : the_row(); ?>
            <div class="checkup-schedule__item">
              <p class="checkup-schedule__item-suptitle">
                <?php the_sub_field('rightCard_Suptitle'); ?>
              </p>
              <h4 class="checkup-schedule__item-title _title">
                <?php the_sub_field('rightCard_Title'); ?>
              </h4>
              <p class="checkup-schedule__item-subtitle">
                <?php the_sub_field('rightCard_Subtitle'); ?>
              </p>
              <?php $rightCard_Img = get_sub_field('rightCard_Img'); ?>
              <?php if ($rightCard_Img) : ?>
                <img class="checkup-schedule__img" src="<?php echo esc_url($rightCard_Img['url']); ?>" alt="<?php echo esc_attr($rightCard_Img['alt']); ?>">
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Состав чекапа
function checkupCompound() {
  ob_start(); ?>

  <section class="checkup-compound">
      <div class="container">
          <h2 class="checkup-compound__title _title">
              <?php the_sub_field('checkupCompound_title'); ?>
          </h2>
          <div class="checkup-compound__inner">
              <div class="checkup-compound__left accordion">
                  <?php
                  $counter = 1;
                  if(have_rows('checkupCompound_compound')) :
                      while(have_rows('checkupCompound_compound')) : the_row();
                          $num = str_pad($counter, 2, '0', STR_PAD_LEFT);
                  ?>
                  <div class="checkup-compound__item accordion-item">
                      <div class="checkup-compound__item-header accordion-header">
                          <div class="checkup-compound__item-left">
                              <span class="checkup-compound__item-step">
                                  <?php echo $num; ?>
                              </span>
                              <h4 class="checkup-compound__item-title">
                                  <?php the_sub_field('сompound_name'); ?>
                              </h4>
                          </div>
                          <div class="open-item checkup-compound__item-icon">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M10.75 2C10.75 1.58579 10.4142 1.25 10 1.25L3.25 1.25C2.83578 1.25 2.5 1.58579 2.5 2C2.5 2.41421 2.83578 2.75 3.25 2.75L9.25 2.75L9.25 8.75C9.25 9.16421 9.58579 9.5 10 9.5C10.4142 9.5 10.75 9.16421 10.75 8.75L10.75 2ZM2 10L2.53033 10.5303L10.5303 2.53033L10 2L9.46967 1.46967L1.46967 9.46967L2 10Z" fill="white"/>
                              </svg>
                          </div>
                      </div>
                      <?php if(have_rows('compounds')) : while(have_rows('compounds')) : the_row()?>
                      <div class="checkup-compound__item-body accordion-body">
                          <?php if(have_rows('compound_list')) : ?>
                              <ul class="checkup-compound__item-list">
                                  <?php while(have_rows('compound_list')) : the_row(); ?>
                                      <li class="checkup-compound__item-point">
                                          <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z" fill="white"/>
                                          </svg>
                                          <span><?php the_sub_field('compound_point'); ?></span>
                                      </li>
                                  <?php endwhile; ?>
                              </ul>
                          <?php endif; ?>

                          <?php if(get_sub_field('сompound_price_accord') || get_sub_field('сompound_name_accord')) : ?>
                              <div class="checkup-compound__item-cost change-popup-item">
                                  <?php if(get_sub_field('сompound_name_accord')) : ?>
                                      <h5 class="checkup-compound__item-name change-popup-title">
                                          <?php the_sub_field('сompound_name_accord'); ?>
                                      </h5>
                                  <?php endif; ?>

                                  <div class="checkup-compound__item-right">
                                      <?php if(get_sub_field('сompound_price_accord')) : ?>
                                          <span class="checkup-compound__item-price">
                                              <?php the_sub_field('сompound_price_accord'); ?> ₽
                                          </span>
                                      <?php endif; ?>
                                      <a class="checkup-compound__item-btn _gray-btn change-popup" href="#callback-modal" data-fancybox="">
                                          Записаться
                                      </a>
                                  </div>
                              </div>
                          <?php endif; ?>
                      </div>
                      <?php endwhile; endif; ?>
                  </div>
                  <?php
                      $counter++;
                      endwhile;
                  endif;
                  ?>
              </div>

              <div class="checkup-compound__right">
                  <div class="checkup-compound__right-wrapper">
                      <?php
                      $img = get_sub_field('checkupCompound_img');
                      if($img) : ?>
                          <img class="checkup-compound__right-img _img"
                              src="<?php echo esc_url($img['url']); ?>"
                              alt="<?php echo esc_attr($img['alt']); ?>">
                      <?php endif; ?>
                      <div class="checkup-compound__right-content">
                          <p class="checkup-compound__right-name">
                              <?php the_sub_field('checkupCompound_name'); ?>
                          </p>
                          <div class="checkup-compound__right-info">
                              <p class="checkup-compound__right-text">
                                  <?php the_sub_field('checkupCompound_position'); ?>
                              </p>
                              <?php if(get_sub_field('checkupCompound_experience')) : ?>
                                  <p class="checkup-compound__right-exp">
                                      <?php the_sub_field('checkupCompound_experience'); ?>
                                  </p>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <?php
  return ob_get_clean();
}

// Медицина нового уровня
function newLevel(){
  ob_start(); ?>

  <section class="new-level">
    <img class="new-level__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
    <div class="container relative">
      <h2 class="new-level__title _title">
        Медицина нового уровня<br>
        в Abakumov Clinic
      </h2>
      <img class="new-level__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
      <div class="cursor @@class">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
          <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <path class="tooltip-horizontal-scroll-icon_hand"
            d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
            fill="rgba(190,190,190,1)"></path>
          <style>
            .tooltip-horizontal-scroll-icon_hand {
              animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
            }

            .tooltip-horizontal-scroll-icon_card {
              animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
            }

            @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
              0% {
                transform: translateX(80px) scale(1);
                opacity: 0
              }

              10% {
                transform: translateX(80px) scale(1);
                opacity: 1
              }

              20%,
              60% {
                transform: translateX(175px) scale(.6);
                opacity: 1
              }

              80% {
                transform: translateX(5px) scale(.6);
                opacity: 1
              }

              to {
                transform: translateX(5px) scale(.6);
                opacity: 0
              }
            }

            @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

              0%,
              60% {
                transform: translateX(0)
              }

              80%,
              to {
                transform: translateX(-240px)
              }
            }
          </style>
        </svg>
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
              <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                  fill="white" />
              </svg>

              <span>сосудистых</span>
            </li>
            <li class="new-level__item-point">
              <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                  fill="white" />
              </svg>

              <span>гормональных</span>
            </li>
            <li class="new-level__item-point">
              <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                  fill="white" />
              </svg>

              <span>аутоиммунных</span>
            </li>
            <li class="new-level__item-point">
              <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                  fill="white" />
              </svg>

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

  <?php return ob_get_clean();
}

// Блок отзывов (изображения вытянутые)
function checkupReviews(){
  ob_start(); ?>

  <section class="checkup-reviews _section-lg">
    <div class="container">
      <div class="checkup-reviews__top">
        <h2 class="checkup-reviews__title _title">
          <?php the_sub_field('checkupReviews_title'); ?>
        </h2>
        <div class="checkup-reviews__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                fill="white" />
            </svg>

          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                fill="white" />
            </svg>

          </div>
        </div>
      </div>
      <div class="checkup-reviews__swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp"
                alt="checkup-reviews-1">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp"
                alt="checkup-reviews-2">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp"
                alt="checkup-reviews-3">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp"
                alt="checkup-reviews-4">
            </a>
          </div>
          <div class="swiper-slide checkup-reviews__slide">
            <a class="checkup-reviews__item" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp" data-fancybox="checkup-reviews">
              <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp"
                alt="checkup-reviews-5">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Видео-отзывы
function checkupАfter(){
  ob_start(); ?>

  <section class="checkup-after _section-lg">
    <div class="container">
      <h2 class="checkup-after__title _title">
        Или посмотрите отзывы пациентов
        после прохождения чек-апов
      </h2>
      <div class="checkup-after__items">
        <div class="checkup-after__item">
          <a class="checkup-after__item-link" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-1.webp" data-fancybox>
            <img class="checkup-after__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-1.webp" alt="checkup-after-1">
            <div class="play">
              <div class="play__inner">
                <svg width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M41.4506 21.5916C43.9927 23.1529 43.9927 26.8471 41.4506 28.4084L17.8435 42.908C15.1783 44.545 11.75 42.6273 11.75 39.4996L11.75 10.5004C11.75 7.37267 15.1783 5.45503 17.8435 7.09199L41.4506 21.5916Z"
                    fill="white" />
                </svg>

              </div>
            </div>
          </a>
          <h4 class="checkup-after__item-text">
            «Прошёл чекап за один день —<br> спокойно, без очередей. Получил <br>чёткие рекомендации и ответы на
            всё»
          </h4>
        </div>
        <div class="checkup-after__item">
          <a class="checkup-after__item-link" href="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-2.webp" data-fancybox>
            <img class="checkup-after__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-after-2.webp" alt="checkup-after-2">
            <div class="play">
              <div class="play__inner">
                <svg width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M41.4506 21.5916C43.9927 23.1529 43.9927 26.8471 41.4506 28.4084L17.8435 42.908C15.1783 44.545 11.75 42.6273 11.75 39.4996L11.75 10.5004C11.75 7.37267 15.1783 5.45503 17.8435 7.09199L41.4506 21.5916Z"
                    fill="white" />
                </svg>

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
                <svg width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M41.4506 21.5916C43.9927 23.1529 43.9927 26.8471 41.4506 28.4084L17.8435 42.908C15.1783 44.545 11.75 42.6273 11.75 39.4996L11.75 10.5004C11.75 7.37267 15.1783 5.45503 17.8435 7.09199L41.4506 21.5916Z"
                    fill="white" />
                </svg>

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

  <?php return ob_get_clean();
}

// Видео-отзывы (слайдер)
function videoRevSlider(){
  ob_start(); ?>

  <section class="checkup-reviews-after _section-lg">
    <div class="container">
      <div class="checkup-reviews-after__top">
        <h2 class="checkup-reviews-after__title _title">
          <?php the_sub_field('videoRevSlider_title');?>
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
      <?php if(have_rows('videoRevSlider_video')) : ?>
      <div class="checkup-reviews-after__swiper swiper">
        <div class="swiper-wrapper">
          <?php while(have_rows('videoRevSlider_video')) : the_row();
          $img = get_sub_field('preview'); ?>
          <div class="swiper-slide checkup-reviews-after__slide">
            <div class="checkup-after__item">
              <a class="checkup-after__item-link" href="<?php echo $link;?>" data-fancybox>
                <img class="checkup-after__item-img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
                <div class="play">
                  <div class="play__inner">
                    <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                  </div>
                </div>
              </a>
              <?php if(get_sub_field('text')) :?>
              <h4 class="checkup-after__item-text">
                «Прошёл чекап за один день —<br> спокойно, без очередей. Получил <br>чёткие рекомендации и ответы на всё»
              </h4>
              <?php endif; ?>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Рейтинг клиники
function rating(){
  ob_start(); ?>

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
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
            <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
              fill="rgba(190,190,190,0.3)"></rect>
            <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
              fill="rgba(190,190,190,0.3)"></rect>
            <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
              fill="rgba(190,190,190,0.3)"></rect>
            <path class="tooltip-horizontal-scroll-icon_hand"
              d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
              fill="rgba(190,190,190,1)"></path>
            <style>
              .tooltip-horizontal-scroll-icon_hand {
                animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
              }

              .tooltip-horizontal-scroll-icon_card {
                animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
              }

              @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
                0% {
                  transform: translateX(80px) scale(1);
                  opacity: 0
                }

                10% {
                  transform: translateX(80px) scale(1);
                  opacity: 1
                }

                20%,
                60% {
                  transform: translateX(175px) scale(.6);
                  opacity: 1
                }

                80% {
                  transform: translateX(5px) scale(.6);
                  opacity: 1
                }

                to {
                  transform: translateX(5px) scale(.6);
                  opacity: 0
                }
              }

              @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

                0%,
                60% {
                  transform: translateX(0)
                }

                80%,
                to {
                  transform: translateX(-240px)
                }
              }
            </style>
          </svg>
        </div>
        <div class="rating__elems">
          <div class="rating__elem">
            <div class="rating__elem-top">
              <h5 class="rating__elem-title">
                Персонал
              </h5>
              <p class="rating__elem-percent">
                98%
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

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
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

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
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

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
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

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
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

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
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

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
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.54468 10.0151V4.51182C4.54468 4.29515 4.60968 4.0839 4.72884 3.90515L6.20759 1.70598C6.44051 1.3539 7.02009 1.10473 7.51301 1.2889C8.04384 1.46765 8.39593 2.06348 8.28218 2.59432L8.00051 4.36557C7.97884 4.52807 8.02218 4.67432 8.11426 4.78807C8.20634 4.89098 8.34176 4.95598 8.48801 4.95598H10.7143C11.1422 4.95598 11.5105 5.12932 11.7272 5.43265C11.933 5.72515 11.9709 6.10432 11.8355 6.4889L10.503 10.546C10.3351 11.2176 9.60384 11.7647 8.87801 11.7647H6.76551C6.40259 11.7647 5.89343 11.6401 5.66051 11.4072L4.96718 10.871C4.70176 10.6706 4.54468 10.351 4.54468 10.0151Z"
                    fill="#33A705" />
                  <path
                    d="M2.82212 3.45605H2.26421C1.42462 3.45605 1.08337 3.78105 1.08337 4.58272V10.0319C1.08337 10.8336 1.42462 11.1586 2.26421 11.1586H2.82212C3.66171 11.1586 4.00296 10.8336 4.00296 10.0319V4.58272C4.00296 3.78105 3.66171 3.45605 2.82212 3.45605Z"
                    fill="#33A705" />
                </svg>

              </p>
            </div>
            <p class="rating__elem-text">
              13 отзывов
            </p>
          </div>
        </div>
        <div class="rating__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                fill="white" />
            </svg>

          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                fill="white" />
            </svg>

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
            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19 6.64027C18.9532 6.89975 18.7763 7.07706 18.5836 7.25279C17.3017 8.42279 16.0249 9.59751 14.7455 10.7699C14.6695 10.8395 14.6193 10.8949 14.6423 11.0183C14.9634 12.7462 15.2715 14.4764 15.5901 16.2047C15.6419 16.4858 15.5696 16.7138 15.3292 16.879C15.0863 17.046 14.8283 17.0284 14.5649 16.8978C12.9323 16.0883 11.2967 15.2836 9.66453 14.4729C9.54161 14.412 9.44963 14.4057 9.32128 14.4694C7.69032 15.2812 6.05518 16.0852 4.42254 16.8939C4.15371 17.0268 3.8899 17.05 3.6403 16.8727C3.40241 16.7032 3.32047 16.4732 3.39029 16.1953C3.41872 16.0813 3.42708 15.9633 3.4484 15.8473C3.74106 14.2406 4.03163 12.6334 4.33307 11.0282C4.35732 10.8992 4.30882 10.8379 4.22646 10.762C2.90656 9.55348 1.58708 8.34534 0.272608 7.1317C0.167668 7.03499 0.0694178 6.908 0.0284453 6.77866C-0.082766 6.42561 0.141747 6.07807 0.533913 6.0136C1.1761 5.90784 1.82288 5.82921 2.4684 5.74076C3.71807 5.56974 4.96815 5.40226 6.21614 5.22298C6.28721 5.21276 6.36414 5.11762 6.40261 5.04528C7.08534 3.75498 7.76264 2.46192 8.4412 1.16965C8.57917 0.906638 8.72299 0.645982 8.85469 0.380216C8.9797 0.126244 9.18832 0.00279626 9.47889 4.4243e-05C9.77825 -0.00270778 9.98896 0.122706 10.124 0.381002C10.9347 1.93235 11.7525 3.48056 12.5619 5.03231C12.6296 5.16244 12.7044 5.22023 12.8662 5.24185C14.6866 5.48207 16.5049 5.73564 18.3244 5.98136C18.7165 6.03443 18.9201 6.2542 19 6.60096L19 6.64027Z"
                fill="#FFCA41" />
            </svg>

            <p class="rating__link-num">
              5
            </p>
            <p class="rating__link-grade">
              52 оценки
            </p>
          </div>
          <div class="rating__link-right">
            <p class="arrow-icon">
              <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                  fill="white" />
              </svg>

            </p>
            <span class="rating__right-text">
              Открыть отзывы
            </span>
          </div>
        </a>
        <a class="rating__link" href="#" target="_blank">
          <img class="rating__link-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating__logo-2.webp" alt="rating-logo">
          <div class="rating__link-center">
            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19 6.64027C18.9532 6.89975 18.7763 7.07706 18.5836 7.25279C17.3017 8.42279 16.0249 9.59751 14.7455 10.7699C14.6695 10.8395 14.6193 10.8949 14.6423 11.0183C14.9634 12.7462 15.2715 14.4764 15.5901 16.2047C15.6419 16.4858 15.5696 16.7138 15.3292 16.879C15.0863 17.046 14.8283 17.0284 14.5649 16.8978C12.9323 16.0883 11.2967 15.2836 9.66453 14.4729C9.54161 14.412 9.44963 14.4057 9.32128 14.4694C7.69032 15.2812 6.05518 16.0852 4.42254 16.8939C4.15371 17.0268 3.8899 17.05 3.6403 16.8727C3.40241 16.7032 3.32047 16.4732 3.39029 16.1953C3.41872 16.0813 3.42708 15.9633 3.4484 15.8473C3.74106 14.2406 4.03163 12.6334 4.33307 11.0282C4.35732 10.8992 4.30882 10.8379 4.22646 10.762C2.90656 9.55348 1.58708 8.34534 0.272608 7.1317C0.167668 7.03499 0.0694178 6.908 0.0284453 6.77866C-0.082766 6.42561 0.141747 6.07807 0.533913 6.0136C1.1761 5.90784 1.82288 5.82921 2.4684 5.74076C3.71807 5.56974 4.96815 5.40226 6.21614 5.22298C6.28721 5.21276 6.36414 5.11762 6.40261 5.04528C7.08534 3.75498 7.76264 2.46192 8.4412 1.16965C8.57917 0.906638 8.72299 0.645982 8.85469 0.380216C8.9797 0.126244 9.18832 0.00279626 9.47889 4.4243e-05C9.77825 -0.00270778 9.98896 0.122706 10.124 0.381002C10.9347 1.93235 11.7525 3.48056 12.5619 5.03231C12.6296 5.16244 12.7044 5.22023 12.8662 5.24185C14.6866 5.48207 16.5049 5.73564 18.3244 5.98136C18.7165 6.03443 18.9201 6.2542 19 6.60096L19 6.64027Z"
                fill="#FFCA41" />
            </svg>

            <p class="rating__link-grade">
              19 отзывов
            </p>
          </div>
          <div class="rating__link-right">
            <p class="arrow-icon">
              <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                  fill="white" />
              </svg>

            </p>
            <span class="rating__right-text">
              Открыть отзывы
            </span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Комфорт
function careComfort(){
  ob_start(); ?>

  <section class="care-comfort">
    <div class="container">
      <h2 class="care-comfort__title _title">
        С заботой о вашем комфорте
      </h2>
      <div class="cursor @@class">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 300" height="42" width="42">
          <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5"
            fill="rgba(190,190,190,0.3)"></rect>
          <path class="tooltip-horizontal-scroll-icon_hand"
            d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
            fill="rgba(190,190,190,1)"></path>
          <style>
            .tooltip-horizontal-scroll-icon_hand {
              animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
            }

            .tooltip-horizontal-scroll-icon_card {
              animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
            }

            @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
              0% {
                transform: translateX(80px) scale(1);
                opacity: 0
              }

              10% {
                transform: translateX(80px) scale(1);
                opacity: 1
              }

              20%,
              60% {
                transform: translateX(175px) scale(.6);
                opacity: 1
              }

              80% {
                transform: translateX(5px) scale(.6);
                opacity: 1
              }

              to {
                transform: translateX(5px) scale(.6);
                opacity: 0
              }
            }

            @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

              0%,
              60% {
                transform: translateX(0)
              }

              80%,
              to {
                transform: translateX(-240px)
              }
            }
          </style>
        </svg>
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

  <?php return ob_get_clean();
}

// Контакты
function contacts(){
  ob_start(); ?>

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
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M12 14.1704C9.87 14.1704 8.13 12.4404 8.13 10.3004C8.13 8.16043 9.87 6.44043 12 6.44043C14.13 6.44043 15.87 8.17043 15.87 10.3104C15.87 12.4504 14.13 14.1704 12 14.1704ZM12 7.94043C10.7 7.94043 9.63 9.00043 9.63 10.3104C9.63 11.6204 10.69 12.6804 12 12.6804C13.31 12.6804 14.37 11.6204 14.37 10.3104C14.37 9.00043 13.3 7.94043 12 7.94043Z"
                    fill="white" />
                  <path
                    d="M12 22.76C10.52 22.76 9.02999 22.2 7.86999 21.09C4.91999 18.25 1.65999 13.72 2.88999 8.33C3.99999 3.44 8.26999 1.25 12 1.25C12 1.25 12 1.25 12.01 1.25C15.74 1.25 20.01 3.44 21.12 8.34C22.34 13.73 19.08 18.25 16.13 21.09C14.97 22.2 13.48 22.76 12 22.76ZM12 2.75C9.08999 2.75 5.34999 4.3 4.35999 8.66C3.27999 13.37 6.23999 17.43 8.91999 20C10.65 21.67 13.36 21.67 15.09 20C17.76 17.43 20.72 13.37 19.66 8.66C18.66 4.3 14.91 2.75 12 2.75Z"
                    fill="white" />
                </svg>


              </div>
              <p class="contacts__item-title">
                <span>Адрес:</span> г. Москва,<br>
                ул. 1-я Бородинская д.3
              </p>
            </div>
            <div class="contacts__item">
              <div class="contacts__item-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M19.9996 11.7501H3.99961C3.76961 11.7501 3.55961 11.6501 3.41961 11.4701C3.27961 11.3001 3.21961 11.0601 3.26961 10.8401L4.39961 5.44008C4.76961 3.69008 5.51961 2.08008 8.48961 2.08008H15.5196C18.4896 2.08008 19.2396 3.70008 19.6096 5.44008L20.7396 10.8501C20.7896 11.0701 20.7296 11.3001 20.5896 11.4801C20.4396 11.6501 20.2296 11.7501 19.9996 11.7501ZM4.91961 10.2501H19.0696L18.1296 5.75008C17.8496 4.44008 17.5196 3.58008 15.5096 3.58008H8.48961C6.47961 3.58008 6.14961 4.44008 5.86961 5.75008L4.91961 10.2501Z"
                    fill="white" />
                  <path
                    d="M19.9596 22.75H18.0796C16.4596 22.75 16.1496 21.82 15.9496 21.21L15.7496 20.61C15.4896 19.85 15.4596 19.75 14.5596 19.75H9.4396C8.5396 19.75 8.4796 19.92 8.2496 20.61L8.0496 21.21C7.8396 21.83 7.5396 22.75 5.9196 22.75H4.0396C3.2496 22.75 2.4896 22.42 1.9596 21.84C1.4396 21.27 1.1896 20.51 1.2596 19.75L1.8196 13.66C1.9696 12.01 2.4096 10.25 5.6196 10.25H18.3796C21.5896 10.25 22.0196 12.01 22.1796 13.66L22.7396 19.75C22.8096 20.51 22.5596 21.27 22.0396 21.84C21.5096 22.42 20.7496 22.75 19.9596 22.75ZM9.4396 18.25H14.5596C16.3796 18.25 16.8096 19.06 17.1696 20.12L17.3796 20.74C17.5496 21.25 17.5496 21.26 18.0896 21.26H19.9696C20.3396 21.26 20.6896 21.11 20.9396 20.84C21.1796 20.58 21.2896 20.25 21.2596 19.9L20.6996 13.81C20.5696 12.46 20.4096 11.76 18.3996 11.76H5.6196C3.5996 11.76 3.4396 12.46 3.3196 13.81L2.7596 19.9C2.7296 20.25 2.8396 20.58 3.0796 20.84C3.3196 21.11 3.6796 21.26 4.0496 21.26H5.9296C6.4696 21.26 6.4696 21.25 6.6396 20.75L6.8396 20.14C7.0896 19.34 7.4596 18.25 9.4396 18.25Z"
                    fill="white" />
                  <path
                    d="M3.99957 8.75H2.99957C2.58957 8.75 2.24957 8.41 2.24957 8C2.24957 7.59 2.58957 7.25 2.99957 7.25H3.99957C4.40957 7.25 4.74957 7.59 4.74957 8C4.74957 8.41 4.40957 8.75 3.99957 8.75Z"
                    fill="white" />
                  <path
                    d="M20.9996 8.75H19.9996C19.5896 8.75 19.2496 8.41 19.2496 8C19.2496 7.59 19.5896 7.25 19.9996 7.25H20.9996C21.4096 7.25 21.7496 7.59 21.7496 8C21.7496 8.41 21.4096 8.75 20.9996 8.75Z"
                    fill="white" />
                  <path
                    d="M11.9996 5.75C11.5896 5.75 11.2496 5.41 11.2496 5V3C11.2496 2.59 11.5896 2.25 11.9996 2.25C12.4096 2.25 12.7496 2.59 12.7496 3V5C12.7496 5.41 12.4096 5.75 11.9996 5.75Z"
                    fill="white" />
                  <path
                    d="M13.4996 5.75H10.4996C10.0896 5.75 9.74963 5.41 9.74963 5C9.74963 4.59 10.0896 4.25 10.4996 4.25H13.4996C13.9096 4.25 14.2496 4.59 14.2496 5C14.2496 5.41 13.9096 5.75 13.4996 5.75Z"
                    fill="white" />
                  <path
                    d="M8.99957 15.75H5.99957C5.58957 15.75 5.24957 15.41 5.24957 15C5.24957 14.59 5.58957 14.25 5.99957 14.25H8.99957C9.40957 14.25 9.74957 14.59 9.74957 15C9.74957 15.41 9.40957 15.75 8.99957 15.75Z"
                    fill="white" />
                  <path
                    d="M17.9996 15.75H14.9996C14.5896 15.75 14.2496 15.41 14.2496 15C14.2496 14.59 14.5896 14.25 14.9996 14.25H17.9996C18.4096 14.25 18.7496 14.59 18.7496 15C18.7496 15.41 18.4096 15.75 17.9996 15.75Z"
                    fill="white" />
                </svg>

              </div>
              <p class="contacts__item-title">
                <span>Бесплатная</span><br>
                парковка
              </p>
            </div>
            <div class="contacts__item">
              <div class="contacts__item-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M15.0001 22.7498H9.00014C7.68014 22.7498 6.58015 22.6198 5.65015 22.3398C5.31015 22.2398 5.09015 21.9098 5.11015 21.5598C5.36015 18.5698 8.39015 16.2197 12.0001 16.2197C15.6101 16.2197 18.6301 18.5598 18.8901 21.5598C18.9201 21.9198 18.7001 22.2398 18.3501 22.3398C17.4201 22.6198 16.3201 22.7498 15.0001 22.7498ZM6.72015 21.0598C7.38015 21.1898 8.13015 21.2498 9.00014 21.2498H15.0001C15.8701 21.2498 16.6201 21.1898 17.2801 21.0598C16.7501 19.1398 14.5601 17.7197 12.0001 17.7197C9.44015 17.7197 7.25015 19.1398 6.72015 21.0598Z"
                    fill="white" />
                  <path
                    d="M15 2H9C4 2 2 4 2 9V15C2 18.78 3.14 20.85 5.86 21.62C6.08 19.02 8.75 16.97 12 16.97C15.25 16.97 17.92 19.02 18.14 21.62C20.86 20.85 22 18.78 22 15V9C22 4 20 2 15 2ZM12 14.17C10.02 14.17 8.42 12.56 8.42 10.58C8.42 8.60002 10.02 7 12 7C13.98 7 15.58 8.60002 15.58 10.58C15.58 12.56 13.98 14.17 12 14.17Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  <path
                    d="M11.9999 14.92C9.60992 14.92 7.66992 12.97 7.66992 10.58C7.66992 8.19002 9.60992 6.25 11.9999 6.25C14.3899 6.25 16.3299 8.19002 16.3299 10.58C16.3299 12.97 14.3899 14.92 11.9999 14.92ZM11.9999 7.75C10.4399 7.75 9.16992 9.02002 9.16992 10.58C9.16992 12.15 10.4399 13.42 11.9999 13.42C13.5599 13.42 14.8299 12.15 14.8299 10.58C14.8299 9.02002 13.5599 7.75 11.9999 7.75Z"
                    fill="white" />
                </svg>

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
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M11.9512 2.04167C10.6341 0.729166 8.87805 0 7.02439 0C3.17073 0 0.0487797 3.11111 0.0487797 6.95139C0.0487797 8.16667 0.390244 9.38194 0.97561 10.4028L0 14L3.70732 13.0278C4.73171 13.5625 5.85366 13.8542 7.02439 13.8542C10.878 13.8542 14 10.7431 14 6.90278C13.9512 5.10417 13.2683 3.35417 11.9512 2.04167ZM10.3902 9.43056C10.2439 9.81944 9.56097 10.2083 9.21951 10.2569C8.92683 10.3056 8.53659 10.3056 8.14634 10.2083C7.90244 10.1111 7.56098 10.0139 7.17073 9.81945C5.41463 9.09028 4.29268 7.34028 4.19512 7.19444C4.09756 7.09722 3.46342 6.27083 3.46342 5.39583C3.46342 4.52083 3.90244 4.13194 4.04878 3.9375C4.19512 3.74306 4.39024 3.74306 4.53658 3.74306C4.63415 3.74306 4.78049 3.74306 4.87805 3.74306C4.97561 3.74306 5.12195 3.69444 5.26829 4.03472C5.41463 4.375 5.7561 5.25 5.80488 5.29861C5.85366 5.39583 5.85366 5.49306 5.80488 5.59028C5.7561 5.6875 5.70731 5.78472 5.60975 5.88194C5.51219 5.97917 5.41463 6.125 5.36585 6.17361C5.26829 6.27083 5.17073 6.36805 5.26829 6.51389C5.36585 6.70833 5.70732 7.24305 6.2439 7.72917C6.92683 8.3125 7.46341 8.50695 7.65854 8.60417C7.85366 8.70139 7.95122 8.65278 8.04878 8.55556C8.14634 8.45833 8.48781 8.06945 8.58537 7.875C8.68293 7.68056 8.82927 7.72917 8.97561 7.77778C9.12195 7.82639 10 8.26389 10.1463 8.36111C10.3415 8.45833 10.439 8.50694 10.4878 8.55556C10.5366 8.70139 10.5366 9.04167 10.3902 9.43056Z"
                      fill="white" />
                  </svg>

                </div>
                <p class="contacts__info-text">
                  Запись через<br>
                  WhatsApp
                </p>
              </a>
              <a class="contacts__info-social" href="#">
                <div class="contacts__info-icon contacts__info-icon--telegram">
                  <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.263026 5.7599L3.7116 6.93921L5.05595 10.906C5.1144 11.174 5.4651 11.2276 5.6989 11.0668L7.62775 9.61944C7.8031 9.45863 8.09536 9.45863 8.32916 9.61944L11.7777 11.9244C12.0115 12.0853 12.3622 11.978 12.4207 11.71L14.9925 0.45304C15.0509 0.185017 14.7587 -0.0830044 14.4664 0.024205L0.263026 5.06305C-0.0876753 5.17026 -0.0876753 5.65269 0.263026 5.7599ZM4.8806 6.34956L11.6608 2.54362C11.7777 2.49002 11.8946 2.65083 11.7777 2.70444L6.22495 7.47526C6.0496 7.63607 5.87425 7.85049 5.87425 8.11851L5.6989 9.40502C5.6989 9.56584 5.40665 9.61944 5.3482 9.40502L4.64679 7.04642C4.47144 6.77839 4.58835 6.45676 4.8806 6.34956Z"
                      fill="white" />
                  </svg>

                </div>
                <p class="contacts__info-text">
                  Запись через<br>
                  Telegram
                </p>
              </a>
            </div>
            <a class="contacts__info-btn _gray-btn change-popup" href="#questions-modal" data-fancybox>
              Задать вопрос
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Карта
function map(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// НОВЫЕ БЛОКИ

// Заболевание/ расшифровка
function disease(){
  ob_start(); ?>

  <div class="wrapper-gray space-top">
    <section class="directions-question">
      <div class="directions-question__bg">
        <?php include(get_template_directory() . '/assets/images/icons/av-bg.svg'); ?>
      </div>
      <div class="container">
        <div class="directions-question__inner">
          <h2 class="directions-question__title _title">
            <?php the_sub_field('disease_mainTitle'); ?>
          </h2>
          <div class="directions-question__info">
            <h4 class="directions-question__info-title">
              <?php the_sub_field('disease_title'); ?>
            </h4>
            <p class="directions-question__info-text">
              <?php the_sub_field('disease_text'); ?>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php return ob_get_clean();
}

// Симптомы (space-null добавить выбор)
function directionsSimptom(){
  ob_start(); ?>

  <section class="directions-simptom relative <?php if(get_sub_field('directionsSimptom_space') != 1){echo 'space-null';}?>">
    <div class="container">
      <h2 class="directions-simptom__title _title">
        <?php the_sub_field('directionsSimptom_title'); ?>
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <?php if(have_rows('directionsSimptom_points')) : ?>
      <div class="directions-simptom__items">
        <?php while(have_rows('directionsSimptom_points')) : the_row(); ?>
        <div class="directions-simptom__item">
          <div class="directions-simptom__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/attention.svg'); ?>
          </div>
          <h4 class="directions-simptom__item-title">
            <?php the_sub_field('point'); ?>
          </h4>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Форма обратной связи (2 вариант)
function callback_2(){
  ob_start(); ?>
  <?php $img = get_sub_field('directionsSimptom_img');
  $img_url = isset($img['url']) ? $img['url'] : '';
  $img_alt = isset($img['alt']) ? $img['alt'] : '';?>

  <section class="directions-callback">
    <div class="container">
      <div class="directions-callback__inner _image-wrapper">
        <img class="directions-callback__img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
        <div class="overlay"></div>
        <h2 class="directions-callback__title _title">
          Получите<br> консультацию<br>
          врача по видеосвязи,<br> не выходя из дом
        </h2>
        <div class="directions-callback__subtitle">
          Введите ваш номер телефона в форме ниже и мы выберем<br> удобное время для видео-консультации
        </div>
        <form action="#" class="directions-callback__form form-submit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Консультация с терапевтом">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <div class="directions-callback__form-inputs">
            <input class="directions-callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
            <button class="directions-callback__form-btn _gray-btn">
              Записаться на первичную<br>
              видео-консультацию
            </button>
          </div>
          <p class="directions-callback__form-politic politic-text">
            Нажимая на кнопку, вы соглашаетесь с <a href="#politics" data-fancybox>
              Политикой конфиденциальности
            </a>
          </p>
        </form>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Методы диагностики и лечения
function directionsMethods(){
  ob_start(); ?>

  <section class="directions-methods">
    <div class="container">
      <h2 class="directions-methods__title _title">
        <?php the_sub_field('directionsMethods_title'); ?>
      </h2>
      <?php $count = 1; if(have_rows('directionsMethods_blocks')) : ?>
      <div class="directions-methods__items">
        <?php while(have_rows('directionsMethods_blocks')) : the_row();?>
        <div class="directions-methods__item">
          <span class="directions-methods__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/directions-methods-'.$count.'.svg'); ?>
          </span>
          <h4 class="directions-methods__item-title _title">
            <?php the_sub_field('name'); ?>
          </h4>
          <?php if(have_rows('methods')) : ?>
          <ul class="directions-methods__item-list">
            <?php while(have_rows('methods')) : the_row(); ?>
            <li class="directions-methods__item-point">
              <span class="directions-methods__item-check">
                <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              </span>
              <p class="directions-methods__item-text">
                <?php the_sub_field('point'); ?>
              </p>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php $count++; endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Врачи клиники
function directionsDoctor(){
  ob_start(); ?>

  <section class="directions-doctor">
    <img class="directions-doctor__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container relative">
      <h2 class="directions-doctor__title _title">
        <?php the_sub_field('directionsDoctor_title'); ?>
      </h2>
      <div class="filters directions-doctor__filters">
        <?php $count = count(get_sub_field('directionsDoctor_doctors'));
        if($count > 1) :
        if(have_rows('directionsDoctor_doctors')) : $index = 1; ?>
        <div class="directions-doctor__filters-btns">
          <?php while(have_rows('directionsDoctor_doctors')) : the_row();
          $img = get_sub_field('doctor_img_icon');
          $img_url = isset($img['url']) ? $img['url'] : '';
          $img_alt = isset($img['alt']) ? $img['alt'] : '';?>
          <div class="directions-doctor__filters-btn filters-btn <?php if($index == 1){echo 'active';}?>" data-filter="<?php echo $index; ?>">
            <div class="filters-btn__img-wrapper">
              <img class="filters-btn__img _img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
            </div>
            <p class="filters-btn__text _title">
              <?php the_sub_field('doctor_name'); ?>
            </p>
          </div>
          <?php $index++; endwhile; ?>
        </div>
        <?php endif;
        endif; ?>
        <?php if(have_rows('directionsDoctor_doctors')) : ?>
        <div class="directions-doctor__filters-items">
          <?php $index = 1; while(have_rows('directionsDoctor_doctors')) : the_row();
          $img = get_sub_field('doctor_img');
          $img_url = isset($img['url']) ? $img['url'] : '';
          $img_alt = isset($img['alt']) ? $img['alt'] : ''; ?>
          <div class="directions-doctor__item filters-item <?php echo $index; if($index != 1){echo ' hidden';}?>">
            <div class="directions-doctor__left">
              <div class="directions-doctor__left-wrapper">
                <img class="directions-doctor__left-img _img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
              </div>
            </div>
            <div class="directions-doctor__right change-popup-item">
              <h4 class="directions-doctor__right-name _title change-popup-name">
                <?php the_sub_field('doctor_name'); ?>
              </h4>
              <p class="directions-doctor__right-text">
                <?php the_sub_field('doctor_position'); ?>
              </p>
              <p class="directions-doctor__right-exp">
                <?php the_sub_field('doctor_stage'); ?>
              </p>
              <?php if(have_rows('doctor_directions')) : ?>
              <h5 class="directions-doctor__right-subtitle _title">
                Основные направления,<br>
                на которых специализируется врач:
              </h5>
              <ul class="directions-doctor__right-list">
                <?php while(have_rows('doctor_directions')) : the_row(); ?>
                <li class="directions-doctor__right-point">
                  <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
                  <span>
                    <?php the_sub_field('point'); ?>
                  </span>
                </li>
                <?php endwhile;?>
              </ul>
              <?php endif; ?>
              <div class="directions-doctor__right-btns">
                <a class="directions-doctor__btn _gray-btn change-popup" href="#callback-modal" data-fancybox>
                  <span>Записаться на прием</span>
                  <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
                </a>
                <a class="directions-doctor__arrow-btn" href="#">
                  <span class="directions-doctor__btn-icon">
                    <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
                  </span>
                  <span>Записаться через WhatsApp</span>
                </a>
              </div>
            </div>
          </div>
          <?php $index++; endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Стоимость лечения
function directionsPrice(){
  ob_start(); ?>

  <section class="directions-price">
    <div class="container">
      <h2 class="directions-price__title _title">
        <?php the_sub_field('directionsPrice_title'); ?>
      </h2>
      <?php
      $counter = 1;
      if(have_rows('directionsPrice_services')) : ?>
      <div class="directions-price__accordion accordion">
        <?php while(have_rows('directionsPrice_services')) : the_row();
        $num = str_pad($counter, 2, '0', STR_PAD_LEFT); ?>
        <div class="directions-price__item accordion-item">
          <div class="directions-price__item-header accordion-header">
            <div class="directions-price__item-left">
              <span class="directions-price__item-step">
                <?php echo $num; ?>
              </span>
              <h4 class="directions-price__item-title">
                <?php the_sub_field('service_name'); ?>
              </h4>
            </div>
            <div class="open-item directions-price__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
            </div>
          </div>
          <?php if(have_rows('service_points')) : ?>
          <div class="directions-price__item-body accordion-body">
            <div class="directions-price__item-costs">
              <?php while(have_rows('service_points')) : the_row(); ?>
              <div class="directions-price__item-cost change-popup-item">
                <h5 class="directions-price__item-name change-popup-title">
                  <?php the_sub_field('name'); ?>
                </h5>
                <div class="directions-price__item-right">
                  <span class="directions-price__item-price">
                    <?php the_sub_field('price'); ?> ₽
                  </span>
                  <a class="directions-price__item-btn _gray-btn change-popup" href="#callback-modal" data-fancybox>
                    Записаться
                  </a>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <?php $counter++; endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Этапы лечения
function stagesOfTreatment(){
  ob_start(); ?>

  <section class="checkup-stages _section-lg" style="background-image: url(<?php echo esc_url(get_sub_field('stagesOfTreatment_img')['url']); ?>);">
    <div class="container">
      <h2 class="checkup-stages__title _title _white-text">
        <?php the_sub_field('stagesOfTreatment_title'); ?>
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <?php if(have_rows('stagesOfTreatment_steps')) :
        $counter = 1; ?>
      <div class="checkup-stages__elems">
        <?php while(have_rows('stagesOfTreatment_steps')) : the_row();
        $num = str_pad($counter, 2, '0', STR_PAD_LEFT); ?>
        <div class="checkup-stages__elem">
          <div class="checkup-stages__elem-top">
            <span class="checkup-stages__elem-num">
              <?php echo $num; ?>
            </span>
            <span class="checkup-stages__elem-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </span>
          </div>
          <h4 class="checkup-stages__elem-title">
            <?php the_sub_field('title_step'); ?>
          </h4>
          <p class="checkup-stages__elem-text">
            <?php the_sub_field('text_step'); ?>
          </p>
        </div>
        <?php $counter++; endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Результат
function checkupResult(){
  ob_start(); ?>

  <section class="checkup-result">
    <div class="container">
      <h2 class="checkup-result__title _title">
        <?php the_sub_field('checkupResult_title'); ?>
      </h2>
      <p class="checkup-result__subtitle _title">
        <?php the_sub_field('checkupResult_subtitle'); ?>
      </p>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="checkup-result__items">
        <?php if (have_rows('checkupResult_item')) :
          while (have_rows('checkupResult_item')) : the_row(); ?>
            <div class="checkup-result__item">
              <?php
              $img = get_sub_field('checkupResult_item_img');
              if ($img && isset($img['url'])) :
              ?>
                <div class="checkup-result__item-wrapper">
                  <img class="checkup-result__item-img _img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt'] ?? ''); ?>">
                </div>
              <?php endif; ?>
              <h4 class="checkup-result__item-title">
                <?php the_sub_field('checkupResult_item_title'); ?>
              </h4>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Комплексные обследования
function readyPrograms(){
  ob_start(); ?>

  <section class="ready-programs">
    <div class="container">
      <h2 class="ready-programs__title _title">
        <?php the_sub_field('readyPrograms_title'); ?>
      </h2>
      <p class="ready-programs__subtitle _subtitle">
        <?php the_sub_field('readyPrograms_subtitle'); ?>
      </p>
      <h3 class="ready-programs__items-title">
        <?php the_sub_field('readyPrograms_text'); ?>
      </h3>
      <?php if(have_rows('readyPrograms_points')) : ?>
      <div class="ready-programs__items">
        <?php while(have_rows('readyPrograms_points')) : the_row(); ?>
        <div class="ready-programs__item">
          <div class="ready-programs__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
          </div>
          <h4 class="ready-programs__item-title">
            <?php the_sub_field('point_title'); ?>
          </h4>
          <p class="ready-programs__item-text">
            <?php the_sub_field('point_text'); ?>
          </p>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
    <?php if(have_rows('readyPrograms_cards')) :?>
    <div class="ready-programs__elems">
      <?php while(have_rows('readyPrograms_cards')) : the_row();?>
      <div class="ready-programs__elem">
        <?php if(get_sub_field('card_img')) :
          $img = get_sub_field('card_img'); ?>
        <div class="ready-programs__elem-wrapper">
          <img class="ready-programs__elem-img _img" src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>">
        </div>
        <?php endif; ?>
        <div class="ready-programs__elem-info">
          <h4 class="ready-programs__elem-title">
            <?php the_sub_field('card_title'); ?>
          </h4>
          <a class="ready-programs__elem-btn _gray-btn" href="<?php the_sub_field('card_link'); ?>">
            <span>Выбрать программу</span>
            <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
          </a>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </section>

  <?php return ob_get_clean();
}

// Программы CheckUp для...
function checkUpPrograms(){
  ob_start(); ?>

  <?php if(have_rows('checkUpPrograms_programs')) : ?>
  <section class="checkup-programs">
    <?php while(have_rows('checkUpPrograms_programs')) : the_row(); ?>
    <div class="checkup-programs__program _section-lg">
      <div class="container">
        <div class="checkup-programs__top">
          <p class="checkup-programs__top-text">
            <?php the_sub_field('checkUpPrograms_for_back'); ?>
          </p>
          <h3 class="checkup-programs__top-title _title">
            <?php the_sub_field('checkUpPrograms_for'); ?>
          </h3>
          <?php if(get_sub_field('checkUpPrograms_img')){
            $img = get_sub_field('checkUpPrograms_img');?>
          <div class="checkup-programs__top-wrapper">
            <img class="checkup-programs__top-img _img" src="<?php echo esc_url( $img['url'] ); ?>"
              alt="<?php echo esc_attr( $img['alt'] ); ?>">
          </div>
          <?php }?>
        </div>
        <?php $programs_list = get_sub_field('programs_list');
        if($programs_list):
        $counter = 1; ?>
        <div class="checkup-programs__items">
          <?php foreach ( $programs_list as $post_ids ) :
            $num = str_pad($counter, 2, '0', STR_PAD_LEFT); ?>
          <div class="checkup-programs__item change-popup-item">
            <div class="checkup-programs__item-left">
              <span class="checkup-programs__item-step">
                <?php echo $num; ?>
              </span>
              <h4 class="checkup-programs__item-title change-popup-title">
                <?php echo get_field('meta_h1', $post_ids);?>
                <!-- <span class="checkup-programs__item-descr">
                  Пакет <span>LIGHT</span>
                </span> -->
              </h4>
            </div>
            <div class="checkup-programs__item-right">
              <a class="checkup-programs__item-link" href="<?php echo get_permalink( $post_ids ); ?>">
                <span>Узнать подробнее</span>
                <p class="arrow-icon">
                  <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                      fill="white" />
                  </svg>
                </p>
              </a>
              <a class="checkup-programs__item-btn change-popup _gray-btn" href="#callback-modal" data-fancybox>
                Записаться на Check-Up
              </a>
            </div>
          </div>
          <?php $counter++; endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile;?>
  </section>
  <?php endif; ?>

  <?php return ob_get_clean();
}

// Чекап это
function checkupIs(){
  ob_start(); ?>

  <section class="checkup-is">
    <div class="container">
      <?php if(get_sub_field('checkupIs_title')):?>
      <h2 class="checkup-is__title _title">
        <?php the_sub_field('checkupIs_title');?>
      </h2>
      <?php endif; ?>
      <?php if(get_sub_field('checkupIs_subtitle')) :?>
      <p class="checkup-is__subtitle _subtitle">
        <?php the_sub_field('checkupIs_subtitle'); ?>
      </p>
      <?php endif; ?>
      <?php if(have_rows('checkupIs_cards')) : ?>
      <div class="checkup-is__items">
        <?php while(have_rows('checkupIs_cards')) : the_row(); ?>
        <div class="checkup-is__item">
          <?php if(get_sub_field('card_img')) :
            $img = get_sub_field('card_img'); ?>
          <div class="checkup-is__item-wrapper">
            <img class="checkup-is__item-img" src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>">
          </div>
          <?php endif; ?>
          <div class="checkup-is__item-info">
            <h5 class="checkup-is__item-title">
              <?php the_sub_field('card_title'); ?>
            </h5>
            <p class="checkup-is__item-text">
              <?php the_sub_field('card_text'); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>

      <div class="checkup-is__inner">
        <div class="checkup-is__inner-left">
          <h3 class="checkup-is__inner-title _title">
            <?php the_sub_field('checkupIs_textList');?>
          </h3>
          <?php if(have_rows('checkupIs_list')) :?>
          <ul class="checkup-is__inner-list">
            <?php while(have_rows('checkupIs_list')) : the_row(); ?>
            <li class="checkup-is__inner-point">
              <span class="checkup-is__inner-icon">
                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                    fill="white" />
                </svg>

              </span>
              <p class="checkup-is__inner-text">
                <?php the_sub_field('point'); ?>
              </p>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php if(get_sub_field('checkupIs_img')):
          $img = get_sub_field('checkupIs_img');?>
        <div class="checkup-is__inner-right">
          <div class="checkup-is__inner-wrapper relative">
            <img class="checkup-is__inner-img _img" src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>">
          </div>
        </div>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <?php return ob_get_clean();
}

// Отзывы блогеров
function reviewsBloger(){
  ob_start(); ?>

  <section class="reviews _section-lg">
    <div class="container">
      <div class="reviews__top">
        <h2 class="reviews__title _title">
          Свое здоровье нам доверяют<br> блогеры и лидеры мнений
        </h2>
        <div class="reviews__right swiper-navigation">
          <div class="swiper-button-prev swiper-navigation__prev">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                fill="white" />
            </svg>

          </div>
          <div class="swiper-button-next swiper-navigation__next">
            <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                fill="white" />
            </svg>

          </div>
        </div>
      </div>
      <?php if(have_rows('reviewsBloger_reviews')) : ?>
      <div class="reviews__swiper swiper">
        <div class="swiper-wrapper">
          <?php while(have_rows('reviewsBloger_reviews')) : the_row(); ?>
          <div class="swiper-slide reviews__slide">
            <div class="reviews__item">
              <?php if(get_sub_field('reviews_head')) {
                $img_head = get_sub_field('reviews_head');?>
              <img class="reviews__item-img" src="<?php echo esc_url( $img_head['url'] ); ?>" alt="<?php echo esc_attr( $img_head['alt'] ); ?>">
              <?php } ?>
              <a class="reviews__item-wrapper" href="#" data-fancybox>
                <?php if(get_sub_field('reviews_preview')) {
                  $img_preview = get_sub_field('reviews_preview'); ?>
                <img class="reviews__item-video _img" src="<?php echo esc_url( $img_preview['url'] ); ?>" alt="<?php echo esc_attr( $img_preview['alt'] ); ?>">
                <?php }?>
                <div class="play">
                  <div class="play__inner">
                    <svg width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M41.4506 21.5916C43.9927 23.1529 43.9927 26.8471 41.4506 28.4084L17.8435 42.908C15.1783 44.545 11.75 42.6273 11.75 39.4996L11.75 10.5004C11.75 7.37267 15.1783 5.45503 17.8435 7.09199L41.4506 21.5916Z"
                        fill="white" />
                    </svg>

                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if(is_front_page()) {?>
      <a class="reviews__btn _gray-btn" href="#">
        Посмотреть больше отзывов
      </a>
      <?php }?>
    </div>
    <p class="reviews__bottom-text">
      нам доверяют
    </p>
  </section>

  <?php return ob_get_clean();
}

// Каталог направлений
function catalogDirections(){
  ob_start(); ?>

  <section class="catalog _section-lg">
    <div class="container">
      <h2 class="catalog__title _title">
        <?php the_sub_field('catalogDirections_title'); ?>
      </h2>
      <?php $catalogDirections_cards = get_sub_field( 'catalogDirections_cards' );
      if($catalogDirections_cards) :
      $counter = 1; ?>
      <div class="catalog__items">
        <?php foreach ( $catalogDirections_cards as $post_ids ) :
          $num = str_pad($counter, 2, '0', STR_PAD_LEFT);?>
        <a href="<?php echo get_permalink( $post_ids ); ?>" class="catalog__item">
          <div class="catalog__item-top">
            <span class="catalog__item-num"><?php echo $num; ?></span>
            <div class="catalog__item-icon">
              <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
            </div>
          </div>
          <h4 class="catalog__item-title"><?php echo get_the_title( $post_ids ); ?></h4>
        </a>
        <?php $counter++; endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Комфорт как дома
function comfort(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Мы не просто лечим
function justTreat(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Консилиум
function сonsilium(){
  ob_start(); ?>

  <section class="consultation _image-wrapper">
    <div class="container">
      <?php if(get_sub_field('сonsilium_title')):?>
        <h2 class="consultation__title _title">
          <?php the_sub_field('сonsilium_title'); ?>
        </h2>
      <?php endif; ?>
      <?php if(get_sub_field('сonsilium_subtitle')):?>
        <p class="consultation__subtitle _subtitle">
          <?php the_sub_field('сonsilium_subtitle'); ?>
        </p>
      <?php endif; ?>
      <?php if(get_sub_field('сonsilium_text')):?>
        <p class="consultation__text">
          <?php the_sub_field('сonsilium_text'); ?>
        </p>
      <?php endif; ?>
      <?php if(get_sub_field('сonsilium_btn') == 1):?>
      <a class="consultation__btn _main-btn" href="<?php echo get_home_url();?>/doctors/">
        Узнать о врачах подробнее
      </a>
      <?php endif; ?>
      <img class="consultation__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors.webp" alt="doctors">
    </div>
  </section>

  <?php return ob_get_clean();
}

// Каталог докторов - Посадка
function catalogDoctors(){
  ob_clean(); ?>

  <section class="doctors-doctors">
    <img class="doctors-doctors__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
    <div class="container relative">
      <h2 class="doctors-doctors__title _title">
        Выберите специализацию врача
      </h2>
      <div class="doctors-doctors__btn _gray-btn open-form">
        Открыть фильтр
      </div>
      <div class="doctors-doctors__inner relative">
        <form class="doctors-doctors__form form-submit hidden-form" action="#" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="from" value="Есть вопросы или хотите записаться по телефону?">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <div class="doctors-doctors__form-labels">
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Все специализации">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Все специализации</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Аллергология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Аллергология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Гастроэнтерология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Гастроэнтерология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Гематология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Гематология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Гинекология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Гинекология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Дерматология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Дерматология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Диетология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Диетология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Кардиология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Кардиология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Косметология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Косметология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Маммология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Маммология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Неврология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Неврология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Онкология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Онкология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Оториноларингология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Оториноларингология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Пульмонология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Пульмонология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Терапия">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Терапия</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="УЗИ">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">УЗИ</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Урология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Урология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Физиотерапия">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Физиотерапия</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Фониатрия">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Фониатрия</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Функциональная диагностика">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Функциональная диагностика</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
            <label class="doctors-doctors__form-label">
              <input type="radio" name="direction" value="Эндокринология">
              <span class="doctors-doctors__form-inner">
                <span class="doctors-doctors__form-text">Эндокринология</span>
                <?php include(get_template_directory() . '/assets/images/icons/arrow.svg'); ?>
              </span>
            </label>
          </div>
        </form>
        <div class="doctors-doctors__items">
          <div class="doctors-doctors__item">
            <a class="doctors-doctors__item-wrapper" href="#">
              <img class="doctors-doctors__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors-doctors-1.webp" alt="doctors-doctors-1">
            </a>
            <div class="doctors-doctors__item-info">
              <h4 class="doctors-doctors__item-title _title">
                Абакумов<br>
                Олег Александрович
              </h4>
              <p class="doctors-doctors__item-text">
                Терапевт, пульмонолог, статус «Московский врач»
              </p>
              <p class="doctors-doctors__item-exp">
                Стаж<span>: 12 лет</span>
              </p>
              <a class="doctors-doctors__item-link" href="#">
                Узнать о враче подробнее
              </a>
              <a class="doctors-doctors__item-btn _gray-btn" href="#" data-fancybox="">
                Записаться к врачу
              </a>
            </div>
          </div>
          <div class="doctors-doctors__item">
            <a class="doctors-doctors__item-wrapper" href="#">
              <img class="doctors-doctors__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors-doctors-2.webp" alt="doctors-doctors-2">
            </a>
            <div class="doctors-doctors__item-info">
              <h4 class="doctors-doctors__item-title _title">
                Ионичевская<br>
                Ирина Игоревна
              </h4>
              <p class="doctors-doctors__item-text">
                Терапевт, пульмонолог, гастроэнтеролог, кандидат медицинских наук
              </p>
              <p class="doctors-doctors__item-exp">
                Стаж: <span>12 лет</span>
              </p>
              <a class="doctors-doctors__item-link" href="#">
                Узнать о враче подробнее
              </a>
              <a class="doctors-doctors__item-btn _gray-btn" href="#" data-fancybox="">
                Записаться к врачу
              </a>
            </div>
          </div>
          <div class="doctors-doctors__item">
            <a class="doctors-doctors__item-wrapper" href="#">
              <img class="doctors-doctors__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors-doctors-3.webp" alt="doctors-doctors-3">
            </a>
            <div class="doctors-doctors__item-info">
              <h4 class="doctors-doctors__item-title _title">
                Войнилович<br>
                Сергей Вячеславович
              </h4>
              <p class="doctors-doctors__item-text">
                Терапевт, Пульмонолог, сомнолог, кандидат медицинских наук
              </p>
              <p class="doctors-doctors__item-exp">
                Стаж: <span>27 лет</span>
              </p>
              <a class="doctors-doctors__item-link" href="#">
                Узнать о враче подробнее
              </a>
              <a class="doctors-doctors__item-btn _gray-btn" href="#" data-fancybox="">
                Записаться к врачу
              </a>
            </div>

          </div>
          <div class="doctors-doctors__item">
            <a class="doctors-doctors__item-wrapper" href="#">
              <img class="doctors-doctors__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors-doctors-1.webp" alt="doctors-doctors-1">
            </a>
            <div class="doctors-doctors__item-info">
              <h4 class="doctors-doctors__item-title _title">
                Абакумов<br>
                Олег Александрович
              </h4>
              <p class="doctors-doctors__item-text">
                Терапевт, пульмонолог, статус «Московский врач»
              </p>
              <p class="doctors-doctors__item-exp">
                Стаж<span>: 12 лет</span>
              </p>
              <a class="doctors-doctors__item-link" href="#">
                Узнать о враче подробнее
              </a>
              <a class="doctors-doctors__item-btn _gray-btn" href="#" data-fancybox="">
                Записаться к врачу
              </a>
            </div>
          </div>
          <div class="doctors-doctors__item">
            <a class="doctors-doctors__item-wrapper" href="#">
              <img class="doctors-doctors__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors-doctors-2.webp" alt="doctors-doctors-2">
            </a>
            <div class="doctors-doctors__item-info">
              <h4 class="doctors-doctors__item-title _title">
                Ионичевская<br>
                Ирина Игоревна
              </h4>
              <p class="doctors-doctors__item-text">
                Терапевт, пульмонолог, гастроэнтеролог, кандидат медицинских наук
              </p>
              <p class="doctors-doctors__item-exp">
                Стаж: <span>12 лет</span>
              </p>
              <a class="doctors-doctors__item-link" href="#">
                Узнать о враче подробнее
              </a>
              <a class="doctors-doctors__item-btn _gray-btn" href="#" data-fancybox="">
                Записаться к врачу
              </a>
            </div>
          </div>
          <div class="doctors-doctors__item">
            <a class="doctors-doctors__item-wrapper" href="#">
              <img class="doctors-doctors__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/doctors-doctors-3.webp" alt="doctors-doctors-3">
            </a>
            <div class="doctors-doctors__item-info">
              <h4 class="doctors-doctors__item-title _title">
                Войнилович<br>
                Сергей Вячеславович
              </h4>
              <p class="doctors-doctors__item-text">
                Терапевт, Пульмонолог, сомнолог, кандидат медицинских наук
              </p>
              <p class="doctors-doctors__item-exp">
                Стаж: <span>27 лет</span>
              </p>
              <a class="doctors-doctors__item-link" href="#">
                Узнать о враче подробнее
              </a>
              <a class="doctors-doctors__item-btn _gray-btn" href="#" data-fancybox="">
                Записаться к врачу
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Специализация врача - Посадка
function doctorsSpecialization(){
  ob_start(); ?>

  <section class="doctors-specialization">
    <div class="container">
      <div class="doctors-specialization__inner">
        <h2 class="doctors-specialization__title _title">
          Основные<br> заболевания,<br>
          на которых<br> специализируется<br> врач
        </h2>
        <?php if(have_rows('doctorsSpecialization_list')) :?>
        <div class="doctors-specialization__right">
          <ul class="doctors-specialization__list">
            <?php while(have_rows('doctorsSpecialization_list')) : the_row();?>
            <li class="doctors-specialization__point">
              <?php include(get_template_directory() . '/assets/images/icons/check.svg'); ?>
              <span class="doctors-specialization__text">
                <?php the_sub_field('point'); ?>
              </span>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
          <a class="doctors-specialization__btn _gray-btn" href="#">
            <span>Узнать о враче подробнее</span>
            <?php include(get_template_directory() . '/assets/images/icons/arrow-link.svg'); ?>
          </a>
        </div>

      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Картинка большая
function blockImg(){
  ob_start(); ?>
  <?php if(get_sub_field('blockImg_type') != 1) {?>
    <section class="image-block">
      <img class="image-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-1.svg" alt="abacumov">
      <div class="container relative">
        <h2 class="image-block__title _title">
          <?php the_sub_field('blockImg_title'); ?>
        </h2>
        <?php if(get_sub_field('blockImg_img')) :
          $img = get_sub_field('blockImg_img');?>
        <div class="images-block__wrapper">
          <img class="image-block__img" src="<?php echo $img['url'];?>" alt="<?php echo $img['url'];?>">
        </div>
        <?php endif; ?>
      </div>
    </section>
    <?php } else { ?>
      <section class="image-block space-top-negative relative">
        <div class="container">
          <?php if(get_sub_field('blockImg_img')) :
            $img = get_sub_field('blockImg_img');?>
          <div class="images-block__wrapper">
            <img class="image-block__img" src="<?php echo $img['url'];?>" alt="<?php echo $img['url'];?>">
          </div>
          <?php endif; ?>
        </div>
      </section>
    <?php } ?>
  <?php return ob_get_clean();
}

// Концепция клиники
function concept(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Воплощение опыта
function doctorExp(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Лечим причину
function deleteCause(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Клиника ментор
function staticNewLevel(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Забота
function care(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}

// Почему выгодно
function whyWorks(){
  ob_start(); ?>

  <section class="why-works _section-lg">
    <div class="container">
      <h2 class="why-works__title _title">
        <?php the_sub_field('whyWorks_title'); ?>
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <?php if(have_rows('whyWorks_cards')) :?>
      <div class="why-works__items">
        <?php while(have_rows('whyWorks_cards')) : the_row(); ?>
        <div class="why-works__item">
          <span class="why-works__item-icon">
            <?php include(get_template_directory() . '/assets/images/icons/check-star.svg'); ?>
          </span>
          <h4 class="why-works__item-title">
            <?php the_sub_field('title'); ?>
          </h4>
          <p class="why-works__item-text">
            <?php the_sub_field('text'); ?>
          </p>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php ob_get_clean();
}

// Клиника нового формата
function vacanciesFormat(){
  ob_start(); ?>

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

  <?php return ob_get_clean();
}


// Обертка
function wrapperStart ($type){
  ob_start(); ?>
  <div class="wrapper-<?php echo $type?> _section-lg">
  <?php return ob_get_clean();
}

// Конец обертки
function wrapperEnd (){
  ob_start(); ?>
  </div>
  <?php return ob_get_clean();
}

function name(){
  ob_start(); ?>

  <?php return ob_get_clean();
}
