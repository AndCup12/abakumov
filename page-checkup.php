<?php get_header(); ?>

    <main class="main" id="checkup-main">
      <!-- <section class="front-block _image-wrapper _section-lg">
        <img class="front-block__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abacumov-front.svg" alt="abacumov">
        <div class="container">
          <div class="front-block__top">
            <h1 class="front-block__title _title">
              Полный чекап организма за 1 день — узнайте все о своем здоровье
            </h1>
            <p class="front-block__subtitle _subtitle">
              Индивидуальные программы обследования<br> с результатами в день обращения
            </p>
            <img class="front-block__right" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-block-3.webp" alt="front-block-3">
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
      </section> -->

      <?php echo checkupFrontBlock();?>

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

      <div class="wrapper-bg _section-lg">

        <!-- Комплексные обследования -->
        <section class="ready-programs">
          <div class="container">
            <h2 class="ready-programs__title _title">
              Врачи Abakumov Clinic разработали
              комплексные обследования
            </h2>
            <p class="ready-programs__subtitle _subtitle">
              по ключевым направлениям здоровья — с учётом потребностей, возраста и образа жизни
            </p>
            <h3 class="ready-programs__items-title">
              Что входит в Check-Up
            </h3>
            <div class="ready-programs__items">
              <div class="ready-programs__item">
                <div class="ready-programs__item-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.79 15.17C10.59 15.17 10.4 15.09 10.26 14.95L7.84 12.53C7.55 12.24 7.55 11.76 7.84 11.47C8.13 11.18 8.61 11.18 8.9 11.47L10.79 13.36L15.09 9.06003C15.38 8.77003 15.86 8.77003 16.15 9.06003C16.44 9.35003 16.44 9.83003 16.15 10.12L11.32 14.95C11.18 15.09 10.99 15.17 10.79 15.17Z"
                      fill="white" />
                    <path
                      d="M12 22.75C11.37 22.75 10.74 22.54 10.25 22.12L8.67 20.76C8.51 20.62 8.11 20.48 7.9 20.48H6.18C4.7 20.48 3.5 19.28 3.5 17.8V16.09C3.5 15.88 3.36 15.49 3.22 15.33L1.87 13.74C1.05 12.77 1.05 11.24 1.87 10.27L3.22 8.68C3.36 8.52 3.5 8.13 3.5 7.92V6.2C3.5 4.72 4.7 3.52 6.18 3.52H7.91C8.12 3.52 8.52001 3.37 8.68001 3.24L10.26 1.88C11.24 1.04 12.77 1.04 13.75 1.88L15.33 3.24C15.49 3.38 15.89 3.52 16.1 3.52H17.8C19.28 3.52 20.48 4.72 20.48 6.2V7.9C20.48 8.11 20.63 8.51 20.77 8.67L22.13 10.25C22.97 11.23 22.97 12.76 22.13 13.74L20.77 15.32C20.63 15.48 20.48 15.88 20.48 16.09V17.79C20.48 19.27 19.28 20.47 17.8 20.47H16.1C15.89 20.47 15.49 20.62 15.33 20.75L13.75 22.11C13.26 22.54 12.63 22.75 12 22.75ZM6.18 5.02C5.53 5.02 5 5.55 5 6.2V7.91C5 8.48 4.73 9.21 4.36 9.64L3.01 11.23C2.66 11.64 2.66 12.35 3.01 12.76L4.36 14.35C4.73 14.79 5 15.51 5 16.08V17.79C5 18.44 5.53 18.97 6.18 18.97H7.91C8.49 18.97 9.22 19.24 9.66 19.62L11.24 20.98C11.65 21.33 12.37 21.33 12.78 20.98L14.36 19.62C14.8 19.25 15.53 18.97 16.11 18.97H17.81C18.46 18.97 18.99 18.44 18.99 17.79V16.09C18.99 15.51 19.26 14.78 19.64 14.34L21 12.76C21.35 12.35 21.35 11.63 21 11.22L19.64 9.64C19.26 9.2 18.99 8.47 18.99 7.89V6.2C18.99 5.55 18.46 5.02 17.81 5.02H16.11C15.53 5.02 14.8 4.75 14.36 4.37L12.78 3.01C12.37 2.66 11.65 2.66 11.24 3.01L9.66 4.38C9.22 4.75 8.48 5.02 7.91 5.02H6.18Z"
                      fill="white" />
                  </svg>

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
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.79 15.17C10.59 15.17 10.4 15.09 10.26 14.95L7.84 12.53C7.55 12.24 7.55 11.76 7.84 11.47C8.13 11.18 8.61 11.18 8.9 11.47L10.79 13.36L15.09 9.06003C15.38 8.77003 15.86 8.77003 16.15 9.06003C16.44 9.35003 16.44 9.83003 16.15 10.12L11.32 14.95C11.18 15.09 10.99 15.17 10.79 15.17Z"
                      fill="white" />
                    <path
                      d="M12 22.75C11.37 22.75 10.74 22.54 10.25 22.12L8.67 20.76C8.51 20.62 8.11 20.48 7.9 20.48H6.18C4.7 20.48 3.5 19.28 3.5 17.8V16.09C3.5 15.88 3.36 15.49 3.22 15.33L1.87 13.74C1.05 12.77 1.05 11.24 1.87 10.27L3.22 8.68C3.36 8.52 3.5 8.13 3.5 7.92V6.2C3.5 4.72 4.7 3.52 6.18 3.52H7.91C8.12 3.52 8.52001 3.37 8.68001 3.24L10.26 1.88C11.24 1.04 12.77 1.04 13.75 1.88L15.33 3.24C15.49 3.38 15.89 3.52 16.1 3.52H17.8C19.28 3.52 20.48 4.72 20.48 6.2V7.9C20.48 8.11 20.63 8.51 20.77 8.67L22.13 10.25C22.97 11.23 22.97 12.76 22.13 13.74L20.77 15.32C20.63 15.48 20.48 15.88 20.48 16.09V17.79C20.48 19.27 19.28 20.47 17.8 20.47H16.1C15.89 20.47 15.49 20.62 15.33 20.75L13.75 22.11C13.26 22.54 12.63 22.75 12 22.75ZM6.18 5.02C5.53 5.02 5 5.55 5 6.2V7.91C5 8.48 4.73 9.21 4.36 9.64L3.01 11.23C2.66 11.64 2.66 12.35 3.01 12.76L4.36 14.35C4.73 14.79 5 15.51 5 16.08V17.79C5 18.44 5.53 18.97 6.18 18.97H7.91C8.49 18.97 9.22 19.24 9.66 19.62L11.24 20.98C11.65 21.33 12.37 21.33 12.78 20.98L14.36 19.62C14.8 19.25 15.53 18.97 16.11 18.97H17.81C18.46 18.97 18.99 18.44 18.99 17.79V16.09C18.99 15.51 19.26 14.78 19.64 14.34L21 12.76C21.35 12.35 21.35 11.63 21 11.22L19.64 9.64C19.26 9.2 18.99 8.47 18.99 7.89V6.2C18.99 5.55 18.46 5.02 17.81 5.02H16.11C15.53 5.02 14.8 4.75 14.36 4.37L12.78 3.01C12.37 2.66 11.65 2.66 11.24 3.01L9.66 4.38C9.22 4.75 8.48 5.02 7.91 5.02H6.18Z"
                      fill="white" />
                  </svg>

                </div>
                <h4 class="ready-programs__item-title">
                  Лабораторные <br>анализы
                </h4>
              </div>
              <div class="ready-programs__item">
                <div class="ready-programs__item-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.79 15.17C10.59 15.17 10.4 15.09 10.26 14.95L7.84 12.53C7.55 12.24 7.55 11.76 7.84 11.47C8.13 11.18 8.61 11.18 8.9 11.47L10.79 13.36L15.09 9.06003C15.38 8.77003 15.86 8.77003 16.15 9.06003C16.44 9.35003 16.44 9.83003 16.15 10.12L11.32 14.95C11.18 15.09 10.99 15.17 10.79 15.17Z"
                      fill="white" />
                    <path
                      d="M12 22.75C11.37 22.75 10.74 22.54 10.25 22.12L8.67 20.76C8.51 20.62 8.11 20.48 7.9 20.48H6.18C4.7 20.48 3.5 19.28 3.5 17.8V16.09C3.5 15.88 3.36 15.49 3.22 15.33L1.87 13.74C1.05 12.77 1.05 11.24 1.87 10.27L3.22 8.68C3.36 8.52 3.5 8.13 3.5 7.92V6.2C3.5 4.72 4.7 3.52 6.18 3.52H7.91C8.12 3.52 8.52001 3.37 8.68001 3.24L10.26 1.88C11.24 1.04 12.77 1.04 13.75 1.88L15.33 3.24C15.49 3.38 15.89 3.52 16.1 3.52H17.8C19.28 3.52 20.48 4.72 20.48 6.2V7.9C20.48 8.11 20.63 8.51 20.77 8.67L22.13 10.25C22.97 11.23 22.97 12.76 22.13 13.74L20.77 15.32C20.63 15.48 20.48 15.88 20.48 16.09V17.79C20.48 19.27 19.28 20.47 17.8 20.47H16.1C15.89 20.47 15.49 20.62 15.33 20.75L13.75 22.11C13.26 22.54 12.63 22.75 12 22.75ZM6.18 5.02C5.53 5.02 5 5.55 5 6.2V7.91C5 8.48 4.73 9.21 4.36 9.64L3.01 11.23C2.66 11.64 2.66 12.35 3.01 12.76L4.36 14.35C4.73 14.79 5 15.51 5 16.08V17.79C5 18.44 5.53 18.97 6.18 18.97H7.91C8.49 18.97 9.22 19.24 9.66 19.62L11.24 20.98C11.65 21.33 12.37 21.33 12.78 20.98L14.36 19.62C14.8 19.25 15.53 18.97 16.11 18.97H17.81C18.46 18.97 18.99 18.44 18.99 17.79V16.09C18.99 15.51 19.26 14.78 19.64 14.34L21 12.76C21.35 12.35 21.35 11.63 21 11.22L19.64 9.64C19.26 9.2 18.99 8.47 18.99 7.89V6.2C18.99 5.55 18.46 5.02 17.81 5.02H16.11C15.53 5.02 14.8 4.75 14.36 4.37L12.78 3.01C12.37 2.66 11.65 2.66 11.24 3.01L9.66 4.38C9.22 4.75 8.48 5.02 7.91 5.02H6.18Z"
                      fill="white" />
                  </svg>

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
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.79 15.17C10.59 15.17 10.4 15.09 10.26 14.95L7.84 12.53C7.55 12.24 7.55 11.76 7.84 11.47C8.13 11.18 8.61 11.18 8.9 11.47L10.79 13.36L15.09 9.06003C15.38 8.77003 15.86 8.77003 16.15 9.06003C16.44 9.35003 16.44 9.83003 16.15 10.12L11.32 14.95C11.18 15.09 10.99 15.17 10.79 15.17Z"
                      fill="white" />
                    <path
                      d="M12 22.75C11.37 22.75 10.74 22.54 10.25 22.12L8.67 20.76C8.51 20.62 8.11 20.48 7.9 20.48H6.18C4.7 20.48 3.5 19.28 3.5 17.8V16.09C3.5 15.88 3.36 15.49 3.22 15.33L1.87 13.74C1.05 12.77 1.05 11.24 1.87 10.27L3.22 8.68C3.36 8.52 3.5 8.13 3.5 7.92V6.2C3.5 4.72 4.7 3.52 6.18 3.52H7.91C8.12 3.52 8.52001 3.37 8.68001 3.24L10.26 1.88C11.24 1.04 12.77 1.04 13.75 1.88L15.33 3.24C15.49 3.38 15.89 3.52 16.1 3.52H17.8C19.28 3.52 20.48 4.72 20.48 6.2V7.9C20.48 8.11 20.63 8.51 20.77 8.67L22.13 10.25C22.97 11.23 22.97 12.76 22.13 13.74L20.77 15.32C20.63 15.48 20.48 15.88 20.48 16.09V17.79C20.48 19.27 19.28 20.47 17.8 20.47H16.1C15.89 20.47 15.49 20.62 15.33 20.75L13.75 22.11C13.26 22.54 12.63 22.75 12 22.75ZM6.18 5.02C5.53 5.02 5 5.55 5 6.2V7.91C5 8.48 4.73 9.21 4.36 9.64L3.01 11.23C2.66 11.64 2.66 12.35 3.01 12.76L4.36 14.35C4.73 14.79 5 15.51 5 16.08V17.79C5 18.44 5.53 18.97 6.18 18.97H7.91C8.49 18.97 9.22 19.24 9.66 19.62L11.24 20.98C11.65 21.33 12.37 21.33 12.78 20.98L14.36 19.62C14.8 19.25 15.53 18.97 16.11 18.97H17.81C18.46 18.97 18.99 18.44 18.99 17.79V16.09C18.99 15.51 19.26 14.78 19.64 14.34L21 12.76C21.35 12.35 21.35 11.63 21 11.22L19.64 9.64C19.26 9.2 18.99 8.47 18.99 7.89V6.2C18.99 5.55 18.46 5.02 17.81 5.02H16.11C15.53 5.02 14.8 4.75 14.36 4.37L12.78 3.01C12.37 2.66 11.65 2.66 11.24 3.01L9.66 4.38C9.22 4.75 8.48 5.02 7.91 5.02H6.18Z"
                      fill="white" />
                  </svg>

                </div>
                <h4 class="ready-programs__item-title">
                  Индивидуальные <br>рекомендации<br>
                  по результатам<br> обследования​
                </h4>
              </div>
            </div>
          </div>
        </section>

      </div>

      <!-- Программы CheckUp для... -->
      <section class="checkup-programs">
        <div class="checkup-programs__program _section-lg">
          <div class="container">
            <div class="checkup-programs__top">
              <p class="checkup-programs__top-text">
                для женщин
              </p>
              <h3 class="checkup-programs__top-title _title">
                Программы Check-Upдля женщин
              </h3>
              <div class="checkup-programs__top-wrapper">
                <img class="checkup-programs__top-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-programs-1.webp"
                  alt="checkup-programs-1">
              </div>
            </div>
            <div class="checkup-programs__items">
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    01
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up «женское здоровье: нерегулярный<br> менструальный цикл»
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    02
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up «женское здоровье: восстановление<br> после родов»
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    03
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up «женское здоровье: онкоскрининг —<br> шейка матки»
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    04
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up «женское здоровье:<br>
                    предгравидарная подготовка»
                    <span class="checkup-programs__item-descr">
                      Пакет <span>LIGHT</span>
                    </span>
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    05
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up «женское здоровье: <br>
                    предгравидарная подготовка»
                    <span class="checkup-programs__item-descr premium">
                      Пакет <span>Premium</span>
                    </span>
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    06
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up пациентов <br>
                    18-30+ лет
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    07
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up пациентов <br>
                    после 40 лет
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    08
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up пациентов <br> после 60 лет
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="checkup-programs__program _section-lg">
          <div class="container">
            <div class="checkup-programs__top">
              <p class="checkup-programs__top-text">
                для мужчин
              </p>
              <h3 class="checkup-programs__top-title _title">
                Программы Check-Up для мужчин
              </h3>
              <div class="checkup-programs__top-wrapper">
                <img class="checkup-programs__top-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-programs-2.webp"
                  alt="checkup-programs-2">
              </div>
            </div>
            <div class="checkup-programs__items">
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    01
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up пациентов<br>
                    18-30 лет
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    02
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up пациентов<br>
                    после 40 лет
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    03
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up пациентов<br>
                    после 60 лет
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="checkup-programs__program _section-lg">
          <div class="container">
            <div class="checkup-programs__top checkup-programs__top--noimg">
              <p class="checkup-programs__top-text">
                специальные
              </p>
              <h3 class="checkup-programs__top-title _title">
                Специальные программы
              </h3>
            </div>
            <div class="checkup-programs__items">
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    01
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up <br>
                    «Диагностика псориаза»
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    02
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Комплекс обследования при острой и <br> хронической крапивнице
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    03
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Комплекс обследования при аллергическом <br> риноконъюнктивите и бронхиальной астме
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    04
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Комплексная программа <br> по похудению
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    05
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Гастроэнторологический <br>
                    check-up
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
              <div class="checkup-programs__item">
                <div class="checkup-programs__item-left">
                  <span class="checkup-programs__item-step">
                    06
                  </span>
                  <h4 class="checkup-programs__item-title">
                    Check-up <br> «Сияние»
                  </h4>
                </div>
                <div class="checkup-programs__item-right">
                  <a class="checkup-programs__item-link">
                    <span>Узнать подробнее</span>
                    <p class="arrow-icon">
                      <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.29289 9.05855C0.902369 8.66802 0.902369 8.03486 1.29289 7.64434L7.65685 1.28037C8.04738 0.889849 8.68054 0.889849 9.07107 1.28037C9.46159 1.6709 9.46159 2.30406 9.07107 2.69459L3.41421 8.35144L9.07107 14.0083C9.46159 14.3988 9.46159 15.032 9.07107 15.4225C8.68054 15.813 8.04738 15.813 7.65686 15.4225L1.29289 9.05855ZM21 8.35144L21 9.35144L2 9.35144L2 8.35144L2 7.35144L21 7.35144L21 8.35144Z"
                          fill="white" />
                      </svg>

                    </p>
                  </a>
                  <a class="checkup-programs__item-btn _gray-btn" href="#">
                    Записаться на Check-Up
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Чекап это -->
      <section class="checkup-is">
        <div class="container">
          <h2 class="checkup-is__title _title">
            Check-Up — это полное<br>
            обследование организма,
          </h2>
          <p class="checkup-is__subtitle _subtitle">
            направленное на раннее выявление заболеваний ещё до появления симптомов, что позволяет
          </p>
          <div class="checkup-is__items">
            <div class="checkup-is__item">
              <div class="checkup-is__item-wrapper">
                <img class="checkup-is__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-is-1.webp" alt="checkup-is-1">
              </div>
              <div class="checkup-is__item-info">
                <h5 class="checkup-is__item-title">
                  Проверить<br> здоровье в целом
                </h5>
                <p class="checkup-is__item-text">
                  или выявить<br>
                  скрытые риски
                </p>
              </div>
            </div>
            <div class="checkup-is__item">
              <div class="checkup-is__item-wrapper">
                <img class="checkup-is__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-is-2.webp" alt="checkup-is-2">
              </div>
              <div class="checkup-is__item-info">
                <h5 class="checkup-is__item-title">
                  Предупредить<br> развитие хронических
                </h5>
                <p class="checkup-is__item-text">
                  или наследственных<br>
                  заболеваний
                </p>
              </div>
            </div>
            <div class="checkup-is__item">
              <div class="checkup-is__item-wrapper">
                <img class="checkup-is__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-is-3.webp" alt="checkup-is-3">
              </div>
              <div class="checkup-is__item-info">
                <h5 class="checkup-is__item-title">
                  Сохранить здоровье<br>
                  на высоком уровне
                </h5>
                <p class="checkup-is__item-text">
                  в любом возрасте
                </p>
              </div>
            </div>
          </div>
          <div class="checkup-is__inner">
            <div class="checkup-is__inner-left">
              <h3 class="checkup-is__inner-title _title">
                Рекомендуем пройти<br> углубленную диагностику<br> под контролем терапевта,<br> если вы отмечаете у
                себя:
              </h3>
              <ul class="checkup-is__inner-list">
                <li class="checkup-is__inner-point">
                  <span class="checkup-is__inner-icon">
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                        fill="white" />
                    </svg>

                  </span>
                  <p class="checkup-is__inner-text">
                    снижение энергии и работоспособности,
                  </p>
                </li>
                <li class="checkup-is__inner-point">
                  <span class="checkup-is__inner-icon">
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                        fill="white" />
                    </svg>

                  </span>
                  <p class="checkup-is__inner-text">
                    нарушения сна или аппетита,
                  </p>
                </li>
                <li class="checkup-is__inner-point">
                  <span class="checkup-is__inner-icon">
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                        fill="white" />
                    </svg>

                  </span>
                  <p class="checkup-is__inner-text">
                    частые простуды, сбои цикла, боли в животе или голове,
                  </p>
                </li>
                <li class="checkup-is__inner-point">
                  <span class="checkup-is__inner-icon">
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                        fill="white" />
                    </svg>

                  </span>
                  <p class="checkup-is__inner-text">
                    нестабильное давление, пульс, прибавку или потерю веса
                  </p>
                </li>
              </ul>
            </div>
            <div class="checkup-is__inner-right">
              <div class="checkup-is__inner-wrapper relative">
                <img class="checkup-is__inner-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-is-4.webp" alt="checkup-is-4">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="checkup-stages _section-lg">
        <div class="container">
          <h2 class="checkup-stages__title _title">
            Этапы<br>
            прохождения<br>
            чек-ап
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
            <div class="checkup-stages__item">
              <span class="checkup-stages__item-stage">
                01
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
                Консультация терапевта<br> и дерматолога
              </h4>
              <p class="checkup-stages__item-text">
                – изучат анамнез и зададут<br> уточняющие вопросы для подбора<br> персонализированной<br>
                диагностической
                программы
              </p>
              <span class="checkup-stages__item-step">
                01
              </span>
            </div>
            <div class="checkup-stages__item">
              <span class="checkup-stages__item-stage">
                02
              </span>
              <span class="checkup-stages__item-icon">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M17.2902 23.0968C17.0844 23.0968 16.8785 23.0209 16.716 22.8584L15.0694 21.2118C14.7552 20.8976 14.7552 20.3776 15.0694 20.0634C15.3835 19.7493 15.9035 19.7493 16.2177 20.0634L17.2902 21.1359L20.0094 18.4168C20.3235 18.1026 20.8435 18.1026 21.1577 18.4168C21.4719 18.7309 21.4719 19.2509 21.1577 19.5651L17.8644 22.8584C17.7019 23.0209 17.496 23.0968 17.2902 23.0968Z"
                    fill="white" />
                  <path
                    d="M13.1735 12.5882C13.141 12.5882 13.1194 12.5882 13.0869 12.5882C13.0327 12.5773 12.9569 12.5773 12.8919 12.5882C9.75021 12.4907 7.37771 10.0207 7.37771 6.9765C7.36688 5.4815 7.95188 4.07317 9.01354 3.0115C10.0752 1.94984 11.4835 1.354 12.9894 1.354C16.0877 1.354 18.6119 3.87817 18.6119 6.9765C18.6119 10.0207 16.2394 12.4798 13.206 12.5882C13.1952 12.5882 13.1844 12.5882 13.1735 12.5882ZM12.9894 2.979C11.9169 2.979 10.9202 3.4015 10.1619 4.149C9.41438 4.90734 9.00271 5.904 9.00271 6.96567C9.00271 9.13234 10.6927 10.8873 12.8485 10.9523C12.9135 10.9415 13.0544 10.9415 13.1952 10.9523C15.3294 10.8548 16.9869 9.11067 16.9869 6.96567C16.9869 4.77734 15.1885 2.979 12.9894 2.979Z"
                    fill="white" />
                  <path
                    d="M12.9894 24.44C10.7794 24.44 8.68854 23.8658 7.10688 22.8042C5.60104 21.7967 4.77771 20.4208 4.77771 18.9367C4.77771 17.4525 5.61188 16.0875 7.10688 15.0908C10.346 12.9242 15.611 12.9242 18.8502 15.0908C19.2185 15.34 19.3269 15.8492 19.0777 16.2175C18.8285 16.5967 18.3194 16.6942 17.951 16.445C15.2535 14.6467 10.7035 14.6467 8.00604 16.445C6.96604 17.1383 6.40271 18.0158 6.40271 18.9367C6.40271 19.8575 6.96604 20.7567 8.00604 21.45C9.31688 22.3275 11.0827 22.8042 12.9785 22.8042C13.4227 22.8042 13.791 23.1725 13.791 23.6167C13.791 24.0608 13.4335 24.44 12.9894 24.44Z"
                    fill="white" />
                </svg>

              </span>
              <h4 class="checkup-stages__item-title">
                Прохождение<br> диагностики
              </h4>
              <p class="checkup-stages__item-text">
                – анализы, УЗИ, инструментальные<br> обследования и профильные<br> специалисты
              </p>
              <span class="checkup-stages__item-step">
                02
              </span>
            </div>
            <div class="checkup-stages__item">
              <span class="checkup-stages__item-stage">
                03
              </span>
              <span class="checkup-stages__item-icon">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.25 24.6457H9.74996C3.86746 24.6457 1.35413 22.1323 1.35413 16.2498V9.74984C1.35413 3.86734 3.86746 1.354 9.74996 1.354H15.1666C15.6108 1.354 15.9791 1.72234 15.9791 2.1665C15.9791 2.61067 15.6108 2.979 15.1666 2.979H9.74996C4.75579 2.979 2.97913 4.75567 2.97913 9.74984V16.2498C2.97913 21.244 4.75579 23.0207 9.74996 23.0207H16.25C21.2441 23.0207 23.0208 21.244 23.0208 16.2498V10.8332C23.0208 10.389 23.3891 10.0207 23.8333 10.0207C24.2775 10.0207 24.6458 10.389 24.6458 10.8332V16.2498C24.6458 22.1323 22.1325 24.6457 16.25 24.6457Z"
                    fill="white" />
                  <path
                    d="M23.8333 11.646H19.5C15.795 11.646 14.3541 10.2052 14.3541 6.50019V2.16686C14.3541 1.84186 14.5491 1.53852 14.8525 1.41936C15.1558 1.28936 15.5025 1.36519 15.7408 1.59269L24.4075 10.2594C24.635 10.4869 24.7108 10.8444 24.5808 11.1477C24.4508 11.451 24.1583 11.646 23.8333 11.646ZM15.9791 4.12769V6.50019C15.9791 9.29519 16.705 10.021 19.5 10.021H21.8725L15.9791 4.12769Z"
                    fill="white" />
                  <path
                    d="M14.0834 14.896H7.58337C7.13921 14.896 6.77087 14.5277 6.77087 14.0835C6.77087 13.6393 7.13921 13.271 7.58337 13.271H14.0834C14.5275 13.271 14.8959 13.6393 14.8959 14.0835C14.8959 14.5277 14.5275 14.896 14.0834 14.896Z"
                    fill="white" />
                  <path
                    d="M11.9167 19.229H7.58337C7.13921 19.229 6.77087 18.8607 6.77087 18.4165C6.77087 17.9723 7.13921 17.604 7.58337 17.604H11.9167C12.3609 17.604 12.7292 17.9723 12.7292 18.4165C12.7292 18.8607 12.3609 19.229 11.9167 19.229Z"
                    fill="white" />
                </svg>

              </span>
              <h4 class="checkup-stages__item-title">
                Анализ результатов<br>
                и персональные рекомендации
              </h4>
              <p class="checkup-stages__item-subtitle">
                Врачи подробно объяснят:
              </p>
              <ul class="checkup-stages__item-list">
                <li class="checkup-stages__item-point">
                  <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                      fill="white" />
                  </svg>

                  <span>
                    что происходит в организме
                  </span>
                </li>
                <li class="checkup-stages__item-point">
                  <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                      fill="white" />
                  </svg>

                  <span>
                    какие риски обнаружены
                  </span>
                </li>
                <li class="checkup-stages__item-point">
                  <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                      fill="white" />
                  </svg>

                  <span>
                    какие риски исключены
                  </span>
                </li>
                <li class="checkup-stages__item-point">
                  <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.86343 6C2.70335 6 2.55128 5.93303 2.43922 5.81583L0.174087 3.44681C-0.058029 3.20405 -0.058029 2.80223 0.174087 2.55947C0.406203 2.31671 0.790395 2.31671 1.02251 2.55947L2.86343 4.48483L6.97749 0.182072C7.2096 -0.0606906 7.5938 -0.0606906 7.82591 0.182072C8.05803 0.424834 8.05803 0.826648 7.82591 1.06941L3.28764 5.81583C3.17559 5.93303 3.02351 6 2.86343 6Z"
                      fill="white" />
                  </svg>

                  <span>
                    какие шаги нужно предпринять
                  </span>
                </li>
              </ul>
              <span class="checkup-stages__item-step">
                03
              </span>
            </div>
          </div>
        </div>
      </section>

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

      <section class="callback ">
        <div class="container">
          <div class="callback__inner _image-wrapper relative">
            <div class="overlay"></div>
            <div class="callback__left relative">
              <h2 class="callback__title _title">
                Запишитесь<br>
                на консультацию<br> с терапевтом
              </h2>
              <p class="callback__subtitle">
                — врач составит персональный<br> план обследования с учётом ваших<br> индивидуальных особенностей
              </p>
              <div class="callback__info">
                <img class="callback__info-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/callback-manager.webp" alt="callback-manager">
                <p class="callback__info-text">
                  Мы перезвоним вам<br> в течение 7 минут
                </p>
              </div>
            </div>
            <form class="callback__form form-submit relative" action="#" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="from" value="Консультация с терапевтом">
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
          <div class="reviews__swiper swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide reviews__slide">
                <div class="reviews__item">
                  <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-1.webp" alt="reviews-1">
                  <a class="reviews__item-wrapper" href="#" data-fancybox>
                    <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-1-1.webp" alt="reviews-1-1">
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
              <div class="swiper-slide reviews__slide">
                <div class="reviews__item">
                  <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-2.webp" alt="reviews-2">
                  <a class="reviews__item-wrapper" href="#" data-fancybox>
                    <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-2-1.webp" alt="reviews-2-1">
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
              <div class="swiper-slide reviews__slide">
                <div class="reviews__item">
                  <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-3.webp" alt="reviews-3">
                  <a class="reviews__item-wrapper" href="#" data-fancybox>
                    <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-3-1.webp" alt="reviews-3-1">
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
              <div class="swiper-slide reviews__slide">
                <div class="reviews__item">
                  <img class="reviews__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-4.webp" alt="reviews-4">
                  <a class="reviews__item-wrapper" href="#" data-fancybox>
                    <img class="reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/reviews-4-1.webp" alt="reviews-4-1">
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

      <section class="checkup-reviews _section-lg">
        <div class="container">
          <div class="checkup-reviews__top">
            <h2 class="checkup-reviews__title _title">
              Честно. Уважительно. <br> По-настоящему. <br>
              Отзывы без редакции
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
                <a class="checkup-reviews__item" href="images/checkup-reviews-1.webp" data-fancybox="checkup-reviews">
                  <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-1.webp"
                    alt="checkup-reviews-1">
                </a>
              </div>
              <div class="swiper-slide checkup-reviews__slide">
                <a class="checkup-reviews__item" href="images/checkup-reviews-2.webp" data-fancybox="checkup-reviews">
                  <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-2.webp"
                    alt="checkup-reviews-2">
                </a>
              </div>
              <div class="swiper-slide checkup-reviews__slide">
                <a class="checkup-reviews__item" href="images/checkup-reviews-3.webp" data-fancybox="checkup-reviews">
                  <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-3.webp"
                    alt="checkup-reviews-3">
                </a>
              </div>
              <div class="swiper-slide checkup-reviews__slide">
                <a class="checkup-reviews__item" href="images/checkup-reviews-4.webp" data-fancybox="checkup-reviews">
                  <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-4.webp"
                    alt="checkup-reviews-4">
                </a>
              </div>
              <div class="swiper-slide checkup-reviews__slide">
                <a class="checkup-reviews__item" href="images/checkup-reviews-5.webp" data-fancybox="checkup-reviews">
                  <img class="checkup-reviews__item-video _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkup-reviews-5.webp"
                    alt="checkup-reviews-5">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="wrapper-bg _section-lg">

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
                  <a class="rating__item" href="images/rating-1.webp" data-fancybox="rating-gallery">
                    <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-1.webp" alt="rating-1">
                  </a>
                </div>
                <div class="swiper-slide rating__slide">
                  <a class="rating__item" href="images/rating-2.webp" data-fancybox="rating-gallery">
                    <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-2.webp" alt="rating-2">
                  </a>
                </div>
                <div class="swiper-slide rating__slide">
                  <a class="rating__item" href="images/rating-3.webp" data-fancybox="rating-gallery">
                    <img class="rating__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/rating-3.webp" alt="rating-3">
                  </a>
                </div>
                <div class="swiper-slide rating__slide">
                  <a class="rating__item" href="images/rating-1.webp" data-fancybox="rating-gallery">
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

      </div>
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
