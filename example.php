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
  <h2>Easy Html Table Generator</h2>
  
  <div class="table-responsive"> 
	<?php  
		require_once("HtmlTable.php");
	
		$tabla = new EasyTable('table' /*,'style="display:none;"' */);
		$tabla->setHead('th_blue',['name','lastname','age',''] /*,['name'=>'style="display:none;"','lastname'=>NULL,'age'=>NULL,''=>NULL] */)->capitalize();		

		$tabla->setRows([['name'=>'Jhon','lastname'=>'Doe', 'age'=>25, 'id'=>2,''=>'<button type="button"  class="btn btn-md btn-success">edit</button>&nbsp;<button type="button" class="btn btn-default btn-md btn-danger" ">delete</button>'],
		
		['name'=>'Maria','lastname'=>'Gomez','age'=>23,'id'=>5,''=>'<button type="button" class="btn btn-md btn-success">edit</button>&nbsp;<button type="button" class="btn btn-default btn-md btn-danger" ">delete</button>']
						]);
		
		$tabla->addRow(['name'=>'Esteban','lastname'=>'Cerutti','age'=>38,'id'=>20,''=>'<button type="button" class="btn btn-md btn-success">edit</button>&nbsp;<button type="button" class="btn btn-default btn-md btn-danger" ">delete</button>']);
						
		// hidden because style="display:none;" attribute				
		$tabla->addRow(['name'=>'Pepito','lastname'=>'Ferandez','age'=>21,'id'=>45, ''=>'<button type="button" class="btn btn-md btn-success">edit</button>&nbsp;<button type="button" class="btn btn-default btn-md btn-danger" ">delete</button>', 'attr'=>'style="display:none;"']);	

								
		// optional
		$tabla->setRowClases(['info','','warning']);		
		
		echo $tabla;
	?>
  </div>
</div>

</body>
</html>