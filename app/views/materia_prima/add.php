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
    <?php $active = "Inventario" ?>
    <?php $options = [
      "Dashboard",
      "Control",
      "Inventario",
      "Análisis de inventario",
      "Motivos",
      "Motoristas",
      "Motivos"
    ] ?>
    <?php $url = [
      "#",
      "#",
      "#",
      "# de inventario",
      "#",
      __URL__ . "/materias_primas",
      "#"
    ] ?>
    <?php require_once __ROOT_PATH__ . "/app/views/components/navbar.php" ?>
    <!-- TEMPLATE CODE -->

    <div class="header">
      <div class="header__content">
        <h2 class="title__2">Agregar Materia Prima al Sistema</h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/materias_primas'; ?>" class="navbar__option navbar__option--active">Regresar</a>
      </div>
    </div>

    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/materias_primas/insert'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Id</label>
          <input class="form__control" name="id" type="text" value="0" placeholder="00000000-0"/> 
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Tipo</label>
          <input class="form__control" name="tipo" type="text" value=""/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Proveedor</label>
          <input class="form__control" name="proveedor" type="text" value=""/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Descripción</label>
          <input class="form__control" name="descripcion" type="text" value=""/>
        </div>
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Agregar"/>
        </div>
      </form>
    </div>
  </body>
</html>
