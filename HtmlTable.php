<?php

	/*
		Easy HTML Table Generator
		@author HardForo.com
	*/

	class EasyTable 
	{		
		private $_tableClassName;
		private $_tableAttr;
		private $_headClassName;
		private $_capitals;
		private $_thAttr;
		private $_cols = [];
		private $_rows = [];
		private $_rowClasses = [];		
		
		function __construct($className=NULL,$attr=NULL){
			$this->_tableClassName = $className;
			$this->_tableAttr = $attr;
		}
		
		/*
			@param string nombre de una clase css
			@param array de nombres de los campos
			@param array asociativo de atributos cualesquiera
		*/
		public function setHead($className="", array $cols, array $th_attr = [], $capitalize=true){
			$this->_headClassName = $className;
			$this->_cols 		= $cols;		
			$this->_thAttr		= $th_attr;		
			$this->_capitals	= $capitalize;
			return $this;
		}	
		
		/*
			@param bool deben capitalizarse los nombres de los campos?
		*/
		public function capitalize($state=true){
			$this->_capitals	= $state;
			return $this;
		}	
		
		/*
			Nota: puede usarse solo antes de usar addRow
		*/
		public function setRows(array $rows){			
			$this->_rows = $rows;
			return $this;
		}
				
		public function addRow($row){
			$this->_rows[] = $row;	
			return $this;
		}	
		
		/*
			Nota: puede usarse solo antes de usar addRowClass
		*/
		public function setRowClases($clases){
			$this->_rowClasses = $clases;
			return $this;
		}	
		
		/*
			Agrega clase CSS para cada TR
		*/
		public function addRowClass($name){
			$this->_rowClasses[] = $name;
			return $this;
		}	
			
			
		public function renderHTML()
		{			
			$table_attr = $this->getAttribList($this->_tableAttr);
			$head = "<table class=\"$this->_tableClassName\" $table_attr>\n<thead class=\"th_blue\">\n <tr>";        
				  
			foreach ($this->_cols as $col)
			{				
				$th_attr = (isset($this->_thAttr[$col])) ? $this->_thAttr[$col] : '';	
				$col = $this->_capitals ? ucfirst($col) : $col;	
				$head .= "<th $th_attr>$col</th>\n";
			}	
				
			$head .= "</tr>\n</thead>\n";				
			$body = '<tbody>';		
			
			$clases = count($this->_rowClasses);
			$table_class = '';
			$i=0;
			
			foreach ($this->_rows as $row) 
			{
				if ($clases!=0){				
					$m=$i%$clases; 
					$i++; 	
					$table_class = $this->_rowClasses[$m];
				}
				
				$id   = isset($row['id']) ? 'id="'.$row['id'].'"' : '';	
				$tr_attr = (isset($row['attr'])) ? $this->getAttribList($row['attr']) : ''; 								
				$body .="<tr $id class=\"$table_class\" $tr_attr>";
				
				foreach ($this->_cols as $col){									
					$body .="<td>$row[$col]</td>\n";						 
				}		 
				
				$body .="</tr>";
			}			
			$body .= '</tbody></table>';
				
			return $head.$body;		
		}
		
		public function __toString(){
			return $this->renderHTML();
		}

		private function getAttribList($var)
		{
			$attr_list = '';
			if (is_array($var))
					foreach ($var as $key => $at)	
						$attr_list.= "$key=\"$at\" ";
				else					
					$attr_list = isset($var) ? $var : ''; 	
				
			return $attr_list;	
		}	
		
	}	
	
	
	