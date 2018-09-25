<?php  

class Bataille
{
	protected $tours = 1;

	public function __construct()
	{
		echo '<p> Les combatants entrent sur le champs de bataille </p>';
	}

	public function getTours()
	{
		return $this->tours;
	}

	protected function compteur()
	{
	//Ajoute +1 au compteur à chaque tours
		++$this->tours;
	}

	public function criCombat()
	{
	// fonction activée en cliquant sur le bouton "commencer la partie"
		echo "<p> Que la bataille commence ! Les combattants se mettent en place ! </p>";
	}

	public function duel(Humain $perso1, Animal $perso2)
	{
	//Activation du compteur de tours	
		$this->compteur(); 

	//Selection de personnage	
		if ($this->tours %2)
		//Selection du personnage si le chiffre au compteur est impaire
		{
			$attaquant = $perso2;
			$cible = $perso1;
		}
		else
		//Sinon selection du personnage si le chiffre au compteur est paire
		{
			$attaquant = $perso1;
			$cible = $perso2;
		}

	//Test les points de vie pour attaquer ou afficher un message annoncant la mort.
		if ($cible->getPtVie() <=0)
		//Afficher un message si la cible est morte
		{
			echo '<p style = "color: red" ;>Le combattant ' . $cible->getName() . ' est mort, vous comptez continuer longtemps comme ça ??? </p>' ;
		}
		elseif ($attaquant->getPtVie() <=0)
		//Afficher un message si l'attaquant est mort
		{
			echo '<p style = "color: red" ;>Le combattant ' . $attaquant->getName() . ' est mort, vous comptez continuer longtemps comme ça ??? ??? </p>' ;
		}
		else
		//Sinon attaquer la cible : PtVie de la cible - PtAttaque de l'attaquant
		{
			$ptVie = $cible->getPtVie() - $attaquant->getPtAttaque();
			$cible->setPtVie($ptVie);

			echo '<p>' . $attaquant->getName() . ' ' . $attaquant->getTypeAttaque() . ' ' . $cible->getName() . ' et lui inflige <span style="color:red;font-weight:600;">' . $attaquant->getPtAttaque() . '</span> point(s) de dégat.</p>';
		}

	//Afficher un message sur l'état du personnage cible :
		if ($cible->getPtVie() <=0 )
		//Si ses PV sont <= 0 alors ils seront réinitialisés à 0, et l'attaquant cri victoire.
		{
			$cible->setPtVie(0);
			echo '<p style = "color: red" ;>' . $cible->getName() . ' a atteint ' . $cible->getPtVie() . ' point(s) de vie et meurt ! ' . $attaquant->getName() . ' ' . $attaquant->getVictoire() . '</p>';
		}
		elseif ($cible->getPtVie() <=15 )
		//Ou si ses PV sont <= 15 la cible est dans un sale etat...
		{
			echo  '<p style = "color: orange" ;>' . $cible->getName() . ' est dans un sale état ! Il ne lui reste plus que <span style="color:red;font-weight:600;">' . $cible->getPtVie() . '</span> point(s) de vie avant de mourir ! ' . $attaquant->getName() . ' s\'approche de la victoire !</p>';
		}
		elseif ($cible->getPtVie() <=30 )
		//Ou si ses PV sont <= 30 la cible est étourdie...
		{
			echo  '<p style = "color:#4C6D8A" ;>' . $cible->getName() . ' est étourdit ! Il ne lui reste plus que <span style="color:red;font-weight:600;">' . $cible->getPtVie() . '</span> point(s) de vie avant de mourir ! ' . $attaquant->getName() . ' ne lui fait pas de cadeaux !</p>';
		}
		else
		//Sinon la cible est simplement blessée mais tout vas bien...  
		{
			echo  '<p style = "color:#669966" ;>' . $cible->getName() . ' est blessé mais pour l\'instant tout va bien ! Il lui reste encore <span style="color:red;font-weight:600;">' . $cible->getPtVie() . '</span> point(s) de vie !...</p>';
		}
	}
}

?>