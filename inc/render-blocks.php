<?php

// Функции генерирующие данные типы блоков
// checkupFrontBlock : Первый блок
// advatages : Преимущества
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
// rating : Рейтинг клиники
// careComfort : Комфорт
// contacts : Контакты
// map : Карта
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
        case 'advantages':
          $advantages = [];
          if (have_rows('advantages')) {
            while (have_rows('advantages')) {
              the_row();
              $img = get_sub_field('advantages_img');
              $img_url = '';
              $img_alt = '';
              $img_url = isset($img['url']) ? $img['url'] : '';
              $img_alt = isset($img['alt']) ? $img['alt'] : '';
              $advantages[] = [
                'img_url' => $img_url,
                'img_alt' => $img_alt,
                'title' => get_sub_field('advantages_title'),
                'text' => get_sub_field('advantages_text')
              ];
            }
          }
          echo advantages($advantages);
          break;
        case 'checkupQuestions':
          $title = get_sub_field('checkupQuestions_title');
          $subtitle = get_sub_field('checkupQuestions_subtitle');
          $questions = [];
          if(have_rows('checkupQuestions_points')):
            while(have_rows('checkupQuestions_points')) : the_row();
            $questions[] = [
              'text' => get_sub_field('point')
            ];
            endwhile;
          endif;
          echo checkupQuestions($title, $subtitle, $questions);
          break;
        case 'doctorWithQuotes':
          $img = get_sub_field('doctorWithQuotes_img');
          $img_url = '';
          $img_alt = '';
          $img_url = isset($img['url']) ? $img['url'] : '';
          $img_alt = isset($img['alt']) ? $img['alt'] : '';
          $text = get_sub_field('doctorWithQuotes_quote');
          $name = get_sub_field('doctorWithQuotes_name');
          $position = get_sub_field('doctorWithQuotes_position');
          $exp = get_sub_field('doctorWithQuotes_exp');
          $space = get_sub_field('doctorWithQuotes_space') == 1 ? 'space-null' : '';
          echo doctorWithQuotes($img_url, $img_alt, $text, $name, $position, $exp, $space);
          break;
        case 'videoBlock':
          $title = get_sub_field('videoBlock_title');
          $subtitle = get_sub_field('videoBlock_subtitle');
          $img = get_sub_field('videoBlock_preview');
          $img_url = '';
          $img_alt = '';
          $img_url = isset($img['url']) ? $img['url'] : '';
          $img_alt = isset($img['alt']) ? $img['alt'] : '';
          $link = get_sub_field('videoBlock_link');
          echo videoBlock($title, $subtitle, $img_url, $img_alt, $link);
          break;
        case 'whenExamination':
          $title = get_sub_field('whenExamination_title');
          $points = [];
          if(have_rows('whenExamination_points')) :
            while(have_rows('whenExamination_points')) : the_row();
            $points[] = [
              'text' => get_sub_field('whenExamination_point')
            ];
            endwhile;
          endif;
          echo whenExamination($title, $points);
          break;
        case 'examinationReveals':
          $title = get_sub_field('examinationReveals_title');
          $img = get_sub_field('examinationReveals_img');
          $img_url = $img['url'];
          $img_alt = $img['alt'];
          $points = [];
          if(have_rows('examinationReveals_points')) :
            while(have_rows('examinationReveals_points')) : the_row();
            $points[] = [
              'text' => get_sub_field('point')
            ];
            endwhile;
          endif;
          echo examinationReveals($title, $points, $img_url, $img_alt);
          break;
        case 'checkupStages':
          $title = get_sub_field('checkupStages_title');
          $img = get_sub_field('checkupStages_img');
          $img_url = $img['url'];
          $img_alt = $img['alt'];
          $points = [];
          if(have_rows('checkupStages_steps')) :
              while(have_rows('checkupStages_steps')) : the_row();
                  $point = [
                      'title' => get_sub_field('title_step'),
                      'text' => get_sub_field('text_step'),
                      'list' => []
                  ];

                  if(have_rows('list')) :
                      while(have_rows('list')) : the_row();
                          $point['list'][] = get_sub_field('point');
                      endwhile;
                  endif;

                  $points[] = $point;
              endwhile;
          endif;
          echo checkupStages($title, $img_url, $img_alt, $points);
          break;

        case 'personalPlan':
          echo personalPlan();
          break;
        case 'callback_1':
          $title = get_sub_field('callback_1_title');
          echo callback_1($title);
          break;
        case 'checkupSchedule':
          echo checkupSchedule();
          break;
        case 'checkupCompound':
          $title = get_sub_field('checkupCompound_title');
          $img = get_sub_field('checkupCompound_img');
          $img_url = $img['url'];
          $img_alt = $img['alt'];
          $fio = get_sub_field('checkupCompound_name');
          $position = get_sub_field('checkupCompound_position');
          $experience = get_sub_field('checkupCompound_experience'); // Добавил поле для стажа
          $points = [];

          if(have_rows('checkupCompound_compound')) :
            while(have_rows('checkupCompound_compound')) : the_row();
              $point = [
                'c_name' => get_sub_field('сompound_name'),
                'c_name_a' => get_sub_field('сompound_name_accord'),
                'price_a' => get_sub_field('сompound_price_accord'),
                'list' => []
              ];

              if(have_rows('compound_list')) :
                while(have_rows('compound_list')) : the_row();
                  $point['list'][] = get_sub_field('compound_point');
                endwhile;
              endif;

              $points[] = $point;
            endwhile;
          endif;
          echo checkupCompound($title, $img_url, $img_alt, $fio, $position, $experience, $points);
          break;
        case 'newLevel':
          echo newLevel();
          break;
        case 'checkupReviews':
          $title = get_sub_field('checkupReviews_title');
          echo checkupReviews($title);
          break;
        case 'checkupАfter':
          echo checkupАfter();
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

function renderBlocksSingleDirections(){

}

// Первый блок
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
              <a class="front-block__btn _main-btn" href="#" data-fancybox>
                <span>Записаться на чек-ап</span>
              </a>
              <a class="front-block__arrow-btn" href="#">
                <span class="front-block__btn-icon">
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
          <?php if(get_sub_field('checkupFrontBlock_img')) {
            $img = get_sub_field('checkupFrontBlock_img');
            $img_url = isset($img['url']) ? $img['url'] : '';
            $img_alt = isset($img['alt']) ? $img['alt'] : '';
            ?>
          <div class="front-block__right-item">
            <div class="front-block__right-wrapper">
              <img class="front-block__right-img _img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

  <?php return ob_get_clean();
}

// Преимущества
function advantages($items) {
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
        foreach ($items as $item) :
          $num = str_pad($counter, 2, '0', STR_PAD_LEFT);
        ?>
          <div class="services__item">
            <div class="services__item-wrapper">
              <?php if (!empty($item['img_url'])) : ?>
                <img class="services__item-img _img" src="<?php echo esc_url($item['img_url']); ?>" alt="<?php echo esc_attr($item['img_alt']); ?>">
              <?php endif; ?>
            </div>
            <div class="services__item-info">
              <?php if (!empty($item['title'])) : ?>
                <h4 class="services__item-title"><?php echo nl2br($item['title']); ?></h4>
              <?php endif; ?>
              <?php if (!empty($item['text'])) : ?>
                <p class="services__item-text"><?php echo nl2br($item['text']); ?></p>
              <?php endif; ?>
              <span class="services__item-num"><?php echo $num; ?></span>
            </div>
          </div>
        <?php
          $counter++;
        endforeach;
        ?>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}

// Зачем проходить <направление>
function checkupQuestions($title, $subtitle, $questions){
  ob_start(); ?>

    <section class="checkup-question">
      <div class="container">
        <h2 class="checkup-question__title _title">
          <?php echo $title; ?>
        </h2>
        <p class="checkup-question__subtitle _subtitle">
          <?php echo $subtitle; ?>
        </p>
        <div class="checkup-question__items">
          <?php foreach ($questions as $question) :?>
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
              <?php echo $question['text'];?>
            </h4>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  <?php return ob_get_clean();
}

// Врач с цитатами (space-null убирает отступ?)
function doctorWithQuotes($img_url, $img_alt, $text, $name, $position, $exp, $space){
  ob_start(); ?>

  <section class="quote-block <?php echo $space; ?>">
    <div class="container">
      <div class="quote-block__content relative">
            <img class="quote-block__img _img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>">
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
                <?php echo $text; ?>
            </p>
          </div>
          <div class="quote-block__right">
            <h5 class="quote-block__right-name">
              <?php echo $name; ?>
            </h5>
            <p class="quote-block__right-text">
              <?php echo $position; ?>
            </p>
            <p class="quote-block__right-exp">
              <?php echo $exp; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Блок с видео
function videoBlock($title, $subtitle, $img_url, $img_alt, $link){
  ob_start(); ?>

    <section class="video-block">
      <div class="container relative">
        <h2 class="video-block__title _title">
          <?php echo wp_kses_post($title); ?>
        </h2>
        <p class="video-block__subtitle _subtitle">
          <?php echo wp_kses_post($subtitle); ?>
        </p>
        <a class="video-block__video" href="<?php echo $link;?>" data-fancybox>
          <img class="video-block__video-img _img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>">
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
      </div>
    </section>

  <?php return ob_get_clean();
}

// Когда стоит пройти обследование
function whenExamination($title, $points){
  ob_start(); ?>

  <section class="when-examination">
    <div class="container">
      <h2 class="when-examination__title _title">
        <?php echo $title; ?>
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
        <?php foreach($points as $point) :?>
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
            <?php echo $point['text'];?>
          </h4>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php return ob_get_clean();
}

// Что может выявить
function examinationReveals($title, $points, $img_url, $img_alt){
  ob_start(); ?>

  <section class="examination-reveals">
    <div class="container">
      <h2 class="examination-reveals__title _title">
        <?php echo $title; ?>
      </h2>
      <div class="examination-reveals__inner">
        <div class="examination-reveals__left">
          <div class="examination-reveals__left-wrapper">
            <img class="examination-reveals__left-img _img" src="<?php echo $img_url; ?>"
              alt="<?php echo $img_alt; ?>">
          </div>
        </div>
        <div class="examination-reveals__right">
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
          <div class="examination-reveals__items">
            <?php foreach($points as $point) :?>
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
                <?php echo $point['text'];?>
              </h4>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="examination-reveals__right-btns">
            <a class="examination-reveals__btn _gray-btn" href="#" data-fancybox>
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
function checkupStages($title, $img_url, $img_alt, $points){
  ob_start(); ?>

  <section class="checkup-stages _section-lg" style="background-image: url(<?php echo $img_url; ?>);">
    <div class="container">
      <h2 class="checkup-stages__title _title">
        <?php echo $title;?>
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
      <div class="checkup-stages__items">
        <?php
        $counter = 1;
        foreach($points as $point) :
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
            <?php echo $point['title'];?>
          </h4>
          <p class="checkup-stages__item-text">
            <?php echo $point['text'];?>
          </p>
          <?php if($point['list']) :?>
          <ul class="checkup-stages__item-list">
            <?php foreach($point['list'] as $item) :?>
            <li class="checkup-stages__item-point">
              <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                  fill="white" />
              </svg>

              <span>
                <?php echo $item; ?>
              </span>
            </li>
            <?php endforeach;?>
          </ul>
          <?php endif; ?>
          <span class="checkup-stages__item-step">
            <?php echo $num; ?>
          </span>
        </div>
        <?php $counter++; endforeach; ?>
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
function callback_1($title){
  ob_start(); ?>

  <section class="callback">
    <div class="container">
      <div class="callback__inner _image-wrapper relative">
        <div class="overlay"></div>
        <div class="callback__left relative">
          <h2 class="callback__title _title">
            <?php echo $title; ?>
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
function checkupCompound($title, $img_url, $img_alt, $fio, $position, $experience, $points) {
  ob_start(); ?>

  <section class="checkup-compound">
    <div class="container">
      <h2 class="checkup-compound__title _title">
        <?php echo esc_html($title); ?>
      </h2>
      <div class="checkup-compound__inner">
        <div class="checkup-compound__left accordion">
          <?php
          $counter = 1;
          foreach($points as $point) :
            $num = str_pad($counter, 2, '0', STR_PAD_LEFT);
          ?>
          <div class="checkup-compound__item accordion-item">
            <div class="checkup-compound__item-header accordion-header">
              <div class="checkup-compound__item-left">
                <span class="checkup-compound__item-step">
                  <?php echo esc_html($num); ?>
                </span>
                <h4 class="checkup-compound__item-title">
                  <?php echo esc_html($point['c_name']); ?>
                </h4>
              </div>
              <div class="open-item checkup-compound__item-icon">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.75 2C10.75 1.58579 10.4142 1.25 10 1.25L3.25 1.25C2.83578 1.25 2.5 1.58579 2.5 2C2.5 2.41421 2.83578 2.75 3.25 2.75L9.25 2.75L9.25 8.75C9.25 9.16421 9.58579 9.5 10 9.5C10.4142 9.5 10.75 9.16421 10.75 8.75L10.75 2ZM2 10L2.53033 10.5303L10.5303 2.53033L10 2L9.46967 1.46967L1.46967 9.46967L2 10Z" fill="white"/>
                </svg>
              </div>
            </div>

            <div class="checkup-compound__item-body accordion-body">
              <?php if(!empty($point['list'])) : ?>
                <ul class="checkup-compound__item-list">
                  <?php foreach($point['list'] as $item) : ?>
                    <li class="checkup-compound__item-point">
                      <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z" fill="white"/>
                      </svg>
                      <span><?php echo esc_html($item); ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

              <?php if(!empty($point['price_a']) || !empty($point['c_name_a'])) : ?>
                <div class="checkup-compound__item-cost">
                  <?php if(!empty($point['c_name_a'])) : ?>
                    <h5 class="checkup-compound__item-name">
                      <?php echo $point['c_name_a']; ?>
                    </h5>
                  <?php endif; ?>

                  <div class="checkup-compound__item-right">
                    <?php if(!empty($point['price_a'])) : ?>
                      <span class="checkup-compound__item-price">
                        <?php echo esc_html($point['price_a']); ?> ₽
                      </span>
                    <?php endif; ?>
                    <a class="checkup-compound__item-btn _gray-btn" href="#">
                      Записаться
                    </a>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <?php
          $counter++;
          endforeach;
          ?>
        </div>

        <div class="checkup-compound__right">
          <div class="checkup-compound__right-wrapper">
            <img class="checkup-compound__right-img _img" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>">
            <div class="checkup-compound__right-content">
              <p class="checkup-compound__right-name">
                <?php echo $fio; ?>
              </p>
              <div class="checkup-compound__right-info">
                <p class="checkup-compound__right-text">
                  <?php echo $position; ?>
                </p>
                <?php if(!empty($experience)) : ?>
                  <p class="checkup-compound__right-exp">
                    <?php echo $experience; ?>
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
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.15957 11.62C9.12957 11.62 9.10957 11.62 9.07957 11.62C9.02957 11.61 8.95957 11.61 8.89957 11.62C5.99957 11.53 3.80957 9.25 3.80957 6.44C3.80957 3.58 6.13957 1.25 8.99957 1.25C11.8596 1.25 14.1896 3.58 14.1896 6.44C14.1796 9.25 11.9796 11.53 9.18957 11.62C9.17957 11.62 9.16957 11.62 9.15957 11.62ZM8.99957 2.75C6.96957 2.75 5.30957 4.41 5.30957 6.44C5.30957 8.44 6.86957 10.05 8.85957 10.12C8.91957 10.11 9.04957 10.11 9.17957 10.12C11.1396 10.03 12.6796 8.42 12.6896 6.44C12.6896 4.41 11.0296 2.75 8.99957 2.75Z"
                fill="white" />
              <path
                d="M16.5394 11.75C16.5094 11.75 16.4794 11.75 16.4494 11.74C16.0394 11.78 15.6194 11.49 15.5794 11.08C15.5394 10.67 15.7894 10.3 16.1994 10.25C16.3194 10.24 16.4494 10.24 16.5594 10.24C18.0194 10.16 19.1594 8.96 19.1594 7.49C19.1594 5.97 17.9294 4.74 16.4094 4.74C15.9994 4.75 15.6594 4.41 15.6594 4C15.6594 3.59 15.9994 3.25 16.4094 3.25C18.7494 3.25 20.6594 5.16 20.6594 7.5C20.6594 9.8 18.8594 11.66 16.5694 11.75C16.5594 11.75 16.5494 11.75 16.5394 11.75Z"
                fill="white" />
              <path
                d="M9.16961 22.55C7.20961 22.55 5.23961 22.05 3.74961 21.05C2.35961 20.13 1.59961 18.87 1.59961 17.5C1.59961 16.13 2.35961 14.86 3.74961 13.93C6.74961 11.94 11.6096 11.94 14.5896 13.93C15.9696 14.85 16.7396 16.11 16.7396 17.48C16.7396 18.85 15.9796 20.12 14.5896 21.05C13.0896 22.05 11.1296 22.55 9.16961 22.55ZM4.57961 15.19C3.61961 15.83 3.09961 16.65 3.09961 17.51C3.09961 18.36 3.62961 19.18 4.57961 19.81C7.06961 21.48 11.2696 21.48 13.7596 19.81C14.7196 19.17 15.2396 18.35 15.2396 17.49C15.2396 16.64 14.7096 15.82 13.7596 15.19C11.2696 13.53 7.06961 13.53 4.57961 15.19Z"
                fill="white" />
              <path
                d="M18.3397 20.75C17.9897 20.75 17.6797 20.51 17.6097 20.15C17.5297 19.74 17.7897 19.35 18.1897 19.26C18.8197 19.13 19.3997 18.88 19.8497 18.53C20.4197 18.1 20.7297 17.56 20.7297 16.99C20.7297 16.42 20.4197 15.88 19.8597 15.46C19.4197 15.12 18.8697 14.88 18.2197 14.73C17.8197 14.64 17.5597 14.24 17.6497 13.83C17.7397 13.43 18.1397 13.17 18.5497 13.26C19.4097 13.45 20.1597 13.79 20.7697 14.26C21.6997 14.96 22.2297 15.95 22.2297 16.99C22.2297 18.03 21.6897 19.02 20.7597 19.73C20.1397 20.21 19.3597 20.56 18.4997 20.73C18.4397 20.75 18.3897 20.75 18.3397 20.75Z"
                fill="white" />
            </svg>

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
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15 12.9502H8C7.59 12.9502 7.25 12.6102 7.25 12.2002C7.25 11.7902 7.59 11.4502 8 11.4502H15C15.41 11.4502 15.75 11.7902 15.75 12.2002C15.75 12.6102 15.41 12.9502 15 12.9502Z"
                fill="white" />
              <path
                d="M12.38 16.9502H8C7.59 16.9502 7.25 16.6102 7.25 16.2002C7.25 15.7902 7.59 15.4502 8 15.4502H12.38C12.79 15.4502 13.13 15.7902 13.13 16.2002C13.13 16.6102 12.79 16.9502 12.38 16.9502Z"
                fill="white" />
              <path
                d="M14 6.75H10C9.04 6.75 7.25 6.75 7.25 4C7.25 1.25 9.04 1.25 10 1.25H14C14.96 1.25 16.75 1.25 16.75 4C16.75 4.96 16.75 6.75 14 6.75ZM10 2.75C9.01 2.75 8.75 2.75 8.75 4C8.75 5.25 9.01 5.25 10 5.25H14C15.25 5.25 15.25 4.99 15.25 4C15.25 2.75 14.99 2.75 14 2.75H10Z"
                fill="white" />
              <path
                d="M15 22.7504H9C3.38 22.7504 2.25 20.1704 2.25 16.0004V10.0004C2.25 5.44042 3.9 3.49042 7.96 3.28042C8.36 3.26042 8.73 3.57042 8.75 3.99042C8.77 4.41042 8.45 4.75042 8.04 4.77042C5.2 4.93042 3.75 5.78042 3.75 10.0004V16.0004C3.75 19.7004 4.48 21.2504 9 21.2504H15C19.52 21.2504 20.25 19.7004 20.25 16.0004V10.0004C20.25 5.78042 18.8 4.93042 15.96 4.77042C15.55 4.75042 15.23 4.39042 15.25 3.98042C15.27 3.57042 15.63 3.25042 16.04 3.27042C20.1 3.49042 21.75 5.44042 21.75 9.99042V15.9904C21.75 20.1704 20.62 22.7504 15 22.7504Z"
                fill="white" />
            </svg>

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
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M20 5.75H14C13.59 5.75 13.25 5.41 13.25 5C13.25 4.59 13.59 4.25 14 4.25H20C20.41 4.25 20.75 4.59 20.75 5C20.75 5.41 20.41 5.75 20 5.75Z"
                fill="white" />
              <path
                d="M17 8.75H14C13.59 8.75 13.25 8.41 13.25 8C13.25 7.59 13.59 7.25 14 7.25H17C17.41 7.25 17.75 7.59 17.75 8C17.75 8.41 17.41 8.75 17 8.75Z"
                fill="white" />
              <path
                d="M11.5 21.75C5.85 21.75 1.25 17.15 1.25 11.5C1.25 5.85 5.85 1.25 11.5 1.25C11.91 1.25 12.25 1.59 12.25 2C12.25 2.41 11.91 2.75 11.5 2.75C6.67 2.75 2.75 6.68 2.75 11.5C2.75 16.32 6.67 20.25 11.5 20.25C16.33 20.25 20.25 16.32 20.25 11.5C20.25 11.09 20.59 10.75 21 10.75C21.41 10.75 21.75 11.09 21.75 11.5C21.75 17.15 17.15 21.75 11.5 21.75Z"
                fill="white" />
              <path
                d="M21.9999 22.7504C21.8099 22.7504 21.6199 22.6804 21.4699 22.5304L19.4699 20.5304C19.1799 20.2404 19.1799 19.7604 19.4699 19.4704C19.7599 19.1804 20.2399 19.1804 20.5299 19.4704L22.5299 21.4704C22.8199 21.7604 22.8199 22.2404 22.5299 22.5304C22.3799 22.6804 22.1899 22.7504 21.9999 22.7504Z"
                fill="white" />
            </svg>

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
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18.6498 8.95C16.6598 8.95 15.0498 7.33 15.0498 5.35C15.0498 4.54 15.3198 3.77 15.8198 3.13C15.8398 3.1 15.8698 3.08 15.8898 3.05C16.5698 2.22 17.5698 1.75 18.6498 1.75C20.6298 1.75 22.2498 3.37 22.2498 5.35C22.2498 6.46 21.7498 7.49 20.8698 8.18C20.2298 8.68 19.4598 8.95 18.6498 8.95ZM16.9498 4.12C16.6898 4.48 16.5498 4.9 16.5498 5.35C16.5498 6.51 17.4898 7.45 18.6498 7.45C19.1198 7.45 19.5698 7.29 19.9398 7C20.4498 6.6 20.7498 6 20.7498 5.35C20.7498 4.19 19.8098 3.25 18.6498 3.25C17.9998 3.25 17.3998 3.54 17.0098 4.05C16.9898 4.08 16.9698 4.1 16.9498 4.12Z"
                fill="white" />
              <path
                d="M5.35 8.95C4.54 8.95 3.77 8.68 3.13 8.18C2.25 7.49 1.75 6.46 1.75 5.35C1.75 3.37 3.37 1.75 5.35 1.75C6.46 1.75 7.49 2.25 8.18 3.13C8.68 3.77 8.95 4.54 8.95 5.35C8.95 7.33 7.33 8.95 5.35 8.95ZM5.35 3.25C4.19 3.25 3.25 4.19 3.25 5.35C3.25 6 3.54 6.6 4.06 7C4.43 7.29 4.88 7.45 5.35 7.45C6.51 7.45 7.45 6.51 7.45 5.35C7.45 4.88 7.29 4.43 7 4.06C6.6 3.54 6 3.25 5.35 3.25Z"
                fill="white" />
              <path
                d="M18.6498 22.2498C17.5698 22.2498 16.5698 21.7798 15.8898 20.9498C15.8598 20.9298 15.8398 20.8998 15.8198 20.8698C15.3198 20.2298 15.0498 19.4598 15.0498 18.6498C15.0498 16.6598 16.6698 15.0498 18.6498 15.0498C19.4598 15.0498 20.2298 15.3198 20.8698 15.8198C20.8998 15.8398 20.9198 15.8698 20.9498 15.8898C21.7798 16.5698 22.2498 17.5698 22.2498 18.6498C22.2498 20.6298 20.6298 22.2498 18.6498 22.2498ZM16.9498 19.8798C16.9698 19.8998 16.9898 19.9198 17.0098 19.9498C17.3998 20.4598 17.9998 20.7498 18.6498 20.7498C19.8098 20.7498 20.7498 19.8098 20.7498 18.6498C20.7498 17.9998 20.4598 17.3998 19.9498 17.0098C19.9198 16.9898 19.8998 16.9698 19.8798 16.9498C19.5198 16.6898 19.0998 16.5498 18.6498 16.5498C17.4898 16.5498 16.5498 17.4898 16.5498 18.6498C16.5498 19.0998 16.6898 19.5198 16.9498 19.8798Z"
                fill="white" />
              <path
                d="M5.35 22.2498C3.37 22.2498 1.75 20.6298 1.75 18.6498C1.75 17.5698 2.22 16.5698 3.05 15.8898C3.07 15.8598 3.1 15.8398 3.13 15.8198C3.77 15.3198 4.54 15.0498 5.35 15.0498C7.34 15.0498 8.95 16.6698 8.95 18.6498C8.95 19.4598 8.68 20.2298 8.18 20.8698C7.49 21.7498 6.46 22.2498 5.35 22.2498ZM4.12 16.9498C4.1 16.9698 4.08 16.9898 4.05 17.0098C3.54 17.3998 3.25 17.9998 3.25 18.6498C3.25 19.8098 4.19 20.7498 5.35 20.7498C6 20.7498 6.6 20.4598 7 19.9398C7.29 19.5698 7.45 19.1198 7.45 18.6498C7.45 17.4898 6.51 16.5498 5.35 16.5498C4.9 16.5498 4.48 16.6898 4.12 16.9498Z"
                fill="white" />
              <path
                d="M12 22.25C10.34 22.25 8.69 21.84 7.24 21.07C7.04 20.97 6.91 20.78 6.86 20.56C6.81 20.34 6.86 20.12 7 19.94C7.29 19.57 7.45 19.12 7.45 18.65C7.45 17.49 6.51 16.55 5.35 16.55C4.88 16.55 4.43 16.71 4.06 17C3.89 17.14 3.66 17.19 3.44 17.14C3.22 17.09 3.04 16.96 2.93 16.76C2.15 15.29 1.75 13.69 1.75 12C1.75 10.34 2.16 8.69 2.93 7.24C3.03 7.04 3.22 6.91 3.44 6.86C3.66 6.81 3.88 6.87 4.06 7C4.43 7.29 4.88 7.45 5.35 7.45C6.51 7.45 7.45 6.51 7.45 5.35C7.45 4.88 7.29 4.43 7 4.06C6.86 3.89 6.81 3.66 6.86 3.44C6.91 3.22 7.04 3.04 7.24 2.93C8.69 2.16 10.34 1.75 12 1.75C13.69 1.75 15.29 2.15 16.76 2.93C16.96 3.03 17.09 3.22 17.14 3.44C17.19 3.66 17.13 3.88 17 4.06C16.71 4.43 16.55 4.88 16.55 5.35C16.55 6.51 17.49 7.45 18.65 7.45C19.12 7.45 19.57 7.29 19.94 7C20.11 6.86 20.34 6.81 20.56 6.86C20.78 6.91 20.96 7.04 21.07 7.24C21.84 8.69 22.25 10.34 22.25 12C22.25 13.69 21.85 15.29 21.07 16.76C20.97 16.96 20.78 17.09 20.56 17.14C20.34 17.19 20.12 17.13 19.94 17C19.57 16.71 19.12 16.55 18.65 16.55C17.49 16.55 16.55 17.49 16.55 18.65C16.55 19.12 16.71 19.57 17 19.94C17.14 20.11 17.19 20.34 17.14 20.56C17.09 20.78 16.96 20.96 16.76 21.07C15.29 21.85 13.69 22.25 12 22.25ZM8.65 20.08C10.77 20.97 13.25 20.96 15.34 20.08C15.14 19.63 15.04 19.15 15.04 18.65C15.04 16.66 16.66 15.05 18.64 15.05C19.14 15.05 19.62 15.15 20.07 15.35C20.51 14.3 20.74 13.18 20.74 12C20.74 10.85 20.51 9.7 20.07 8.65C19.62 8.85 19.14 8.95 18.64 8.95C16.65 8.95 15.04 7.33 15.04 5.35C15.04 4.85 15.14 4.37 15.34 3.92C13.25 3.04 10.76 3.04 8.65 3.92C8.85 4.37 8.95 4.85 8.95 5.35C8.95 7.34 7.33 8.95 5.35 8.95C4.85 8.95 4.37 8.85 3.92 8.65C3.48 9.7 3.25 10.85 3.25 12C3.25 13.17 3.47 14.29 3.92 15.35C4.37 15.15 4.85 15.05 5.35 15.05C7.34 15.05 8.95 16.67 8.95 18.65C8.95 19.15 8.85 19.63 8.65 20.08Z"
                fill="white" />
            </svg>

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
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.6999 19.7305H7.29994C6.55994 19.7305 5.80994 19.2005 5.55994 18.5105L1.41993 6.92047C0.909935 5.46047 1.27993 4.79047 1.67993 4.49047C2.07993 4.19047 2.82994 4.01047 4.08994 4.91047L7.98993 7.70047C8.10993 7.77047 8.21994 7.80047 8.29994 7.78047C8.38994 7.75047 8.45994 7.67047 8.50994 7.53047L10.2699 2.84047C10.7999 1.44047 11.5799 1.23047 11.9999 1.23047C12.4199 1.23047 13.1999 1.44047 13.7299 2.84047L15.4899 7.53047C15.5399 7.66047 15.6099 7.75047 15.6999 7.78047C15.7899 7.81047 15.8999 7.78047 16.0099 7.69047L19.6699 5.08047C21.0099 4.12047 21.7899 4.31047 22.2199 4.62047C22.6399 4.94047 23.0299 5.65047 22.4799 7.20047L18.4399 18.5105C18.1899 19.2005 17.4399 19.7305 16.6999 19.7305ZM2.67994 5.81047C2.69994 5.95047 2.73993 6.15047 2.83993 6.41047L6.97994 18.0005C7.01994 18.1005 7.19994 18.2305 7.29994 18.2305H16.6999C16.8099 18.2305 16.9899 18.1005 17.0199 18.0005L21.0599 6.70047C21.1999 6.32047 21.2399 6.06047 21.2499 5.91047C21.0999 5.96047 20.8699 6.07047 20.5399 6.31047L16.8799 8.92047C16.3799 9.27047 15.7899 9.38047 15.2599 9.22047C14.7299 9.06047 14.2999 8.64047 14.0799 8.07047L12.3199 3.38047C12.1899 3.03047 12.0699 2.86047 11.9999 2.78047C11.9299 2.86047 11.8099 3.03047 11.6799 3.37047L9.91994 8.06047C9.70994 8.63047 9.27993 9.05047 8.73993 9.21047C8.20994 9.37047 7.60993 9.26047 7.11994 8.91047L3.21994 6.12047C2.98994 5.96047 2.80994 5.86047 2.67994 5.81047Z"
                fill="white" />
              <path
                d="M17.5 22.75H6.5C6.09 22.75 5.75 22.41 5.75 22C5.75 21.59 6.09 21.25 6.5 21.25H17.5C17.91 21.25 18.25 21.59 18.25 22C18.25 22.41 17.91 22.75 17.5 22.75Z"
                fill="white" />
              <path
                d="M14.5 14.75H9.5C9.09 14.75 8.75 14.41 8.75 14C8.75 13.59 9.09 13.25 9.5 13.25H14.5C14.91 13.25 15.25 13.59 15.25 14C15.25 14.41 14.91 14.75 14.5 14.75Z"
                fill="white" />
            </svg>

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
function checkupReviews($title){
  ob_start(); ?>

  <section class="checkup-reviews _section-lg">
    <div class="container">
      <div class="checkup-reviews__top">
        <h2 class="checkup-reviews__title _title">
          <?php echo $title; ?>
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
            <a class="contacts__info-btn _gray-btn" href="#" data-fancybox>
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
