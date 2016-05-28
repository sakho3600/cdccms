<?php include ('menu.php');
include ('files.php');
echo '<h1>Modification globale de la carte</h1>';
if (file_exists('categories.dat')) {
	$cats=unserialize(file_get_contents('categories.dat'));
	if (file_exists('produits.dat')) {
		$prods=unserialize(file_get_contents('produits.dat'));
		echo '<table><tr><td><em>catégorie</em></td><td>nom du produit</td><td>description</td><td>prix</td><td>valider pour ce produit</td></tr>';
		
		foreach ($cats as $cat){
			foreach ($prods as $prod) {
				
			if ($prod['categorie']===$cat['nom']){	
				
				?>
				<tr>
					<form style="display:inline;" method="post" action="modification_rapide_2.php"/>
					<input type="hidden" name="oldcat" value="<?php echo htmlspecialchars($prod['categorie']);?>"/>
					<input type="hidden" name="oldname" value="<?php echo htmlspecialchars($prod['nom']);?>"/>
					<td><select name="categorie">
						<?php
						
						foreach ($cats as $neko){
							echo '<option value="'.htmlspecialchars($neko['nom']).'"';
							if ($prod['categorie']===$neko['nom']){
								echo ' selected ';
							}
							echo '>'.htmlspecialchars($neko['nom']).'</option>';
							
						}
						
						?>
					
					</select></td>
					<td>
					<input type="text" name="nom" value="<?php echo htmlspecialchars($prod['nom']);?>"/>
					</td>
					<td>
					<input type="text" size="40" name="description" value="<?php echo htmlspecialchars($prod['description']);?>"/>
					</td>
					<td>
					<input type="text" name="prix" value="<?php echo htmlspecialchars($prod['prix']);?>"/>
					
					</td>
					<td><input type="submit"/></td>
					</form>
				
				</tr>
				
				
				<?php
				
			}
				
			}
			
			}
		
		
		
		echo '</table>';
	
}
else {echo 'Merci de créer tout d\'abord de nouveaux produits';}
	
}
else {echo 'Merci de créer tout d\'abord des catégories';}

include ('footer.php');
?>
