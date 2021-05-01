<?php require 'inc/head.php'; ?>
<?php require_once 'inc/data/products.php'; ?>
<?php
if (!isset($_SESSION['loginname'])) {
    header('LOCATION: /login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
      <?php foreach ($_SESSION['cookies'] as $cookiesId): ?>
      <li>
          <?= $catalog[$cookiesId]['name'] ?>
          <br>
          <?= $catalog[$cookiesId]['description'] ?>
      </li>
      <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
