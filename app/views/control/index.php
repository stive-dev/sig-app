<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
  </head>
  <body>

    
    <!-- TEMPLATE CODE -->
    <?php $active = "Control" ?>
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
        <h2 class="title__2">Controles en el Sistema <?= count($controles) ?></h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/controles/add'; ?>" class="navbar__option navbar__option--active">Agregar Nuevo</a>
      </div>
    </div>

    <div class="table__container">
      <table class="table__content">
        <thead class="table__head">
          <th>Id</th>
          <th>Materia</th>
          <th>Vehiculo</th>
          <th>Motorista</th>
          <th># Pesa</th>
          <th># Orden</th>
          <th>Ps Salida</th>
          <th>Mtv Salida</th>
          <th>Salida</th>
          <th>Ps Entrada</th>
          <th>Mtv Entrada</th>
          <th>Entrada</th>
          <th>Controles</th>
        </thead>
        <tbody class="table__body">
          <?php $i = 0; ?>
          <?php foreach($controles as $control): ?>
            <?php if($i % 2 == 0): ?>
              <tr class="table__row">
                <td class="table__td"><?= $control->id ?></td>
                <td class="table__td"><?= $control->id_materia_prima ?></td>
                <td class="table__td"><?= $control->placa_vehiculo ?></td>
                <td class="table__td"><?= $control->dui_motorista ?></td>
                <td class="table__td"><?= $control->numero_pesa ?></td>
                <td class="table__td"><?= $control->numero_orden ?></td>
                <td class="table__td"><?= $control->peso_salida ?></td>
                <td class="table__td"><?= $control->motivo_salida ?></td>
                <td class="table__td"><?= $control->fecha_salida ?></td>
                <td class="table__td"><?= $control->peso_entrada ?></td>
                <td class="table__td"><?= $control->motivo_entrada ?></td>
                <td class="table__td"><?= $control->fecha_entrada ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/controles/modify?id=' . $control->id; ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/controles/delete?id=' . $control->id; ?>" class="table__option table__option--delete">Borrar</a>
                </td>
              </tr>
            <?php else: ?>
              <tr class="table__row table__row--1">
                <td class="table__td"><?= $control->id ?></td>
                <td class="table__td"><?= $control->id_materia_prima ?></td>
                <td class="table__td"><?= $control->placa_vehiculo ?></td>
                <td class="table__td"><?= $control->dui_motorista ?></td>
                <td class="table__td"><?= $control->numero_pesa ?></td>
                <td class="table__td"><?= $control->numero_orden ?></td>
                <td class="table__td"><?= $control->peso_salida ?></td>
                <td class="table__td"><?= $control->motivo_salida ?></td>
                <td class="table__td"><?= $control->fecha_salida ?></td>
                <td class="table__td"><?= $control->peso_entrada ?></td>
                <td class="table__td"><?= $control->motivo_entrada ?></td>
                <td class="table__td"><?= $control->fecha_entrada ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/controles/modify?id=' . $control->id; ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/controles/delete?id=' . $control->id; ?>" class="table__option table__option--delete">Borrar</a>
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
