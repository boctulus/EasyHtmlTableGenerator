<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
		
		<style>
			.th_blue { background-color: #4a89dc; color:eee; }
		</style>
	</head>

<body>	
<div class="container">
  <h2>Tabla de prueba</h2>
  
  <div class="table-responsive"> 
	<?php  
		require_once("HtmlTable.php");
	
		$tabla = new EasyTable('table' /*,'style="display:none;"' */);
		$tabla->setHead('th_blue',['nombre','apellido','edad',''] /*,['nombre'=>'style="display:none;"','apellido'=>NULL,'edad'=>NULL,''=>NULL] */)->capitalize();		

		$tabla->setRows([['nombre'=>'Jose','apellido'=>'Antonio','edad'=>25,'id'=>2,''=>'<a data-id="row-2" href="javascript:editRow(2);" class="btn btn-md btn-success">editar</a>&nbsp;<a href="javascript:removeRow(2);" class="btn btn-default btn-md" style="background-color: #c83a2a;border-color: #b33426; color: #ffffff;">borrar</a>'],
						 ['nombre'=>'Maria','apellido'=>'Gomez','edad'=>23,'id'=>5,''=>'<a data-id="row-5" href="javascript:editRow(5);" class="btn btn-md btn-success">editar</a>&nbsp;<a href="javascript:removeRow(5);" class="btn btn-default btn-md" style="background-color: #c83a2a;border-color: #b33426; color: #ffffff;">borrar</a>'],
						 ['nombre'=>'Esteban','apellido'=>'Cerutti','edad'=>38,'id'=>20,''=>'<a data-id="row-20" href="javascript:editRow(20);" class="btn btn-md btn-success">editar</a>&nbsp;<a href="javascript:removeRow(20);" class="btn btn-default btn-md" style="background-color: #c83a2a;border-color: #b33426; color: #ffffff;">borrar</a>']													
						]);
						
		$tabla->addRow(	 ['nombre'=>'Pepito','apellido'=>'Ferandez','edad'=>21,'id'=>45, ''=>NULL, 'attr'=>'style="display:none;"']);	

		$tabla->addRow(	 ['nombre'=>'Patricio','apellido'=>'Pascual','edad'=>50,'id'=>2, ''=>NULL,  'attr'=>['data-algo'=>'algun valor'] ]);			
						
		// opcional
		$tabla->setRowClases(['info','','warning']);		
		
		echo $tabla;
	?>
  </div>
</div>

</body>
</html>