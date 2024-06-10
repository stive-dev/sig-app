<?php

$row = '<table><tr><td>Fecha de Ingreso</td><td>Tipo</td><td>Nombre</td><td>Motivo de Salida</td></tr>';

foreach($resultado as $res) {
  $row = $row . '<tr>' . '<td>'. $res->fecha_entrada . '</td><td>' . $res->tipo . '</td><td>' . $res->nombre . '</td><td>' . $res->motivo_salida.'</td></tr>';
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
  '<h2 style="text-align: center; font-size: 24px">' . 'Reporte de Control de Salidas' . '</h2>' .
  '<hr/>' .
  '<div>' .
  '<h3>Periodo</h3>' .
  '<div style="padding-left: 40px">' . $resultado[0]->fecha_entrada . '</div>' .
  '<h3>Conteo de Salidas</h3>' .
  '<div style="padding-left: 40px">' . count($resultado) . '</div>' .
  '</div>' .
  '<h3>Número de Salidas por Motivo</h3>' .
  '<div style="padding-left: 40px">' . $resultado_existencia[0]->conteo . ' - ' . $resultado_existencia[0]->motivo_salida . '</div>' .
  '</div>' .
  '<h3>Control de Salidas por Motivo</h3>' .
  '<div style="padding-left: 40px">' . $row_2 . '</div>' .
  '</div>' .
  '<h3>Control de Salidas</h3>' .
  '<div style="padding-left: 40px">' . $row . '</div>' .
  '</div>' 
. '</body></html>';

?>
