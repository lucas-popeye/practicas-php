<?php
	class Animal //palabra clave class seguida del nombre de la clase.
	{
		//declaración de atributos:
		private $color = "gris";
		private $peso = 10;

		//accesos
		public function getColor()
		{
			return $this->color; //devuelve el color
		}

		public function setColor()
		{
			$this->color = $color; //escrito en el atributo color

		}

		public function setPeso()
		{
			 $this->peso = $peso; //escrito en el atributo peso
		}

		public function comer()
		{
			//Método posible para acceder a las propiedades
			//color y peso
		}

		public function moverse ()
		{
			//Método posible para acceder a las propiedades
			//color y peso
		}

		public function añadir_un_kilo()
		{
			$this->peso = $this->peso + 1;
		}
		
	}
?>