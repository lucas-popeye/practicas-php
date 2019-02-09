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

		public function setColor($color)
		{
			$this->color = $color; //escrito en el atributo color

		}
		
		public function getPeso()
		{
			 return $this->peso = $peso; //devuelve el peso
		}


		public function setPeso()
		{
			 $this->peso = $peso; //escrito en el atributo peso
		}

		//métodos

		public function comer_animal(Animal $animal_comido)
		{
			//El animal que come, aumenta su peso tanto
			//como el del animal comido
			$this->peso = $this->peso + $animal_comido->peso;
			//el peso del animal comido y su color se restablecen a 0
			$animal_comido->peso = 0;
			$animal_comido->color = " ";
		}

		public function moverse ()
		{
			//Método que pueda acceder a las propiedades
			//color y peso
		}

		public function añadir_un_kilo()
		{
			$this->peso = $this->peso + 1;
		}
		
	}
?>