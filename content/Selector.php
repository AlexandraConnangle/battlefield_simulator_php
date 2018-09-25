
<div class="selector">
    
	<h2>Selection des combattants : </h2>
    
	<form method="post" action="index.php">

		<p>
			Quel personnage souhaitez vous jouer ?
		</p>
		<div class="personnage-group">
			<div class="personnage-select">
                <img src="images/peasant.png">
				<label for="paysan">Paysan</label>
				<input type="radio" name="humain" value="paysan" id="paysan">
			</div>

			<div class="personnage-select">
				<img src="images/soldier.png">
				<label for="fantassin">Fantassin</label>
				<input type="radio" name="humain" value="fantassin" id="fantassin">
			</div>

			<div class="personnage-select">
                <img src="images/knight.png">
				<label for="chevalier">Chevalier</label>
				<input type="radio" name="humain" value="chevalier" id="chevalier">
			</div>
		</div><br/>

		<p>
			Quel personnage souhaitez vous combattre ?
		</p>
		<div class="personnage-group">
			<div class="personnage-select">
				<img src="images/chicken.png">
				<label for="poulet">Poulet</label>
				<input type="radio" name="animal" value="poulet" id="poulet">
			</div>

			<div class="personnage-select">
				<img src="images/torus.png">
				<label for="taureau">Taureau</label>
				<input type="radio" name="animal" value="taureau" id="taureau">
			</div>

			<div class="personnage-select">
				<img src="images/dragon.png">
				<label for="dragon">Dragon</label>
				<input type="radio" name="animal" value="dragon" id="dragon">
			</div>
		</div>
		<br/>
		<br/>
		<input type="submit" name="envoyer" class="valid-selector">	
	</form>
</div>