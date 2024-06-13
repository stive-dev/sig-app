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
    <?php $active = "Pesado" ?>
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


    <div style="padding: 20px; padding-bottom: 0px; color: #ffffff;">
      <div style="display: flex; gap: 20px; width: 100%; padding-bottom: 0px;">
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px; justify-content: space-between;">
          <div><h2>PESADOS EN EL SISTEMA</h2></div>
          <div>
            <form class="" style="display: flex; gap: 20px; align-items: center;">
              <div class="">
                <h3 class="">Filtro</h3>
              </div>
              <div class="">
                <select class="form__control" id="" name="filtro">
                  <?php if($_GET["filtro"] == ""): ?>
                    <option value="" selected> - </option>
                    <option value="dentro">Dentro</option>
                    <option value="fuera">Fuera</option>
                  <?php elseif($_GET["filtro"] == "dentro"): ?>
                    <option value="" > - </option>
                    <option value="dentro" selected>Dentro</option>
                    <option value="fuera">Fuera</option>
                  <?php elseif($_GET["filtro"] == "fuera"): ?>
                    <option value="" > - </option>
                    <option value="dentro" >Dentro</option>
                    <option value="fuera" selected>Fuera</option>
                  <?php endif ?>
                  
                </select>
              </div>
              <div class="">
                <input class="navbar__option navbar__option--active" style="border: 0px; height: 42px; font-size: 16px" name="" type="submit" value="Filtrar"/>
                
              </div>
              <div class="">
                <a href="<?php echo __URL__ . '/controles/add'; ?>" class="navbar__option navbar__option--active">Agregar Nuevo</a>
              </div>
            </form>
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
          <th>Id</th>
          <th>Vehiculo</th>
          <th>Motorista</th>
          <th># Pesa</th>
          <th>Ps Salida</th>
          <th>Salida</th>
          <th>Controles</th>
        </thead>
        <tbody class="table__body">
          <?php $i = 0; ?>
          <?php foreach($controles as $control): ?>
            <?php if($i % 2 == 0): ?>
              <tr class="table__row">
                <td class="table__td"><?= $control->id ?></td>
                <td class="table__td"><?= $control->placa_vehiculo ?></td>
                <td class="table__td"><?= $control->dui_motorista ?></td>
                <td class="table__td"><?= $control->numero_pesa ?></td>
                <td class="table__td"><?= $control->peso_salida ?></td>
                <td class="table__td"><?= $control->fecha_salida ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/pesos/modify?id=' . $control->id; ?>" class="table__option table__option--modify"><img src="<?= __URL__ ?>/icons/edit.svg" /></a>
                  <a href="<?php echo __URL__ . '/pesos/delete?id=' . $control->id; ?>" class="table__option table__option--delete"><img src="<?= __URL__ ?>/icons/delete.svg" /></a>
                </td>
              </tr>
            <?php else: ?>
              <tr class="table__row table__row--1">
                <td class="table__td"><?= $control->id ?></td>
                <td class="table__td"><?= $control->placa_vehiculo ?></td>
                <td class="table__td"><?= $control->dui_motorista ?></td>
                <td class="table__td"><?= $control->numero_pesa ?></td>
                <td class="table__td"><?= $control->peso_salida ?></td>
                <td class="table__td"><?= $control->fecha_salida ?></td>
                <td class="table__td table__td--options">
                  <a href="<?php echo __URL__ . '/pesos/modify?id=' . $control->id; ?>" class="table__option table__option--modify"><img src="<?= __URL__ ?>/icons/edit.svg" /></a>
                  <a href="<?php echo __URL__ . '/pesos/delete?id=' . $control->id; ?>" class="table__option table__option--delete"><img src="<?= __URL__ ?>/icons/delete.svg" /></a>
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
