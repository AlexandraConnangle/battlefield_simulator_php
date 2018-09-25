<?php 

	class Humain extends Personnage
	{
		protected $arme;

		public function __construct()
		{
			switch ($this->name) 
			{
				case 'Chevalier':
					$arme = new Epee2mains;
					break;
					
				case 'Fantassin':
					$arme = new Epee1main;
					break;
					
				case 'Paysan':
					$arme = new Fourche;
					break;
				
				default:
					echo "L'arme n'a pas été construite";
					break;
			}

			if (isset($arme)) 
			{
				$this->setArme($arme);

				$ptAttaque = $this->getPtAttaque() + $this->getArme()->getDegatsArme();
				$this->setPtAttaque($ptAttaque);

				echo '<p> Le ' . $this->getName() . ' équipe <span style="color:#669966;font-weight:600;">' . $this->getArme()->getNomArme() . '</span> et bénéficie d\'un bonus de <span style="color:#4C6D8A;font-weight:600;">' . $this->getArme()->getDegatsArme() . '</span> point(s) d\'attaque... </p>';
			}
		}
				
		public function getVictoire()
		{
			return $this->victoire;
		}

		public function getArme()
		{
			return $this->arme;
		}

		public function setArme($arme)
		{
			$this->arme = $arme;
		}
	}
?>