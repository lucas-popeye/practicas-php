<?php
	class Gato extends Animal implements acción
	{
		private $raza;//raza del gato

		//accesos

		public function getRaza ();
		{
			return $this->raza;//devuelve la raza
		}
			
		public function setRaza($raza)
		{
				$this->raza = $raza;
		
		}
		//método
		public function maullar ()
			{
				echo "Miau <br>";
			}

	
		public function respira()
			{
				echo "El gato respira.";
			}

		//métodos de la interfaz
			function correr() {
				echo "El gato corre.<br>";
			}
			
			function comer() {
				echo "El gato come.<br>";
			}

	}
?>