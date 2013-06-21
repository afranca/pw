<?php
	include('includes/conexion.php');
	class Regla	{

		var $id;
		var $id_antecedente;
		var $id_atributo;
		var $cf;



		public function create ()	{

			$sql = "INSERT INTO regla (id_antecedente,id_atributo,cf)	VALUES (".$this->id_antecedente.",".$this->id_atributo.",".$this->cf."); ";

			return mysql_query($sql) OR die("create():".mysql_error());
		}


		public function read ($id){

			$sql = "SELECT id, id_antecedente, id_atributo,cf FROM regla WHERE id = ".$id;

			$result = mysql_query($sql);
			$resultArr = mysql_fetch_array($result);

			$this->id = $resultArr["id"];
			$this->id_antecedente = $resultArr["id_antecedente"];
			$this->id_atributo = $resultArr["id_atributo"];
			$this->cf = $resultArr["cf"];

			return $this;

		}

		public function readAll (){

			$sql = "SELECT a.id,a.id_antecedente,a.id_atributo,a.cf,b.atributo,b.valor  FROM regla a, atributo b WHERE a.id_atributo=b.id";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){
				$i=0;
				while ($options=mysql_fetch_row($result)){

					$resultArr[$i] = $options[0];
					$resultArr[$i+1] = $options[1];
					$resultArr[$i+2] = $options[2];
					$resultArr[$i+3] = $options[3];
					$resultArr[$i+4] = $options[4];
					$resultArr[$i+5] = $options[5];
					$i = $i+ 6;
				}
			}else {
				$resultArr;
			}

			return $resultArr;


		}

		public function update (){
			//$sql = "UPDATE regla SET id_antecedente=".$this->id_antecedente.",id_atributo=".$this->id_atributo.",cf=".$this->cf." WHERE id=".$this->id;
			$sql = "UPDATE regla SET id_atributo=".$this->id_atributo.",cf=".$this->cf." WHERE id=".$this->id;

			return mysql_query($sql) OR die("update():".mysql_error());
		}

		public function delete (){

			$sql = "DELETE FROM regla WHERE  id=".$this->id;

			return mysql_query($sql) OR die("delete():".mysql_error());

		}


	}

?>
