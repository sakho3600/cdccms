<?php
include ('menu.php');
include ('files.php');
if (!file_exists('categories.dat')){echo 'Aucune categorie pour le moment !';include ('footer.php');die();}
$cats=read("categories.dat");
if (count($cats)==0){echo 'Aucune categorie pour le moment !';include ('footer.php');die();}

foreach ($cats as $cat)
{
	
	
	echo $cat['nom'].' '.$cat['description'].' <form method="POST" action="categorie_suppr_2.php"><input type="hidden" name="nom" value="'.htmlspecialchars($cat['nom']).'"/><input type="submit" value="supprimer"/></form><br/>';
}

?>


<?php include ('footer.php');
