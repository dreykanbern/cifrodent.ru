<?php include_once('partials/header.php') ?>

<main>
  <section id="vacancy">
    <div class="container">
      <div class="vacancy">
        <div class="row align-items-center">
          <div class="col-12 col-md-4 offset-md-1">
            <div class="vacancy__content">
              <h1 class="vacancy__title page__title page__title--mobile-big">Вакантные места <br> в Цифроденте</h1>
              <p class="vacancy__description page__description">
                Работай на современном оборудовании,
                <br>
                обменивайся опытом и совершенствуй свои
                <br>
                навыки
              </p>
              <button class="button button-primary">Отправить резюме</button>
            </div>
            <!-- /.vacancy__content -->
          </div>
          <!-- /.col-4 offset-1 -->

          <div class="col-7">
            <picture class="vacancy__picture">
              <source srcset="img/pages/vacancy/vacancy/image.webp" type="image/webp">
              <img src="img/pages/vacancy/vacancy/image.jpg" alt="" class="vacancy__image">
            </picture>
          </div>
          <!-- /.col-7 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.vacancy -->
    </div>
    <!-- /.container -->
  </section>

  <section id="job" class="section">
    <div class="container">
      <div class="job">
        <div class="job__item" data-aos="fade-right" data-aos-offset="250">
          <div class="row align-items-xl-center">
            <div class="col-12 col-md-6">
              <div class="job__picture">
                <img src="img/pages/vacancy/job/photo.jpg" alt="" class="job__image">
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6">
              <div class="job__content">
                <h2 class="job__title">Название вакансии</h2>
                <dl class="job__list list list--description">
                  <dt class="list__title">Требования:</dt>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                </dl>

                <dl class="job__list list list--description">
                  <dt class="list__title">Условия:</dt>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                </dl>

                <div class="job__pay"><strong>ЗП:</strong> 10 000</div>
                <button class="job__button button button-outline" data-modal-target="vacancy">Отправить резюме</button>
              </div>
              <!-- /.job__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.job__item -->

        <div class="job__item" data-aos="fade-right" data-aos-offset="250">
          <div class="row align-items-xl-center">
            <div class="col-12 col-md-6">
              <div class="job__picture">
                <img src="img/pages/vacancy/job/photo.jpg" alt="" class="job__image">
              </div>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6">
              <div class="job__content">
                <h2 class="job__title">Название вакансии</h2>
                <dl class="job__list list list--description">
                  <dt class="list__title">Требования:</dt>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                </dl>

                <dl class="job__list list list--description">
                  <dt class="list__title">Условия:</dt>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                  <dd class="list__item">Описание</dd>
                </dl>

                <div class="job__pay"><strong>ЗП:</strong> 10 000</div>
                <button class="job__button button button-outline" data-modal-target="vacancy">Отправить резюме</button>
              </div>
              <!-- /.job__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.job__item -->
      </div>
      <!-- /.job -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('partials/footer.php') ?>