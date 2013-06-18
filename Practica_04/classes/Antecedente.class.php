<?php
	include('includes/conexion.php');
	class Antecedente	{

		var $id;
		var $id_atributo;




		public function create ()	{

			$sql = "INSERT INTO antecedente (id_atributo)	VALUES (".$this->id_atributo."); ";

			return mysql_query($sql) OR die(mysql_error());
		}


		public function read ($id){

			$sql = "SELECT id, id_atributo FROM antecedente WHERE id = ".$id;

			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$this->id = $resultArr["id"];
			$this->id_atributo = $resultArr["id_atributo"];

			return $this;

		}

		public function readAll (){

			$sql = "SELECT a.id,a.id_atributo,b.atributo,b.valor  FROM antecedente a, atributo b WHERE a.id_atributo = b.id";
			$result = mysql_query($sql);
			//echo("antecedente:".$result);
			if(mysql_num_rows($result)>0){
				$i=0;
				while ($options=mysql_fetch_row($result)){

					$resultArr[$i] = $options[0];
					$resultArr[$i+1] = $options[1];
					$resultArr[$i+2] = $options[2];
					$resultArr[$i+3] = $options[3];

					$i = $i+ 4;
				}
			}else {
				$resultArr;
			}

			return $resultArr;


		}

		public function update ($id){
			$sql = "UPDATE antecedente SET id_atributo=".$this->id_atributo." WHERE id=".$id;

			return mysql_query($sql) OR die(mysql_error());
		}

		public function delete ($id){

			$sql = "DELETE FROM antecedente WHERE  id=".$id;

			return mysql_query($sql) OR die(mysql_error());

		}





	}

?>
