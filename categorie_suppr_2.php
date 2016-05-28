<?php
include ('menu.php');
include ('files.php');
if (!file_exists('categories.dat')){echo 'Aucune categorie pour le moment !';include ('footer.php');die();}
$cats=unserialize(file_get_contents("categories.dat"));
if (count($cats)==0){echo 'Aucune categorie pour le moment !';include ('footer.php');die();}

$i=0;
$result=0;
foreach ($cats as $cat)
{
	if ($cat['nom']==$_POST['nom']){$result=$i;}
	$i++;


}

array_splice($cats, $result, 1);


file_put_contents ('categories.dat',serialize($cats));
echo 'Catégorie supprimée';
?>


<?php include ('footer.php'); ?>
