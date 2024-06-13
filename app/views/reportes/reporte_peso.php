<?php

$row = '<table><tr><td>Pesa</td><td>Placa</td><td>Vehiculo</td><td>Peso Entrada</td><td>Peso Salida</td><td>Peso Diferencia</td><td>Fecha de Salida</td></tr>';

foreach($resultado as $res) {
  $row = $row . '<tr>' . '<td>'. $res->pesa . '</td><td>' . $res->placa . '</td><td>' . $res->tipo. '</td><td>' . $res->peso_entrada . '</td><td>' . $res->peso_salida . '</td><td>' . $res->diferencia. '</td><td>' . $res->fecha_salida. '</td></tr>';
}

$row = $row . '</table>';

$file =
  '<html>' .
  '<head></head>' .
  '<body>' .
  '<h2 style="text-align: center; font-size: 24px">' . 'Reporte de Pesos de Materias Primas' . '</h2>' .
  '<hr/>' .
  '<div>' .
  '<h3>Periodo</h3>' .
  '<div style="padding-left: 40px">' . $resultado[0]->fecha_salida . '</div>' .
  '<h3>Conteo Pesado</h3>' .
  '<div style="padding-left: 40px">' . count($resultado) . '</div>' .
  '</div>' .
  '<h3>Control de Pesado</h3>' .
  '<div style="padding-left: 40px">' . $row . '</div>' .
  '</div>' 
. '</body></html>';

?>
