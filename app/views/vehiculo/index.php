<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
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
    <div style="padding: 20px; padding-bottom: 0px; color: #ffffff;">
      <div style="display: flex; gap: 20px; width: 100%; padding-bottom: 0px;">
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px; justify-content: space-between;">
          <div><h2>VEHICULOS EN EL SISTEMA</h2></div>
          <div>
            <div class="">
              <a href="<?php echo __URL__ . '/vehiculos/add'; ?>" class="navbar__option navbar__option--active">Agregar Nuevo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="header">
      <?php if(isset($_GET["error"])): ?>
        <div class="error">Ha ocurrido un error. Vuelve a intentarlo</div>
      <?php endif ?>
    </div>

    <div class="table__container">
      <table class="table__content">
        <thead class="table__head">
          <th>Placa</th>
          <th>Tipo</th>
          <th>Activo</th>
          <th>Capacidad</th>
          <th>Controles</th>
        </thead>
        <tbody class="table__body">
          <?php $i = 0; ?>
          <?php foreach($vehiculos as $vehiculo): ?>
            <?php if($i % 2 == 0): ?>
              <tr class="table__row">
                <td class="table__td"><?= $vehiculo->placa ?></td>
                <td class="table__td"><?= $vehiculo->tipo ?></td>
                <td class="table__td"><?= $vehiculo->activo ?></td>
                <td class="table__td"><?= $vehiculo->capacidad ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/vehiculos/modify?placa=' . $vehiculo->placa; ?>" class="table__option table__option--modify"><img src="<?= __URL__ ?>/icons/edit.svg" /></a>
                  <a href="<?php echo __URL__ . '/vehiculos/delete?placa=' . $vehiculo->placa; ?>" class="table__option table__option--delete"><img src="<?= __URL__ ?>/icons/delete.svg" /></a>
                </td>
              </tr>
            <?php else: ?>
              <tr class="table__row table__row--1">
                <td class="table__td"><?= $vehiculo->placa ?></td>
                <td class="table__td"><?= $vehiculo->tipo ?></td>
                <td class="table__td"><?= $vehiculo->activo ?></td>
                <td class="table__td"><?= $vehiculo->capacidad ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/vehiculos/modify?placa=' . $vehiculo->placa; ?>" class="table__option table__option--modify"><img src="<?= __URL__ ?>/icons/edit.svg" /></a>
                  <a href="<?php echo __URL__ . '/vehiculos/delete?placa=' . $vehiculo->placa; ?>" class="table__option table__option--delete"><img src="<?= __URL__ ?>/icons/delete.svg" /></a>
                </td>
              </tr>
            <?php endif ?>
            <?php $i++; ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
