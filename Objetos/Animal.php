<?php
	abstract class Animal //palabra clave class seguida del nombre de la clase.
	{
		//declaración de atributos:
		private $color = "gris";
		private $peso = 10;
		protected $edad = 0;

		//constantes de clase
		const PESO_LIGERO = 5;
		const PESO_MEDIO= 10;
		const PESO_PESADO = 15;

		//declaración de la variable estática $contador
		private static $contador = 0;

		public function __construct ($color, $peso)//constructor
		//que solicita dos argumentos.
		{
				echo "llamada al contructor<br>";
				$this->color = $color;//Inicialización del color
				$this->peso = $peso;//Inicialización del peso

			self::$contador = self::$contador + 1;

		}

		//accesos
		public function getColor()
		{
			return $this->color; //devuelve el color
		}

		public function setColor()
		{
			$this->color = $color; //escrito en el atributo color
		}

		public function getPeso()
		{
			return $this->peso; //devuelve el peso
		}

		public function setPeso()
		{
			$this->color = $peso; //escrito en el atributo peso

		}

		//métodos públicos

		public function comer_animal(Animal $animal_comido)
		{
			//el animal que come aumenta su peso tano como
			//el del animal comido
			$this->peso = $this->peso + $animal_comido->peso;
			//el peso del animal comido y su color se restablecen a 0
			$animal_comido->peso = 0;
			$animal_comido->color = " ";
		}

		public function moverse ()
		{
			echo "El animal se mueve.";
		}

		public function añadir_un_kilo()
		{
			$this->peso = $this->peso + 1;
		}
		
		//método estático que devuelve  el valor del contador
		public static function getContador()
		{
			return self::$contador;
		}

		//código no aplicado por el método abstracto
		abstract public function respira();
	}
?>