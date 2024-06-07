<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
  </head>
  <body>

    
    <!-- TEMPLATE CODE -->
    <?php $active = "Motivos" ?>
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
      "#",
      "#",
      "#",
      __URL__ . "/vehiculos"
    ] ?>
    
    <?php require_once __ROOT_PATH__ . "/app/views/components/navbar.php" ?>
    <!-- TEMPLATE CODE -->

    
    <div class="header">
      <div class="header__content">
        <h2 class="title__2">Motivos en el Sistema <?= count($motivos) ?></h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/motivos/add'; ?>" class="navbar__option navbar__option--active">Agregar Nuevo</a>
      </div>
    </div>

    <div class="table__container">
      <table class="table__content">
        <thead class="table__head">
          <th>Id</th>
          <th>Motivo</th>
          <th>Controles</th>
        </thead>
        <tbody class="table__body">
          <?php $i = 0; ?>
          <?php foreach($motivos as $motivo): ?>
            <?php if($i % 2 == 0): ?>
              <tr class="table__row">
                <td class="table__td"><?= $motivo->id ?></td>
                <td class="table__td"><?= $motivo->motivo ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/motivos/modify?id=' . $motivo->id; ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/motivos/delete?id=' . $motivo->id; ?>" class="table__option table__option--delete">Borrar</a>
                </td>
              </tr>
            <?php else: ?>
              <tr class="table__row table__row--1">
                <td class="table__td"><?= $vehiculo->id ?></td>
                <td class="table__td"><?= $vehiculo->motivo ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/motivos/modify?id=' . $motivo->id; ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/motivos/delete?id=' . $motivo->id; ?>" class="table__option table__option--delete">Borrar</a>
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
