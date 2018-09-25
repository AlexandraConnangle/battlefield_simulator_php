<?php 

	class Dragon extends Animal
	{
		protected $name = "Dragon";
		protected $avatar = '<img src="images/dragon.png" alt="image de dragon" style="max-height:150px;"/>';
        protected $victoire = " se tourne vers le public dans une attitude nonchalante et transmet par télépathie : Quelqu'un veut une grillade ?... ";
		protected $ptVie = 140;
		protected $ptAttaque = 26;
		protected $typeAttaque = "enflamme";
	}
?>