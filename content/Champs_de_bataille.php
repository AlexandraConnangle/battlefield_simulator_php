
<div class="champ-de-bataille">

	<h2>Champs de bataille : </h2>

		<?php

	//Contruction des objets

		if (isset($_POST['humain']) AND isset($_POST['animal']))
		// Si reception de variable $_POST, lancer la création des objets nécessaires au simulateur 
		{
			$_SESSION['combat'] = new Bataille;

			switch ($_POST['humain']) 
			{
				case 'chevalier':
					$_SESSION['perso1'] = new Chevalier;
					break;

				case 'fantassin':
					$_SESSION['perso1'] = new Fantassin;
					break;

				case 'paysan':
					$_SESSION['perso1'] = new Paysan;
					break;
				
				default:
					echo "Le combattant n'a pas été construit";
					break;
			}	

			switch ($_POST['animal']) 
			{
				case 'poulet':
					$_SESSION['perso2'] = new Poulet;
					break;

				case 'taureau':
					$_SESSION['perso2'] = new Taureau;
					break;

				case 'dragon':
					$_SESSION['perso2'] = new Dragon;
					break;
				
				default:
					echo "L'adversaire n'a pas été construit";
					break;
			}
		}

		 
	//Action des boutons

		if (isset($_GET['button'])) 
		//Si données reçue par la methode $_GET['button']
		{
			if ($_GET['button']=='newGame')
			//Si newGame, detruire la session et revenir sur la selection de personnage 
			{
				session_destroy();
				header('Location:index.php');
			}
			elseif ($_GET['button']=='start')
			//Si start, lancer la fonction criCombat pour commencer la partie   
			{
				$_SESSION['combat']->criCombat();
			}
			elseif ($_GET['button']=='attaque')
			//Si attaque, attaquer le personnage designé comme cible selon le tours.    
			{
				$_SESSION['combat']->duel($_SESSION['perso1'], $_SESSION['perso2']);
			}
		}

		?>
</div>

<div class="tours-de-bataille">
		<?php

	//Affichage des tours

		if (!isset($_POST['humain'])) 
		//S'il s'agit d'une partie en cours et que les données n'ont pas été reçu par la methode $_POST
		{	
			if ($_SESSION['perso1']->getPtVie() <=0 OR $_SESSION['perso2']->getPtVie() <=0)
			// Indiquer que le combat est terminé
			{
				echo '<p class="text-tours"> Le combat est terminé ! </p><br/>';
			}
		} 

	//Affichage des boutons et avatars

		if ($_SESSION['perso1']->getPtVie() <=0 OR $_SESSION['perso2']->getPtVie() <=0)
		// Si un des personnages est mort, afficher uniquement le bouton nouvelle partie 
		{
			echo ' <a href="index.php?button=newGame"><div class="reset-button"> Nouvelle Partie </div></a>';
		}
		elseif (isset($_POST['humain']) AND isset($_POST['animal']))
		//Si les données ont été reçu par la methode $_POST, afficher les avatars, le bouton commencer la partie et le bouton nouvelle partie  
		{
			echo ' <div class="personnage-versus"> <div class="avatar-pv"> ' . $_SESSION['perso1']->getAvatar() . '<br/>' . $_SESSION['perso1']->getPtVie() . ' PV </div> <span class="text-versus"> VS </span> <div class="avatar-pv">' . $_SESSION['perso2']->getAvatar() . '<br/>' .  $_SESSION['perso2']->getPtVie() . ' PV </div></div><br/>';

			echo ' <a href="index.php?button=start"><div class="start-button"> Commencer la Partie </div></a> <a href="index.php?button=newGame"><div class="reset-button"> Nouvelle Partie </div></a>';
		}
		else
		{
			echo ' <div class="personnage-versus"> <div class="avatar-pv"> ' . $_SESSION['perso1']->getAvatar() . '<br/>' . $_SESSION['perso1']->getPtVie() . ' PV </div> <span class="text-versus"> VS </span> <div class="avatar-pv">' . $_SESSION['perso2']->getAvatar() . '<br/>' . $_SESSION['perso2']->getPtVie() . ' PV </div></div><br/>';
            
            if ($_SESSION['combat']->getTours() %2)
            //Si le tours est un nombre impaire, afficher les avatars, le bouton attaquer perso2, et le bouton nouvelle partie 
            {
                echo ' <a href="index.php?button=attaque"><div class="fight-button"> Attaquer ' . $_SESSION['perso2']->getName() .  ' </div></a> <a href="index.php?button=newGame"><div class="reset-button"> Nouvelle Partie </div></a>';
            }
            else
            //Sinon, si le tours est un nombre paire, afficher les avatars inverse, le bouton attaquer perso1, et le bouton nouvelle partie
            {
                echo ' <a href="index.php?button=attaque"><div class="fight-button"> Attaquer ' . $_SESSION['perso1']->getName() . ' </div></a> <a href="index.php?button=newGame"><div class="reset-button"> Nouvelle Partie </div></a>';
            }
		}

		?>		
</div>