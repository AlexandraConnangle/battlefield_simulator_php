<?php 

	class Animal extends Personnage
	{
		public function __construct()
		{
			echo ' <p> Le ' . $this->getName() . ' sort de sa cage et s\'étire en observant votre combattant d\'un oeil provocateur !</p>' ;
		}

		public function getVictoire()
		{
			return $this->victoire;
		}
	}
?>