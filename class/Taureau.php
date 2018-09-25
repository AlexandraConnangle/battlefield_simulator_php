<?php 

	class Taureau extends Animal
	{
		protected $name = "Taureau";
		protected $avatar = '<img src="images/torus.png" alt="image de taureau" style="max-height:150px;"/>';
        protected $victoire = "soulève fièrement son adversaire et fait le tour de l'arène sous les aplaudissements du public ! ";
		protected $ptVie = 70;
		protected $ptAttaque = 30;
		protected $typeAttaque = "charge";
	}
?>