<?php 

	class Paysan extends Humain
	{
		protected $name = "Paysan";
		protected $avatar = '<img src="images/peasant.png" alt="image de paysan" style="max-height:150px;"/>';
        protected $victoire = " dit : Pour savoir s’il va y avoir du vent, il faut... Ah... Tu la connais déjà ?...";
		protected $ptVie = 80;
		protected $ptAttaque = 10;
		protected $typeAttaque = "embroche";
	}
?>