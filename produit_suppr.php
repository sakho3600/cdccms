<?php
include ('menu.php');
include ('files.php');
if (!file_exists('produits.dat')){echo 'Aucun produit pour le moment !';include ('footer.php');die();}
$cats=read("produits.dat");
if (count($cats)==0){echo 'Aucun produit pour le moment !';include ('footer.php');die();}

foreach ($cats as $cat)
{
	
	
	echo $cat['nom'].' '.$cat['description'].' '.$cat['prix'].' <form method="POST" action="produit_suppr_2.php"><input type="hidden" name="nom" value="'.htmlspecialchars($cat['nom']).'"/><input type="submit" value="supprimer"/></form><br/>';
}

?>


<?php include ('footer.php');
