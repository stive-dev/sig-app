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
    <?php $active = "Análisis de inventario" ?>
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
          <div><h2>AGREGAR ANALISIS AL SISTEMA</h2></div>
          <div>
            <div class="">
              <a href="<?php echo __URL__ . '/materias_primas_analisis'; ?>" class="navbar__option navbar__option--active">Volver</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="form__container">
      <form class="form__content" action="<?php echo __URL__ . '/materias_primas_analisis/insert'; ?>" method="POST">
        <div class="form__controls">
          <label class="form__label" for="">Id</label>
          <input class="form__control" name="id" type="text" value="0" placeholder="00000000-0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Lote</label>
          <input class="form__control" name="lote" type="text" value="" placeholder="00000000-0"/> 
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
          <label class="form__label" for="">Cantidad Muestra</label>
          <input class="form__control" name="cantidad_muestra" type="text" value="" placeholder="0"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">% Humedad</label>
          <input class="form__control" name="humedad" type="text" value="" placeholder="0.00"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">% Impureza</label>
          <input class="form__control" name="impureza" type="text" value="" placeholder="0.00"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Número Pesa</label>
          <input class="form__control" name="numero_pesa" type="text" value="" placeholder=""/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Tamiz 1</label>
          <input class="form__control" name="tamiz_1" type="text" value="" placeholder="0.00"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Tamiz 2</label>
          <input class="form__control" name="tamiz_2" type="text" value="" placeholder="0.00"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Tamiz 3</label>
          <input class="form__control" name="tamiz_3" type="text" value="" placeholder="0.00"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Tamiz 4</label>
          <input class="form__control" name="tamiz_4" type="text" value="" placeholder="0.00"/> 
        </div>

        <div class="form__controls">
          <label class="form__label" for="">Estado</label>
          <!-- <input class="form__control" name="estado" type="text" value="" placeholder="00000000-0"/> -->
          <select class="form__control" id="" name="estado">
            <option value="Aprobado">Aprobado</option>
            <option value="No Aprobado">No Aprobado</option>
          </select>
        </div>
        

        
        <div class="form__divisor"></div>
        <div class="form__controls">
          <input class="form__control form__control-button" name="" type="submit" value="Agregar"/>
        </div>
      </form>
    </div>
  </body>
</html>
