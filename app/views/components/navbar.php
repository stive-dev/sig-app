<?php // define array $options ?>

<div class="navbar">
  <div class="navbar__left">
    <img class="navbar__logo" alt="" src="<?php echo __URL__ . '/img/mor-logo.png'; ?>"/>
    
    <?php for($i = 0; $i < count($options); $i++): ?>
      <?php if($options[$i] == $active): ?>
        <a href="<?php echo $url[$i]; ?>" class="navbar__option navbar__option--active">
          <?= $options[$i] ?>
        </a>
      <?php else: ?>
        <a href="<?php echo $url[$i]; ?>" class="navbar__option">
          <?= $options[$i] ?>
        </a>
      <?php endif ?>
    <?php endfor ?>
    
  </div>
  <div class="navbar__right">
    <a href="<?= __URL__ ?>/login/out" class="navbar__option navbar__option--session">Cerrar Sesión</a>
  </div>
</div>
