<?php
	include('includes/conexion.php');
	class Antecedente	{

		var $id;
		var $id_atr-val;




		public function create ()	{

			$sql = "INSERT INTO antecedente (id_atr-val)	VALUES (".$this->id_atr-val."); ";

			return mysql_query($sql) OR die(mysql_error());
		}


		public function read ($id){

			$sql = "SELECT id, id_atr-val FROM antecedente WHERE id = ".$id

			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$this->id = $resultArr["id"];
			$this->id_atr-val = $resultArr["id_atr-val"];

			return $this;

		}

		public function readAll ($id){

			$sql = "SELECT id,id_atr-val  FROM antecedente";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){
				$i=0;
				while ($options=mysql_fetch_row($result)){

					$resultArr[$i] = $options[0];
					$resultArr[$i+1] = $options[1];

					$i = $i+ 2;
				}
			}else {
				$resultArr;
			}

			return $resultArr;


		}

		public function update ($id){
			$sql = "UPDATE antecedente SET id_atr-val=".$this->id_atr-val." WHERE id=".$id;

			return mysql_query($sql) OR die(mysql_error());
		}

		public function delete ($id){

			$sql = "DELETE FROM antecedente WHERE  id=".$id;

			return mysql_query($sql) OR die(mysql_error());

		}





	}

?>
