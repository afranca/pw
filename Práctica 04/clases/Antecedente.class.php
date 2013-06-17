<?php
	include('includes/conexion.php');
	class Antecedente	{

		var $id;
		var $id_antecedente;
		var $id_atr-val;
		var $cf;



		public function create ()	{

			$sql = "INSERT INTO antecedente (id_antecedente,id_atr-val,cf)	VALUES (".$this->id_antecedente.",".$this->id_atr-val.",".$this->cf."); ";

			return mysql_query($sql) OR die(mysql_error());
		}


		public function read ($id){

			$sql = "SELECT id, id_antecedente, id_atr-val,cf FROM antecedente WHERE id = ".$id

			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$this->id = $resultArr["id"];
			$this->id_antecedente = $resultArr["id_antecedente"];
			$this->id_atr-val = $resultArr["id_atr-val"];
			$this->cf = $resultArr["cf"];

			return $this;

		}

		public function readAll ($id){

			$sql = "SELECT id,id_antecedente,id_atr-val,cf  FROM antecedente";
			$result = mysql_query($sql);

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
			$sql = "UPDATE antecedente SET id_antecedente=".$this->id_antecedente.",id_atr-val=".$this->id_atr-val.",cf=".$this->cf." WHERE id=".$id;

			return mysql_query($sql) OR die(mysql_error());
		}

		public function delete ($id){

			$sql = "DELETE FROM antecedente WHERE  id=".$id;

			return mysql_query($sql) OR die(mysql_error());

		}




		public function verTodos()	{

		}


	}

?>
