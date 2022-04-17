<?php include_once('partials/header.php') ?>

<main>
  <section id="not-found" class="section">
    <div class="container">
      <div class="not-found">
        <h1 class="not-found__title page__title">ОоооооЙ!</h1>

        <picture class="not-found__picture">
          <source srcset="img/pages/404/foreground.webp" type="image/webp">
          <img src="img/pages/404/foreground.png" alt="" class="not-found__image">
        </picture>

        <div class="not-found__wrapper">
          <h2 class="not-found__subtitle">Этой страницы не существует или она в разработке c:</h2>
          <button class="not-found__button button button-primary">Вернуться на главную</button>
        </div>
        <!-- /.not-found__wrapper -->
      </div>
      <!-- /.not-found -->
    </div>
    <!-- /.container -->
  </section>
</main>

<?php include_once('partials/footer.php') ?>