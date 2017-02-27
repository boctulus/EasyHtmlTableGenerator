"Easy Html Table Generator" is a very simple but powerful PHP class to create responsive and colorful HTML tables.

For example:


		<?php  
        require_once("HtmlTable.php");
    
        $table = new HtmlTable('table');
        $table->setHead('th_blue',['name','lastname','age']);        
        $table->setRows([['name'=>'John','lastname'=>'Doe','age'=>35],
                         ['name'=>'Ann','lastname'=>'White','age'=>23],                         ['name'=>'Pablo','lastname'=>'Bozzolo','age'=>41]]);                
                        
        // optional
        $table->setRowClases(['info','','warning']);       
        
        echo $table; 

		
Or can use addRow() for each register like this:


	$table->addRow(['name'=>'Pepito','lastname'=>'Ferandez','edad'=>21]);  
	$table->addRow(['name'=>'Fulano','lastname'=>'Jimenez','edad'=>21]);   	


A functional example of use:
	

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
		  <h2>table de prueba</h2>
		  
		  <div class="table-responsive"> 
			<?php  
				require_once("HtmlTable.php");
			
				$table = new HtmlTable('table');
				$table->setHead('th_blue',['name','lastname','age']);        
				$table->setRows([['name'=>'Walter','lastname'=>'Black','age'=>25],
								 ['name'=>'Mary','lastname'=>'White','age'=>17],
								 ['name'=>'Richard','lastname'=>'Bush','age'=>33]                                                    
								]);                                
				
				$table->setRowClases(['info','','warning']);                
				echo $table->renderHTML();
			?>
		  </div>
		</div>

		</body>
		</html> 