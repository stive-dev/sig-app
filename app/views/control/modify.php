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

    <div class="header">
      <div class="header__content">
        <h2 class="title__2">Modificar Control en Sistema</h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/controles'; ?>" class="navbar__option navbar__option--active">Regresar</a>
      </div>
    </div>

    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/controles/update'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Id</label>
          <input class="form__control" name="id" type="text" value="<?= $control->id ?>" placeholder="00000000-0"/> 
        </div>

        
        <div class="form__controls">
          <label class="form__label" for="">Materia Prima</label>
          <select class="form__control" id="" name="id_materia_prima">
            <?php foreach($materiasPrimas as $materiaPrima): ?>
              <?php if($materiaPrima->id == $materiaPrima_->id): ?>
                <option value="<?= $materiaPrima->id ?>" selected><?= $materiaPrima->id . ' - ' . $materiaPrima->tipo ?></option>
              <?php else: ?>
                <option value="<?= $materiaPrima->id ?>"><?= $materiaPrima->id . ' - ' . $materiaPrima->tipo ?></option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Placa Vehiculo</label>
          <select class="form__control" id="" name="placa_vehiculo">
            <?php foreach($vehiculos as $vehiculo): ?>
              <?php if($vehiculo->placa == $vehiculo_->placa): ?>
                <option value="<?= $vehiculo->placa ?>" selected><?= $vehiculo->placa . ' - ' . $vehiculo->tipo ?></option>
              <?php else: ?>
                <option value="<?= $vehiculo->placa ?>"><?= $vehiculo->placa . ' - ' . $vehiculo->tipo ?></option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Dui Motorista</label>
          <select class="form__control" id="" name="dui_motorista">
            <?php foreach($motoristas as $motorista): ?>
              <?php if($motorista->dui == $motorista_->dui): ?>
                <option value="<?= $motorista->dui ?>" selected><?= $motorista->dui . ' - ' . $motorista->nombres ?></option>
              <?php else: ?>
                <option value="<?= $motorista->dui ?>"><?= $motorista->dui . ' - ' . $motorista->nombres ?></option>
              <?php endif ?>
            <?php endforeach ?>
          </select>
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Número Pesa</label>
          <input class="form__control" name="numero_pesa" type="text" value="<?= $control->numero_pesa ?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Número Orden</label>
          <input class="form__control" name="numero_orden" type="text" value="<?= $control->numero_orden ?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Peso Salida</label>
          <input class="form__control" name="peso_salida" type="text" value="<?= $control->peso_salida ?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Motivo Salida</label>
          <input class="form__control" name="motivo_salida" type="text" value="<?= $control->motivo_salida ?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Fecha Salida</label>
          <input class="form__control" name="fecha_salida" type="date" value="<?= $control->fecha_salida ?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Peso Entrada</label>
          <input class="form__control" name="peso_entrada" type="text" value="<?= $control->peso_entrada ?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Motivo Entrada</label>
          <input class="form__control" name="motivo_entrada" type="text" value="<?= $control->motivo_entrada?>" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Fecha Entrada</label>
          <input class="form__control" name="fecha_entrada" type="date" value="<?= $control->fecha_entrada ?>" placeholder="00000000-0"/> 
        </div>

        
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Agregar"/>
        </div>
      </form>
    </div>
  </body>
</html>
