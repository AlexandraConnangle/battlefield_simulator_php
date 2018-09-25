<?php 

	class Poulet extends Animal
	{
		protected $name = "Poulet";
		protected $avatar = '<img src="images/chicken.png" alt="image de poulet" style="max-height:150px;"/>';
        protected $victoire = "saute sur le corp de son adversaire et se met à chanter : Cock-a-doodle-do !!! ";
		protected $ptVie = 30;
		protected $ptAttaque = 5;
		protected $typeAttaque = "picore";
	}
?>