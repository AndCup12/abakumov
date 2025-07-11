<?php

/**
 * Template Name: Направления-single
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header();
?>

<main class="main" id="directions-single">
  <section class="front-block _image-wrapper _section-lg">
    <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
    <div class="container">
      <div class="front-block__inner">
        <div class="front-block__left">
          <h1 class="front-block__title _title">
            Аллергология<br>
            в Abakumov Clinic
          </h1>
          <p class="front-block__subtitle _subtitle">
            Комплексный подход к диагностике и лечению<br> аллергических заболеваний
          </p>
          <div class="front-block__btns">
            <a class="front-block__btn _main-btn" href="#" data-fancybox>
              <span>Записаться на прием</span>
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
        <div class="front-block__right-item">
          <div class="front-block__right-wrapper">
            <img class="front-block__right-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-4.webp" alt="front-block-4">
          </div>
        </div>
      </div>
    </div>
  </section>
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
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-4.webp" alt="services-4">
          </div>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Более 30 ключевых анализов —<br> от биохимии до иммуноблота
            </h4>
            <p class="services__item-text">
              с персональным разбором результатов<br> и составлением плана лечения
            </p>
            <span class="services__item-num">01</span>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-2.webp" alt="services-2">
          </div>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Врачи-эксперты с опытом работы<br>
              с аутоиммунными заболеваниями
            </h4>
            <p class="services__item-text">
              Только доказательные методики<br>
              и клинические рекомендации
            </p>
            <span class="services__item-num">02</span>
          </div>
        </div>
        <div class="services__item">
          <div class="services__item-wrapper">
            <img class="services__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/services-5.webp" alt="services-5">
          </div>
          <div class="services__item-info">
            <h4 class="services__item-title">
              Все обследования — за 1–2 визита,<br> по индивидуальному графику
            </h4>
            <p class="services__item-text">
              Персональный координатор и бесплатный<br> трансфер для пациентов из Москвы и МО
            </p>
            <span class="services__item-num">03</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>