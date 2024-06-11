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
    <?php $active = "Dashboard" ?>
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
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px;">
          <h2>DASHBOARD</h2>
        </div>
      </div>
    </div>

    <div style="padding: 20px;">
      <div style="display: flex; gap: 20px; width: 100%;">
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px;">
          <img alt="" src="<?= __URL__ ?>/icons/truck.svg" style="padding: 15px; background-color: #3440eb; border-radius: 100px;" />
          <div style="display: flex; flex-direction: column; color:#ffffff;">
            <div style="display: flex; gap: 20px; align-items: center;">
              <span style="font-size: 30px; font-weight: bold;"><?= count($vehiculos)?></span>
              <span>Vehiculos</span>
            </div>
            <div style="color: #9CA3AF">
              Vehiculos registrados
            </div>
          </div>
        </div>

        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px;">
          <img alt="" src="<?= __URL__ ?>/icons/motorista.svg" style="padding: 15px; background-color: #eb3461; border-radius: 100px;" />
          <div style="display: flex; flex-direction: column; color:#ffffff;">
            <div style="display: flex; gap: 20px; align-items: center;">
              <span style="font-size: 30px; font-weight: bold;"><?= count($motoristas)?></span>
              <span>Motoristas</span>
            </div>
            <div style="color: #9CA3AF">
              Motoristas registrados
            </div>
          </div>
        </div>

        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px;">
          <img alt="" src="<?= __URL__ ?>/icons/inventory.svg" style="padding: 15px; background-color: #249c44; border-radius: 100px;" />
          <div style="display: flex; flex-direction: column; color:#ffffff;">
            <div style="display: flex; gap: 20px; align-items: center;">
              <span style="font-size: 30px; font-weight: bold;"><?= count($materiasPrimas)?></span>
              <span>Materias Primas</span>
            </div>
            <div style="color: #9CA3AF">
              Materias Primas registrados
            </div>
          </div>
        </div>

        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 30%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px;">
          <img alt="" src="<?= __URL__ ?>/icons/analisis.svg" style="padding: 15px; background-color: #d3be24; border-radius: 100px;" />
          <div style="display: flex; flex-direction: column; color:#ffffff;">
            <div style="display: flex; gap: 20px; align-items: center;">
              <span style="font-size: 30px; font-weight: bold;"><?= count($materiasPrimasAnalisis)?></span>
              <span>Analisis</span>
            </div>
            <div style="color: #9CA3AF">
              Analisis registrados
            </div>
          </div>
        </div>

      </div>
    </div>



    <div style="padding: 20px; padding-top: 0px;">
      <div style="display: flex; gap: 20px; width: 100%;">
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 40%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px;">
          <canvas id="myChart"></canvas>
        </div>
        <div style="border-radius: 10px; padding: 10px; box-sizing: border-box; flex-basis: 60%; flex-grow: 1; background-color: #313348; display: flex; align-items: center; gap: 20px; flex-direction: column; align-items: end;">
          <div class="">
            <form class="header__content" action="<?= __URL__ ?>/reporte_calidad" method="GET">
              <h3 class="title__2">Generar Reporte de Calidad</h3>
              <div style="margin-right: 30px;">
                <select class="form__control" id="" name="estado">
                  <option value="Aprobado" selected>Aprobado</option>
                  <option value="No Aprobado">No Aprobado</option>
                </select>
              </div>
              <div class="form__controls">
                <input class="form__control form__control-button" name="" type="submit" value="Exportar"/>
              </div>
            </form>
          </div>
    
          <div class="">
            <form class="header__content" action="<?= __URL__ ?>/reporte_peso" method="GET">
              <h3 class="title__2">Generar Reporte de Peso de Materia Prima</h3>
              <div style="margin-right: 30px;">
                <input class="form__control" id="" name="fecha" type="date">
              </div>
              <div class="form__controls">
                <input class="form__control form__control-button" name="" type="submit" value="Exportar"/>
              </div>
            </form>
          </div>

          <div class="">
            <form class="header__content" action="<?= __URL__ ?>/reporte_control" method="GET">
              <h3 class="title__2">Generar Reporte de Control de Salidas</h3>
              <div style="margin-right: 30px;">
                <input class="form__control" id="" name="fecha" type="date">
              </div>
              <div class="form__controls">
                <input class="form__control form__control-button" name="" type="submit" value="Exportar"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    

    
    

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
     const motivos = <?= json_encode($motivosConteo) ?>;
     console.log(motivos)
     let motivo_titulo = []
     let motivo_value = []
     motivos.forEach(motivo => {
       motivo_titulo.push(motivo.motivo_salida)
       motivo_value.push(motivo.motivo_count)
     })

     const ctx = document.getElementById('myChart');
     new Chart(ctx, {
       type: 'bar',
       data: {
         labels: motivo_titulo,
         datasets: [{
           label: 'Recuento de Motivos de Salida',
           data: motivo_value,
           borderWidth: 1
         }]
       },
       options: {
         scales: {
           y: {
             beginAtZero: true
           }
         },
         plugins: {
           title: {
             color: '#ffffff'
           },
           subtitle: {
             color: '#ffffff'
           },
           legend: {
                display: true,
                labels: {
                  color: '#ffffff'
                }
           }
         }
       }
     });
    </script>
  </body>
</html>
