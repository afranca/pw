<?php
	include('includes/conexion.php');
	class Atributo	{

		var $id;
		var $atributo;
		var $valor;



		public function create ()	{

			$sql = "INSERT INTO atributo (atributo,valor)	VALUES ('".$this->atributo."','".$this->valor."'); ";

			return mysql_query($sql) OR die("create():".mysql_error());
		}


		public function read ($id){

			$sql = "SELECT id, atributo,valor FROM atributo WHERE id = ".$id;

			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$this->id = $resultArr["id"];
			$this->atributo = $resultArr["atributo"];
			$this->valor = $resultArr["valor"];


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

		public function update (){
			$sql = "UPDATE atributo SET atributo='".$this->atributo."',valor='".$this->valor."' WHERE id=".$this->id;

			return mysql_query($sql) OR die("update():".mysql_error());
		}

		public function delete (){

			$sql = "DELETE FROM atributo WHERE  id=".$this->id;

			return mysql_query($sql) OR die("delete():".mysql_error());

		}


		public function checkAtributoIsUsed(){

			$sql = "SELECT COUNT(*) as numb FROM regla WHERE id_atributo = ".$this->id;
			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);
			$numberRegla = $resultArr["numb"];

			$sql = "SELECT COUNT(*) as numb FROM antecedente WHERE id_atributo = ".$this->id;
			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);
			$numberAntecedente = $resultArr["numb"];


			if ( ($numberRegla+$numberAntecedente) > 0){
				return true;
			}

			return false;
		}

		public function findDuplicate(){

			$sql = "SELECT count(*) as duplicate FROM atributo WHERE atributo = '".$this->atributo."' AND valor='".$this->valor."'";
			//echo("sql:".$sql);
			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$duplicate = $resultArr["duplicate"];
			//echo("duplicate:".$duplicate);
			if ($duplicate > 0){
				return true;
			}

			return false;

		}



	}

?>
