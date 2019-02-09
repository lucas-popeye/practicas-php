<?php
	class Animal //palabra clave class seguida del nombre de la clase.
	{
		//declaración de atributos:
		private $color = "gris";
		private $peso = 10;

		
		public function _construct ($color,$peso)
	//constructor que solicita 2 argumentos.
		{
			echo "Llamar al constructor.<br>";
			$this->color = $color;//inicialización del color
			$this->peso = $peso;//inicialización del peso
		}

		public function _destruct()
		{
			echo "Llamar al destructor";
		}
		
?>