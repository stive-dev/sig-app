<?php

$row = '<table><tr><td>Fecha de Ingreso</td><td>Tipo</td><td>Pesa</td></tr>';

foreach($resultado as $res) {
  $row = $row . '<tr>' . '<td>'. $res->fecha_entrada . '</td><td>' . $res->tipo . '</td><td>' . $res->pesa . '</td></tr>';
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
  '<div style="padding-left: 40px">' . $resultado[0]->fecha_entrada . '</div>' .
  '<h3>Conteo de Materias Primas</h3>' .
  '<div style="padding-left: 40px">' . count($resultado) . '</div>' .
  '</div>' .
  '<h3>Materia Prima con Más Lotes</h3>' .
  '<div style="padding-left: 40px">' . $resultado_existencia[0]->tipo_conteo . ' - ' . $resultado_existencia[0]->tipo . '</div>' .
  '<h3>Materia Prima con Menos Lotes</h3>' .
  '<div style="padding-left: 40px">' . $resultado_menos_existencia[0]->tipo_conteo . ' - ' . $resultado_menos_existencia[0]->tipo . '</div>' .
  '</div>' .
  '<h3>Materia Prima Ingresada</h3>' .

  '<div style="padding-left: 40px">' . $row . '</div>' .
  '</div>' 
. '</body></html>';

?>
