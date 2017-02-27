"Easy Html Table Generator" is a very simple but powerful PHP class to create responsive and colorful HTML tables.

For example:


	<?php  
        require_once("HtmlTable.php");
    
        $table = new HtmlTable('table');
        $table->setHead('th_blue',['name','lastname','age']);        
        $table->setRows([['name'=>'John','lastname'=>'Doe','age'=>35],
                         ['name'=>'Ann','lastname'=>'White','age'=>23],                         	                                                          ['name'=>'Pablo','lastname'=>'Bozzolo','age'=>41]]);                
                        
        // optional
        $table->setRowClases(['info','','warning']);       
        
        echo $table; 

		
Or can use addRow() for each register like this:


	$table->addRow(['name'=>'Pepito','lastname'=>'Ferandez','edad'=>21]);  
	$table->addRow(['name'=>'Fulano','lastname'=>'Jimenez','edad'=>21]);   	

	
It's easy to add an 'id' for each TR so you can handle this with Javascript, it's just add a new field into the array passed to addRow() or setRows() methods:


	$table->addRow(['name'=>'John','lastname'=>'Doe','age'=>35,'id'=>8]);	

	
Will be renderized like:


	<tr id="8">
		<td>John</td>
		<td>Doe</td>
		<td>35</td>
	</tr>


And it's also possible to add attributes like style or data- or whatever like an event handler (onClick, onHover,..) to < table >, < th > and < tr >  

	$table = new HtmlTable('table' ,'style="display:none;"'); 
	
	Or 
	
	$table->setHead('th_blue',['name','lastname','age',''] ,
					['name'=>'style="display:none;"',
					'lastname'=>NULL,'age'=>NULL,''=>NULL] 
					); 
					
	Or

	$table->addRow(['name'=>'Ann', 'lastname'=>'White', 'age'=>23, 'id'=>100, 'attr'=>['data-xxx'=>'some value'] ]); 	

	
A functional example of use:
	

<<<<<<< HEAD
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
=======
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
>>>>>>> origin/master
