<?php
	include('includes/conexion.php');
	class Atributo	{

		var $id;
		var $atributo;
		var $valor;



		public function create ()	{

			$sql = "INSERT INTO atributo (atributo,valor)	VALUES (".$this->atributo.",".$this->valor."); ";

			return mysql_query($sql) OR die(mysql_error());
		}


		public function read ($id){

			$sql = "SELECT id, atributo,valor FROM atributo WHERE id = ".$id

			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$this->id = $resultArr["id"];
			$this->id_antecedente = $resultArr["atributo"];
			$this->id_atr-val = $resultArr["valor"];


			return $this;

		}

		public function readAll (){

			$sql = "SELECT id,atributo,valor   FROM atributo";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){
				$i=0;
				while ($options=mysql_fetch_row($result)){

					$resultArr[$i] = $options[0];
					$resultArr[$i+1] = $options[1];
					$resultArr[$i+2] = $options[2];

					$i = $i+ 3;
				}
			}else {
				$resultArr;
			}

			return $resultArr;


		}

		public function update ($id){
			$sql = "UPDATE atributo SET atributo=".$this->atributo.",valor=".$this->valor." WHERE id=".$id;

			return mysql_query($sql) OR die(mysql_error());
		}

		public function delete ($id){

			$sql = "DELETE FROM atributo WHERE  id=".$id;

			return mysql_query($sql) OR die(mysql_error());

		}


	}

?>
