<?php

$row = '<table><tr><td>Fecha de Ingreso</td><td>Tipo</td><td>Nombre</td><td>Motivo de Entrada</td></tr>';

foreach($resultado as $res) {
  $row = $row . '<tr>' . '<td>'. $res->fecha_entrada . '</td><td>' . $res->tipo . '</td><td>' . $res->nombre . '</td><td>' . $res->motivo_entrada.'</td></tr>';
}

$row_2 = '<table><tr><td>Motivo de Entrada</td><td>Conteo</td></tr>';
foreach($resultado_existencia as $res) {
  $row_2 = $row_2 . '<tr>' . '<td>'. $res->motivo_entrada . '</td><td>' . $res->conteo . '</td></tr>';
}

$row = $row . '</table>';
$row_2 = $row_2 . '</table>';

$file =
  '<html>' .
  '<head></head>' .
  '<body>' .
  '<h2 style="text-align: center; font-size: 24px">' . 'Reporte de Control de Entradas' . '</h2>' .
  '<hr/>' .
  '<div>' .
  '<h3>Periodo</h3>' .
  '<div style="padding-left: 40px">' . $resultado[0]->fecha_entrada . '</div>' .
  '<h3>Conteo de Entradas</h3>' .
  '<div style="padding-left: 40px">' . count($resultado) . '</div>' .
  '</div>' .
  '<h3>Número de Entradas por Motivo</h3>' .
  '<div style="padding-left: 40px">' . $resultado_existencia[0]->conteo . ' - ' . $resultado_existencia[0]->motivo_entrada . '</div>' .
  '</div>' .
  '<h3>Control de Entradas por Motivo</h3>' .
  '<div style="padding-left: 40px">' . $row_2 . '</div>' .
  '</div>' .
  '<h3>Control de Entradas</h3>' .
  '<div style="padding-left: 40px">' . $row . '</div>' .
  '</div>' 
. '</body></html>';

?>
