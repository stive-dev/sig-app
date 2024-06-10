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

    
    <div class="header">
      <div class="header__content">
        <h2 class="title__2">Dashboard</h2>
      </div>
    </div>

    
    <div class="header">
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

    <div class="header">
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

    <div class="header">
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

    <div class="table__container">
      <div class="grid">
        <div class="grid-row">
          <div class="grid-column-2">
            <div class="card">
              <div class="card__title">
                <h2>Motivos de Salida</h2>
              </div>
              <div class="card__content" style="display: flex; justify-content: center;">
                <canvas id="myChart"></canvas>
              </div>
              <div class="card__foot"></div>
            </div>
          </div>
          <div class="grid-column-2">
            <div class="grid-row">
              <div class="grid-column-2">
                
                <div class="card">
                  <div class="card__title">
                    <h2>Vehiculos</h2>
                  </div>
                  <div class="card__content">
                    <h2>
                      <?= count($vehiculos) ?>
                    </h2>
                  </div>
                  <div class="card__foot"></div>
                </div>
                
              </div>
              
              <div class="grid-column-2">
                <div class="card">
                  <div class="card__title">
                    <h2>Motoristas</h2>
                  </div>
                  <div class="card__content">
                    <h2>
                      <?= count($motoristas) ?>
                    </h2>
                  </div>
                  <div class="card__foot"></div>
                </div>
              </div>
              <div class="grid-column-2">
                <div class="card">
                  <div class="card__title">
                    <h2>Inventarios</h2>
                  </div>
                  <div class="card__content">
                    <h2>
                      <?= count($materiasPrimas) ?>
                    </h2>
                  </div>
                  <div class="card__foot"></div>
                </div>
              </div>
              <div class="grid-column-2">
                <div class="card">
                  <div class="card__title">
                    <h2>Análisis</h2>
                  </div>
                  <div class="card__content">
                    <h2>
                      <?= count($materiasPrimasAnalisis) ?>
                    </h2>
                  </div>
                  <div class="card__foot"></div>
                </div>
              </div>
            </div>
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
