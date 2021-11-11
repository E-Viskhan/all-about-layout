<?php @include('modules/header.php') ?>
<?php http_response_code(404); ?>

<div class="container error-404">
  <span class="error-404__number">404</span>
  <span class="error-404__not-find">страница не найдена</span>
  <p class="error-404__text">страница, на которую вы пытаетесь<br> попасть, не существует или была удалена.<br> Перейдите, на <a href="/index.php" class="error-404__main-link">Главную страницу</a></p>
</div>
<!-- /.container -->
<?php @include('modules/footer.php') ?>