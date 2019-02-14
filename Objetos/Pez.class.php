<?php
	class Pez extends Animal
	{
		private $vive_en_el_mar; //tipo de pez

		//método sustituido
		public function comer_animal (Animal $animal_comido)
		{	
			//al método comer_animal () de la clase padre,
			//es decir Animal
			parent::comer_animal($animal_comido);

			if (method_exists($animal_comido, "setRaza")) {
				$animal_comido->setRaza("");
			}
			if (isset($animal_comido->vive_en_el_mar)) {
				$animal_comido->vive_en_el_mar("")
			}
		}

		//accesos
		public function mostrarAtributos()
		{
			echo "Tipo: ".$this->vive_en_el_mar;//correcto ya que es
												//privada de esta clase
			echo "<br>";
			echo "Edad: ".$this->edad;//correcto ya que el atributo
									  // está protegido de la clase madre
			echo "<br>";
			echo "Peso: "; . $this->peso;// error, ya que el atributo es
			//privado en la clase madre, el acceso está prohibido. Debe pasar
			//por sus accesos públicos para modificar o leer su valor
			echo "<br>";
		}

		public function getType ()
		{
			if ($this->vive_en_el_mar) {
				return "vive_en_el_mar";
			}
			else if ($this->vive_en_el_mar===falso) {
				return "no vive_en_el_mar";
			}else {return "";}
		}
			public function setType($vive_en_el_mar)
			{
				$this->vive_en_el_mar = $vive_en_el_mar;
			//escrito en el atributo vive_en_el_mar
			}
			//método
			public function nadar ()
			{
				echo "Nado <br>";
			}

			public function respira()
			{
				echo "El pez respira.";
			}

	}
	
	
?>