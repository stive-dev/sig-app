<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
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
        <h2 class="title__2">Motoristas en el Sistema <?= count($motoristas) ?></h2>
      </div>
      <div class="header__content">
        <a href="<?php $url[$i] ?>" class="navbar__option navbar__option--active">Agregar Nuevo</a>
      </div>
    </div>

    <div class="table__container">
      <table class="table__content">
        <thead class="table__head">
          <th>Dui</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Controles</th>
        </thead>
        <tbody class="table__body">
          <?php $i = 0; ?>
          <?php foreach($motoristas as $motorista): ?>
            <?php if($i % 2 == 0): ?>
              <tr class="table__row">
                <td class="table__td"><?= $motorista->dui ?></td>
                <td class="table__td"><?= $motorista->nombres ?></td>
                <td class="table__td"><?= $motorista->apellidos ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php $url[$i] ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/motoristas/delete?dui=' . $motorista->dui; ?>" class="table__option table__option--delete">Borrar</a>
                </td>
              </tr>
            <?php else: ?>
              <tr class="table__row table__row--1">
                <td class="table__td"><?= $motorista->dui ?></td>
                <td class="table__td"><?= $motorista->nombres ?></td>
                <td class="table__td"><?= $motorista->apellidos ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php $url[$i] ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/motoristas/delete?dui=' . $motorista->dui; ?>" class="table__option table__option--delete">Borrar</a>
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
