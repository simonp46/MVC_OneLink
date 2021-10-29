

<?php

// Conectando, seleccionando la base de datos

$link = mysql_connect('localhost', 'root', '')

    or die('No se pudo conectar: ' . mysql_error());


mysql_select_db('empleado') or die('No se pudo seleccionar la base de datos');



// Realizar una consulta MySQL
$query = 'SELECT tipodocumento, numdocumento, nombres, apellidos, Area FROM empleado';

$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>TIPO DE DOCUMENTO</th>
            <th>NUMERO DE DOCUMENTO</th>
			<th>NOMBRES</th>
			<th>APELLIDOS</th>
			<th>ÁREA</th>
		</tr>
		</thead>
<?php while ($row = mysql_fetch_array($result)){?>
	<td><?php $row['tipo documento'] ?></td>
    <td><?php $row['numero documento'] ?></td>
    <td><?php $row['nombres'] ?></td>
    <td><?php $row['apellidos'] ?></td>
    <td><?php $row['Area'] ?></td>
	
<?php } ?>
