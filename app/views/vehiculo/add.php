<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
    <link href="<?php echo __URL__ . '/css/form/style.css'; ?>" rel="stylesheet"/>
  </head>
  <body>

    
    <!-- TEMPLATE CODE -->
    <?php $active = "Motoristas" ?>
    <?php $options = [
      "Dashboard",
      "Control",
      "Inventario",
      "Análisis de inventario",
      "Motivos",
      "Motoristas",
      "Vehiculos"
    ] ?>
    <?php $url = [
      "#",
      "#",
      "#",
      "# de inventario",
      "#",
      __URL__ . "/motoristas",
      "#"
    ] ?>
    <?php require_once __ROOT_PATH__ . "/app/views/components/navbar.php" ?>
    <!-- TEMPLATE CODE -->

    <div class="header">
      <div class="header__content">
        <h2 class="title__2">Agregar Motorista al Sistema</h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/motoristas'; ?>" class="navbar__option navbar__option--active">Regresar</a>
      </div>
    </div>

    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/vehiculos/insert'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Placa</label>
          <input class="form__control" name="placa" type="text" value="" placeholder="00000000-0"/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Tipo</label>
          <input class="form__control" name="tipo" type="text" value=""/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Activo</label>
          <input class="form__control" name="activo" type="text" value=""/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Capacidad</label>
          <input class="form__control" name="capacidad" type="text" value=""/>
        </div>
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Agregar"/>
        </div>
      </form>
    </div>
  </body>
</html>
