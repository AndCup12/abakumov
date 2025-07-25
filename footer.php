<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__menu">
        <div class="footer__menu-col">
          <div class="footer__items">
            <div class="footer__item">
              <h4 class="footer__item-title">
                <a class="footer__title-link" href="#">
                  Чек-апы
                </a>
              </h4>
              <?php
                wp_nav_menu(array(
                    'menu' => 'check-up',
                    'container'      => false,
                    'menu_class'     => 'footer__item-list',
                    'walker'         => new Footer_Menu_Walker(),
                    'depth'         => 1
                ));
              ?>
            </div>
            <div class="footer__item">
              <h4 class="footer__item-title">
                <a class="footer__title-link" href="#">
                  Услуги
                </a>
              </h4>
              <?php
                wp_nav_menu(array(
                    'menu' => 'service',
                    'container'      => false,
                    'menu_class'     => 'footer__item-list',
                    'walker'         => new Footer_Menu_Walker(),
                    'depth'         => 1
                ));
              ?>
            </div>
          </div>
        </div>
        <div class="footer__menu-col footer__menu-center">
          <div class="footer__item">
            <h4 class="footer__item-title">
              <a class="footer__title-link" href="#">
                Направления
              </a>
            </h4>
            <?php
              wp_nav_menu(array(
                  'menu' => 'directions_1',
                  'container'      => false,
                  'menu_class'     => 'footer__item-list',
                  'walker'         => new Footer_Menu_Walker(),
                  'depth'         => 1
              ));
            ?>
          </div>
          <div class="footer__item footer-item-list">
            <?php
              wp_nav_menu(array(
                  'menu' => 'directions_2',
                  'container'      => false,
                  'menu_class'     => 'footer__item-list',
                  'walker'         => new Footer_Menu_Walker(),
                  'depth'         => 1
              ));
            ?>
          </div>
        </div>
        <div class="footer__menu-col">
          <div class="footer__items">
            <div class="footer__item">
              <h4 class="footer__item-title">
                <a class="footer__title-link" href="#">
                  О клинике
                </a>
              </h4>
              <?php
                wp_nav_menu(array(
                    'menu' => 'clinic',
                    'container'      => false,
                    'menu_class'     => 'footer__item-list',
                    'walker'         => new Footer_Menu_Walker(),
                    'depth'         => 1
                ));
              ?>
            </div>
            <div class="footer__item">
              <h4 class="footer__item-title">
                <a class="footer__title-link" href="#">
                  Документация
                </a>
              </h4>
              <?php
                wp_nav_menu(array(
                    'menu' => 'doc',
                    'container'      => false,
                    'menu_class'     => 'footer__item-list',
                    'walker'         => new Footer_Menu_Walker(),
                    'depth'         => 1
                ));
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__right">
        <a class="logo footer__logo" href="/">
          <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
        </a>
        <div class="social-block footer__social-block">
          <div class="social-block__left">
            <?php if(get_field('whatsapp', 'option')):?>
              <a class="social-block__link social-block__whatsapp" href="<?php the_field('whatsapp', 'option');?>">
                <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              </a>
            <?php endif; ?>
            <?php if(get_field('telegram', 'option')):?>
              <a class="social-block__link social-block__telegram" href="<?php the_field('telegram', 'option');?>">
                <?php include(get_template_directory() . '/assets/images/icons/telegram.svg'); ?>
              </a>
            <?php endif; ?>
          </div>
          <?php $phone = get_field('phone', 'option');
            $clean_phone = str_replace([' ', '(', ')', '-'], '', $phone);?>
          <a class="social-block__phone" href="tel:<?php echo $clean_phone; ?>">
            <?php echo $phone; ?>
          </a>
        </div>
        <a class="header__btn footer__callback change-popup" href="#callback-modal" data-fancybox>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/manager-btn.webp" alt="manager-btn">
          <span>Записаться</span>
        </a>
        <a class="footer__btn _main-btn change-popup" href="#questions-modal" data-fancybox>
          Задать вопрос
        </a>
      </div>
    </div>
    <div class="footer__bottom">
      <p class="footer__bottom-text">
        © Все права защищены. ООО «Ди-Мед»
      </p>
      <a class="footer__bottom-btn _gray-btn" href="#">
        ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ
      </a>
      <a class="footer__tfa" href="#" target="_blank">
        <?php include(get_template_directory() . '/assets/images/icons/tfa.svg'); ?>
        <span>Разработка сайта</span>
      </a>
    </div>
  </div>
</footer>

</div>

<?php get_template_part('template-parts/modals'); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>
