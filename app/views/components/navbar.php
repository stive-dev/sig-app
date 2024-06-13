<?php // define array $options ?>

<?php

$icons = [
  "/icons/dashboard.svg",
  "/icons/control.svg",
  "/icons/scale.svg",
  "/icons/inventory.svg",
  "/icons/analisis.svg",
  "/icons/out.svg",
  "/icons/motorista.svg",
  "/icons/truck.svg"
]

?>

<div class="navbar" style="top: 0px; position: sticky;">
  <div class="navbar__left">
    <img class="navbar__logo" alt="" src="<?php echo __URL__ . '/img/mor-logo.png'; ?>"/>
    
    <?php for($i = 0; $i < count($options); $i++): ?>
      <?php if($options[$i] == $active): ?>
        <a href="<?php echo $url[$i]; ?>" class="navbar__option navbar__option--active">
          <img alt="" src="<?= __URL__ ?><?= $icons[$i] ?>"/>
          <?= $options[$i] ?>
        </a>
      <?php else: ?>
        <a href="<?php echo $url[$i]; ?>" class="navbar__option">
          <img alt="" src="<?= __URL__ ?><?= $icons[$i] ?>"/>
          <?= $options[$i] ?>
        </a>
      <?php endif ?>
    <?php endfor ?>
    
  </div>
  <div class="navbar__right">
    <a href="<?= __URL__ ?>/login/out" class="navbar__option navbar__option--session"><img src="<?= __URL__ ?>/icons/logout.svg" />Cerrar Sesión</a>
  </div>
</div>

