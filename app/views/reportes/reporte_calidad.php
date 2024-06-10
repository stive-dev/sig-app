<?php

$row = '<table><tr><td>Tipo</td><td>Cantidad de Muestra</td><td>Impureza</td><td>Número de Pesa</td><td>Estado</td></tr>';

foreach($resultado as $res) {
  $row = $row . '<tr>' . '<td>'. $res->materia . '</td><td>' . $res->cantidad . '</td><td>' . $res->impureza . '</td><td>' . $res->pesa.'</td><td>' . $res->estado  . '</td></tr>';
}

$row_2 = '<table><tr><td>Motivo de Salida</td><td>Conteo</td></tr>';
foreach($resultado_existencia as $res) {
  $row_2 = $row_2 . '<tr>' . '<td>'. $res->motivo_salida . '</td><td>' . $res->conteo . '</td></tr>';
}

$row = $row . '</table>';
$row_2 = $row_2 . '</table>';

$file =
  '<html>' .
  '<head></head>' .
  '<body>' .
  '<h2 style="text-align: center; font-size: 24px">' . 'Reporte de Control de Calidad de Materias Primas' . '</h2>' .
  '<hr/>' .
  '<div>' .
  '<div>Estado: '.'Aprobado' . '</div>' .
  '<h3>Conteo de Materias Evaluadas</h3>' .
  '<div style="padding-left: 40px">' . count($resultado) . '</div>' .
  '<h3>Promedio de Impurezas</h3>' .
  '<div style="padding-left: 40px">' . $resultado_existencia[0]->prom_1 . '</div>' .
  '</div>' .
  '<h3>Varianza de Impurezas</h3>' .
  '<div style="padding-left: 40px">' . $resultado_existencia[0]->prom_2 . '</div>' .
  '</div>' .
  '<h3>Control de Salidas</h3>' .
  '<div style="padding-left: 40px">' . $row . '</div>' .
  '</div>' 
. '</body></html>';

?>
