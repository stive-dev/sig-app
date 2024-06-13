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
      "Pesado",
      "Inventario",
      "Análisis de inventario",
      "Motivos",
      "Motoristas",
      "Vehiculos"
    ] ?>
    <?php $url = [
      __URL__ . "/dashboard",
      __URL__ . "/controles",
      __URL__ . "/pesos",
      __URL__ . "/materias_primas",
      __URL__ . "/materias_primas_analisis",
      __URL__ . "/motivos",
      __URL__ . "/motoristas",
      __URL__ . "/vehiculos"
    ] ?>
    
    <?php require_once __ROOT_PATH__ . "/app/views/components/navbar.php" ?>
    <!-- TEMPLATE CODE -->
    <div style="padding: 20px; color: #ffffff;">
      <div style="display: flex; gap: 20px; width: 100%; padding-bottom: 0px;">
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px; justify-content: space-between;">
          <div><h2>MODIFICAR MOTORISTA EN EL SISTEMA</h2></div>
          <div>
            <div class="">
              <a href="<?php echo __URL__ . '/motoristas'; ?>" class="navbar__option navbar__option--active">Volver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/motoristas/update'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Dui</label>
          <input class="form__control" name="dui" type="text" value="<?= $motorista->dui ?>" placeholder="00000000-0" style="pointer-events:none;" />
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Nombres</label>
          <input class="form__control" name="nombres" type="text" value="<?= $motorista->nombres ?>"/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Apellidos</label>
          <input class="form__control" name="apellidos" type="text" value="<?= $motorista->apellidos ?>"/>
        </div>
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Guardar Cambios"/>
        </div>
      </form>
    </div>
  </body>
</html>
