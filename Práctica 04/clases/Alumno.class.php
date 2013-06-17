<?php
include('includes/conexion.php');
	class Alumno{
		var $cod_alumno;
		var $dni;
		var $nombre;
		var $apellido1;
		var $apellido2;
		var $direccion;
		var $telefono;
		var $correo;
		var $contrasena;
		var $cod_grupo;

		public function crear ($cod_grupo){

			$sql = "INSERT INTO alumno (dni,nombre,apellido1,apellido2,direccion,telefono,correo,contrasena,cod_grupo)
			VALUES
			( '".$this->dni."', '".$this->nombre."','".$this->apellido1."','".$this->apellido2."','".$this->direccion."','".$this->telefono."','".$this->correo."','".$this->contrasena."','".$cod_grupo."'); ";

			$res = mysql_query($sql)OR die(mysql_error());

			return $res ;
		}


		public function ver ($cod_alumno){

			$sql = "SELECT * FROM alumno WHERE cod_alumno = ".$cod_alumno.";";
			$result = mysql_query($sql);

			$resultArr = mysql_fetch_array($result);
			$this->cod_alumno = $resultArr["cod_alumno"];
			$this->dni = $resultArr["dni"];
			$this->nombre = $resultArr["nombre"];
			$this->apellido1 = $resultArr["apellido1"];
			$this->apellido2 = $resultArr["apellido2"];
			$this->direccion = $resultArr["direccion"];
			$this->telefono = $resultArr["telefono"];
			$this->correo = $resultArr["correo"];
			$this->contrasena = $resultArr["contrasena"];
			$this->cod_grupo = $resultArr["cod_grupo"];

			return $this;
		}

		public function verTodos()		{
			$sql = "SELECT  a.cod_alumno,a.nombre,a.apellido1,a.apellido2,a.correo, g.nombre FROM alumno a, grupo g WHERE a.cod_grupo = g.cod_grupo";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)>0){
				$i=0;
				while ($options=mysql_fetch_row($result)){

					$resultArr[$i] = $options[0];
					$resultArr[$i+1] = $options[1];
					$resultArr[$i+2] = $options[2];
					$resultArr[$i+3] = $options[3];
					$resultArr[$i+4] = $options[4];
					$resultArr[$i+4] = $options[5];
					$i = $i+ 6;
				}
			}else {
				$resultArr;
			}

			return $resultArr;
		}

		public function modificar ($cod_alumno)	{

			$sql = "UPDATE alumno SET dni='".$this->dni."',nombre='".$this->nombre."',apellido1='".$this->apellido1."',apellido2='".$this->apellido2."',direccion='".$this->direccion."',telefono='".$this->telefono."',correo='".$this->correo."',contrasena='".$this->contrasena."' WHERE cod_alumno=".$cod_alumno;


			return mysql_query($sql)OR die(mysql_error());


		}

	}

?>