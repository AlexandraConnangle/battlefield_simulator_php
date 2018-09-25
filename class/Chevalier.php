<?php 

	class Chevalier extends Humain
	{
		protected $name = "Chevalier";
		protected $avatar = '<img src="images/knight.png" alt="image de chevalier" style="max-height:150px;"/>';
        protected $victoire = " crie : Tiens ! Tu ne l'as pas volé celle là !!!";
		protected $ptVie = 120;
		protected $ptAttaque = 35;
		protected $typeAttaque = "pourfend";
	}	
?>