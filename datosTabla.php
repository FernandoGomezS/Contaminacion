 <?php
include 'conectBD.php';

$result = pg_query($con,"SELECT id_estacion ,id_comuna, propietario ,fecha_ultimo_registro FROM estacion") or die("Error en la consulta SQL 1");
if(!$result) echo pg_error();
else
{
	$row = array();
	$row2 = array();
    
	while (($fila = pg_fetch_array($result)) != NULL) {	

		$id=$fila['id_comuna'];
		$result2 = pg_query($con,"SELECT \"COMUNA_NOMBRE\" FROM comuna WHERE \"COMUNA_ID\" = '$id'") or die("Error en la consulta SQL 2");		

		if(!$result2) echo pg_error();
		else{
			$fila2 = pg_fetch_array($result2);
			$row[] = $fila['id_estacion'];			
			$row[] = $fila2['COMUNA_NOMBRE'];
			$row[] = $fila['propietario'];
			$row[] = "PM2.5/PM10";
			$row[] = $fila['fecha_ultimo_registro'];			
			$row2[]=$row;	
			$row = array();

			} 
	}
	$output['data']= $row2;
	 echo json_encode( $output );
}

pg_free_result($result);
pg_close($con);

?>

