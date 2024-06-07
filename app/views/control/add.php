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
    <?php $active = "Controles" ?>
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
      __URL__ . "/controles",
      "#"
    ] ?>
    <?php require_once __ROOT_PATH__ . "/app/views/components/navbar.php" ?>
    <!-- TEMPLATE CODE -->

    <div class="header">
      <div class="header__content">
        <h2 class="title__2">Agregar Control al Sistema</h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/controles'; ?>" class="navbar__option navbar__option--active">Regresar</a>
      </div>
    </div>

    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/controles/insert'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Id</label>
          <input class="form__control" name="id" type="text" value="0" placeholder="00000000-0"/> 
        </div>

        
        <div class="form__controls">
          <label class="form__label" for="">Materia Prima</label>
          <select class="form__control" id="" name="id_materia_prima">
            <?php foreach($materiasPrimas as $materiaPrima): ?>
              <option value="<?= $materiaPrima->id ?>"><?= $materiaPrima->id . ' - ' . $materiaPrima->tipo ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Placa Vehiculo</label>
          <select class="form__control" id="" name="placa_vehiculo">
            <?php foreach($vehiculos as $vehiculo): ?>
              <option value="<?= $vehiculo->placa ?>"><?= $vehiculo->placa . ' - ' . $vehiculo->tipo ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Dui Motorista</label>
          <select class="form__control" id="" name="dui_motorista">
            <?php foreach($motoristas as $motorista): ?>
              <option value="<?= $motorista->dui ?>"><?= $motorista->dui . ' - ' . $motorista->nombres ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Número Pesa</label>
          <input class="form__control" name="numero_pesa" type="text" value="0" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Número Orden</label>
          <input class="form__control" name="numero_orden" type="text" value="" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Peso Salida</label>
          <input class="form__control" name="peso_salida" type="text" value="" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Motivo Salida</label>
          <input class="form__control" name="motivo_salida" type="text" value="" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Fecha Salida</label>
          <input class="form__control" name="fecha_salida" type="date" value="" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Peso Entrada</label>
          <input class="form__control" name="peso_entrada" type="text" value="" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Motivo Entrada</label>
          <input class="form__control" name="motivo_entrada" type="text" value="" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Fecha Entrada</label>
          <input class="form__control" name="fecha_entrada" type="date" value="" placeholder="00000000-0"/> 
        </div>

        
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Agregar"/>
        </div>
      </form>
    </div>
  </body>
</html>
