<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <?php require_once __ROOT_PATH__ . "/app/views/components/headers.php" ?>
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

    <div class="table__container">
      <div class="grid">
        <div class="grid-row">
          <div class="grid-column-2">
            <div class="card">
              <div class="card__title">
                <h2>Vehiculos Fuera/Dentro</h2>
              </div>
              <div class="card__content" style="display: flex; justify-content: center;">
                <div style="width: fit-content;">
                  <canvas id="myChart"></canvas>
                </div>
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
     const ctx = document.getElementById('myChart');
     new Chart(ctx, {
       type: 'pie',
       data: {
         labels: ['Vehiculos Fuera', 'Vehiculos Dentro'],
         datasets: [{
           label: 'Control de Ingresos/Egresos',
           data: [<?= count($vehiculosDentro) ?>, <?= count($vehiculosFuera)?>],
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
