<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
  </head>
  <body>

    
    <!-- TEMPLATE CODE -->
    <?php $active = "Análisis de inventario" ?>
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
        <h2 class="title__2">Analisis de Materias Primas en el Sistema <?= count($materiasPrimasAnalisis) ?></h2>
      </div>
      <div class="header__content">
        <a href="<?php echo __URL__ . '/materias_primas_analisis/add'; ?>" class="navbar__option navbar__option--active">Agregar Nuevo</a>
      </div>
    </div>

    <div class="table__container">
      <table class="table__content">
        <thead class="table__head">
          <th>Id</th>
          <th>Lote</th>
          <th>Materia Prima</th>
          <th>Cantidad de Muestra</th>
          <th>% Humedad</th>
          <th>% Impureza</th>
          <th>% # Pesa</th>
          <th>Tamiz 1</th>
          <th>Tamiz 2</th>
          <th>Tamiz 3</th>
          <th>Tamiz 4</th>
          <th>Estado</th>
          <th>Controles</th>
        </thead>
        <tbody class="table__body">
          <?php $i = 0; ?>
          <?php foreach($materiasPrimasAnalisis as $materiaPrimaAnalisis): ?>
            <?php if($i % 2 == 0): ?>
              <tr class="table__row">
                <td class="table__td"><?= $materiaPrimaAnalisis->id ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->lote ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->id_materia_prima ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->cantidad_muestra ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->humedad ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->impureza ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->numero_pesa ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_1 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_2 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_3 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_4 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->estado ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/materias_primas_analisis/modify?id=' . $materiaPrimaAnalisis->id; ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/materias_primas_analisis/delete?id=' . $materiaPrimaAnalisis->id; ?>" class="table__option table__option--delete">Borrar</a>
                </td>
              </tr>
            <?php else: ?>
              <tr class="table__row table__row--1">
                <td class="table__td"><?= $materiaPrimaAnalisis->id ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->lote ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->id_materia_prima ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->cantidad_muestra ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->humedad ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->impureza ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->numero_pesa ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_1 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_2 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_3 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->tamiz_4 ?></td>
                <td class="table__td"><?= $materiaPrimaAnalisis->estado ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/materias_primas_analisis/modify?id=' . $materiaPrimaAnalisis->id; ?>" class="table__option table__option--modify">Modificar</a>
                  <a href="<?php echo __URL__ . '/materias_primas_analisis/delete?id=' . $materiaPrimaAnalisis->id; ?>" class="table__option table__option--delete">Borrar</a>
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
