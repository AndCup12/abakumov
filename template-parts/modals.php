<div id="politics" style="display: none;" class="politics-modal fancybox__content">
  <div class="modal__container">
    <h3 class="politics-modal__title">Политика конфиденциальности</h3>
    <div class="politics-modal__text">
      <p>
        Администрация данного Сайта не&nbsp;может передать или раскрыть информацию предоставленную пользователем
        (далее Пользователь) при регистрации и&nbsp;использовании функций сайта третьим лицам, кроме случаев,
        описанных законодательством страны, на&nbsp;территории которой пользователь ведет свою деятельность.
      </p>
      <p>
        Для регистрации на&nbsp;сайте, пользователь обязан внести некоторую персональную информацию. Для проверки
        предоставленных данных, сайт оставляет за&nbsp;собой право потребовать доказательства идентичности
        в&nbsp;онлайн или офлайн режимах.
      </p>
      <p>
        Сайт использует личную информацию Пользователя для обслуживания и&nbsp;для улучшения качества
        предоставляемых услуг. Часть персональной информации может быть предоставлена банку или платежной системе,
        в&nbsp;случае, если предоставление этой информации обусловлено процедурой перевода средств платежной
        системе, услугами которой Пользователь желает воспользоваться.
      </p>
      <p>
        Сайт прилагает все усилия для сбережения в&nbsp;сохранности личных данных Пользователя.
        Личная информация может быть раскрыта в&nbsp;случаях, описанных законодательством, либо
        когда администрация сочтет подобные действия необходимыми для соблюдения юридической процедуры, судебного
        распоряжения или легального процесса необходимого для работы Пользователя с&nbsp;Сайтом.
      </p>
      <p>
        В&nbsp;других случаях, ни&nbsp;при каких условиях, информация, которую Пользователь передает Сайту,
        не&nbsp;будет раскрыта третьим лицам.
      </p>
    </div>
  </div>
</div>


<div class="modal" style="display: none;" id="callback-modal">
  <form class="callback__form form-submit relative" action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="from" value="Записаться на консультацию">
    <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
    <h2 class="callback__form-title">
      Заполните форму
    </h2>
    <p class="callback__form-subtitle">
      Введите телефон в форме ниже
    </p>
    <div class="callback__form-inputs">
      <input class="callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
      <button class="callback__form-btn _gray-btn form-btn">
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
<div class="modal" style="display: none;" id="questions-modal">
  <form class="callback__form form-submit relative" action="#" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="from" value="Записаться на консультацию">
    <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
    <h2 class="callback__form-title">
      Заполните форму
    </h2>
    <p class="callback__form-subtitle">
      Введите телефон в форме ниже
    </p>
    <div class="callback__form-inputs">
      <input class="callback__form-inp _input" type="tel" name="phone" placeholder="Введите номер телефона" required>
      <textarea class="callback__form-textarea _input" name="question" placeholder="Задайте вопрос"></textarea>
      <button class="callback__form-btn _gray-btn form-btn">
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