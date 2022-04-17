<section id="callback" class="section">
  <div class="container">
    <div class="callback">
      <div class="row align-items-center position-relative">
        <div class="col-12 col-lg-6">
          <div class="callback__content">
            <h2 class="callback__title section__title section__title--mobile-big">Остались вопросы? <br> Напишите нам</h2>
            <form action="" class="callback__form form" data-target="callback">
              <div class="input mb-3">
                <input data-required type="text" class="input__field" name="user_name" placeholder="Ваше Имя">
                <img data-tippy-content="Вы ошиблись при вводе имени" class="input__warning" src="img/icons/warning.svg" alt="">
              </div>
              <!-- /.input -->

              <div class="input mb-3">
                <input data-required type="tel" class="input__field" name="user_phone" placeholder="Номер телефона">
                <img data-tippy-content="Номер телефон указан не верно" class="input__warning" src="img/icons/warning.svg" alt="">
              </div>
              <!-- /.input -->

              <div class="input mb-3">
                <textarea type="text" class="input__field input__field--box" name="user_message" placeholder="Ваш вопрос"></textarea>
                <img data-tippy-content="Вопрос должен содержать больше 6 символов." class="input__warning" src="img/icons/warning.svg" alt="">
              </div>
              <!-- /.input -->

              <div class="form__action">
                <button type="submit" class="form__button callback__button button button-outline" data-sending="Отправляем...">Отправить</button>
                <img class="form__loader preloader--mini" src="img/loader.svg" alt="">
              </div>
              <!-- /.form__action -->
            </form>
          </div>
          <!-- /.callback__content -->
        </div>
        <!-- /.col-6 -->

        <div data-aos="fade-right" class="col-6">
          <picture class="callback__picture">
            <source srcset="/" media="(max-width: 992px)">
            <source srcset="img/pages/main/callback/photo.webp" type="image/webp">
            <img class="callback__image" src="img/pages/main/callback/photo.jpg" alt="">
          </picture>
        </div>
        <!-- /.col-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.callback -->
  </div>
  <!-- /.container -->
</section>