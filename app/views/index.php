<?php

$texto = "SELECT
	control.id AS id, 
    CONCAT_WS(' - ', materia_prima.id, materia_prima.tipo) as 'id_materia_prima',
    control.placa_vehiculo as placa_vehiculo,
    CONCAT_WS(' - ', motorista.dui, motorista.apellidos) as 'dui_motorista',
    control.numero_pesa as numero_pesa,
    control.numero_orden as numero_orden,
    control.peso_salida as peso_salida,
    control.motivo_salida,
    control.fecha_salida as fecha_salida,
    control.peso_entrada as peso_entrada,
    control.motivo_entrada,
    control.fecha_entrada as fecha_entrada
FROM control 
INNER JOIN materia_prima ON control.id_materia_prima=materia_prima.id
INNER JOIN motorista ON control.dui_motorista=motorista.dui;"

?>
