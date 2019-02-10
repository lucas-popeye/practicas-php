<?php
	class Animal //palabra clave class seguida del nombre de la clase.
	{
		//declaración de atributos:
		private $color = "gris";
		private $peso = 10;

		//constantes de clase
		const PESO_LIGERO = 5;
		const PESO_MEDIO = 10;
		const PESO_PESADO = 15;
		

		//declaración de la varible estática $contador
		private static $contador = 0;

		public function _construct ($color,$peso)
		//constructor que solicita 2 argumentos.
		{
			echo "Llamada al constructor.<br>";
			$this->color = $color;//inicialización del color
			$this->peso = $peso;//inicialización del peso

			self::$contador = self::$contador + 1;
		}

		//método estático que devuelve el valor del contador
		public static function getContador()
		{
			return self::$contador;
		}
?>
