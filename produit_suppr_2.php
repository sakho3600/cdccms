<?php
include ('menu.php');
include ('files.php');
if (!file_exists('produits.dat')){echo 'Aucun produit pour le moment !';include ('footer.php');die();}
$cats=unserialize(file_get_contents("produits.dat"));
if (count($cats)==0){echo 'Aucun article pour le moment !';include ('footer.php');die();}

$i=0;
$result=0;
foreach ($cats as $cat)
{
	if ($cat['nom']=$_POST['nom']){$result=$i;}
	$i++;


}

array_splice($cats, $result, 1);
file_put_contents ('produits.dat',serialize($cats));
echo 'Article supprimé';
?>


<?php include ('footer.php'); ?>
