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
    <?php $active = "Vehiculos" ?>
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
      __URL__ . "/dashboard",
      __URL__ . "/controles",
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
          <div><h2>MODIFICAR VEHICULOS EN EL SISTEMA</h2></div>
          <div>
            <div class="">
              <a href="<?php echo __URL__ . '/vehiculos'; ?>" class="navbar__option navbar__option--active">Volver</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/vehiculos/update'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Placa</label>
          <input class="form__control" name="placa" type="text" value="<?= $vehiculo->placa ?>" placeholder="00000" style="pointer-events:none;" />
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Tipo</label>
          <input class="form__control" name="tipo" type="text" value="<?= $vehiculo->tipo ?>"/>
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Activo</label>
          <!-- <input class="form__control" name="activo" type="text" value="<?= $vehiculo->activo ?>"/> -->
          <?php if($vehiculo->activo): ?>
            <div>
              <input name="activo" type="radio" value="1" checked/>
              <label class="form__label" for="">Si</label>
            </div>
            <div>
              <input class="" name="activo" type="radio" value="0"/>
              <label class="form__label" for="">No</label>
            </div>
          <?php else: ?>
            <div>
              <input name="activo" type="radio" value="1"/>
              <label class="form__label" for="">Si</label>
            </div>
            <div>
              <input class="" name="activo" type="radio" value="0" checked/>
              <label class="form__label" for="">No</label>
            </div>
          <?php endif ?>
          
        </div>
        <div class="form__controls">
          <label class="form__label" for="">Capacidad</label>
          <input class="form__control" name="capacidad" type="text" value="<?= $vehiculo->capacidad ?>"/>
        </div>
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Guardar Cambios"/>
        </div>
      </form>
    </div>
  </body>
</html>
