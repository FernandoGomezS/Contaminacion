<?php
include 'conectBD.php';

$cadena = $_POST['id'];
$fechaini = $_POST['inicial'];
$fechafinal = $_POST['final'];
$idTipo = $_POST['idTipo'];
$id =preg_replace("/[^0-9]/", "", $cadena);


$result = pg_query($con,"SELECT * FROM registro  WHERE id_estacion = '$id' AND id_tipo = '$idTipo' AND ( fecha_registro BETWEEN '$fechaini' AND '$fechafinal') ORDER BY fecha_registro ") or die("Error en la consulta SQL");

if(!$result) echo pg_error();
else
{
	$row = array();
	$row2 = array();

	while (($fila = pg_fetch_array($result)) != NULL) {	

		$formato = 'Y-m-d H:i:s';
		$fecha = DateTime::createFromFormat($formato, $fila['fecha_registro'], new DateTimeZone('GMT'));
		$suma=0;
		$ts = $fecha->getTimestamp();
		$suma=$suma+$fila['valor'];

		$row[] = $ts*1000; // a milisegundos
		$row[] = $suma;
		$row2[] = $row;
		$row = array();
	}
	echo json_encode( $row2);
}

pg_free_result($result);
pg_close($con);

?>
