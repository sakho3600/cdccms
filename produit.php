<?php
include('menu.php');
include('files.php');

if (file_exists('categories.dat')){ $cats=unserialize(file_get_contents('categories.dat'));}
else {echo 'Vous devez créer des catégories avant de créer des articles.</td></tr></table></body/></html>';die();}


?>
<em>Créer un produit :</em>
<form method="POST" action="produit_2.php">
	Nom du produit : <input name="nom" size="22"/><br/>
	Description :<textarea cols="80" rows="12" name="description"></textarea><br/>
	Catégorie : <select name="categorie">
				<?php
				foreach ($cats as $cat){
				echo '<option value="'.htmlspecialchars($cat['nom']).'">'.htmlspecialchars($cat['nom']).'</option>';
				
			}				
				?></select><br/>Prix (optionnel) :<input type="text" name="prix" /><input type="submit"/>
				

</form>
<?include ('footer.php');?>
