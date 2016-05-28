<?php include('files.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
<title><?php if (file_exists('title.dat')) {echo unserialize(file_get_contents('title.dat'));}?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="geo.position" content="<?php
if (file_exists('gps.dat')) {
	$dat= unserialize(file_get_contents('gps.dat'));
	echo htmlspecialchars($dat['lat']).';'.htmlspecialchars($dat['lon']);
	
	
	}


?>" />
<style type="text/css">
/*<![CDATA[*/
        body {
        margin-left:3%;
        }
        h1{
        text-align:center;
        font-style:italic;
        color:rgb(182,00,00);
        }
        h2{
        text-align:center;
        font-style:italic;
        color:rgb(00,00,00);
        }
        h3{
        margin-left:22%;
        font-style:italic;
        color:rgb(182,00,00);
        }
        h4{
        display:inline;
        font-family:cursive;
        color:rgb(182,00,00);
        }
        div{
        color:black;
        }
        span{
        font-family:cursive;
        }
        .prix{
        font-style:bold;
        color:red;
        }
/*]]>*/
</style>

<style type="text/css">
/*<![CDATA[*/
 body.c1 {background-color:rgb(255,255,255);}
/*]]>*/
</style>
</head>
<body class="c1">

<a href="welcome.php">admin</a><div>
<h1><?php if (file_exists('titre.dat')) {echo unserialize(file_get_contents ('titre.dat'));}?></h1>
<h2>
<?php if (file_exists('description.dat')){
	$dat=unserialize(file_get_contents ('description.dat'));
	echo $dat['horaires'].'<br/>'.$dat['localisation'];
	
}?>
<?php if (file_exists('livraison.dat')){
	echo '<br/>'.unserialize(file_get_contents ('livraison.dat'));
	
}?>
</h2>
<center><?php if (file_exists('image.dat')) {echo '<img style="width:38%;" src="./'.unserialize(file_get_contents('image.dat')).'"/>';}?></center>
<div>
<?php $produits=unserialize(file_get_contents ('produits.dat'));

$categories=unserialize(file_get_contents ('categories.dat'));

foreach ($categories as $cat){
	echo '<h3>'.$cat['nom'].'</h3>';
	if (isset($cat['description'])&&$cat['description']!=='') {echo '<em>'.$cat['description'].'</em><br/>';}
	if (file_exists('imagecat.dat')){
		$imgcat=unserialize(file_get_contents ('imagecat.dat'));
		
		foreach ($imgcat as $myimgcat){
		if ($cat['nom']===$myimgcat['categorie']){
			$ran=true;
			echo '<table><tr><td><img style="width:80%;align:float-left" src="images/'.$myimgcat['categorie']['url'].'"/></td><td>';
			
		} 
	}
		
	}
	foreach ($produits as $prod){
		
		if ($cat['nom']===$prod['categorie']){
			echo '<h4>'.$prod['nom'].'</h4> <span>'.$prod['description'].'</span> <span class="prix">'.$prod['prix'].'</span><br/>';
		}
		
	}//foreach produit
	if ($ran){
		echo '</td></tr></table>';
		$ran=false;
	}
	
	
}//foreach categorie
?>


</div>
<div>
<h2><?php if (file_exists('contact.dat')){echo unserialize(file_get_contents('contact.dat')) ;}?></h2>
</div>
Site réalisé avec <a href="https://gtihub.com/shangril/cdccms">CdC CMS</a>
</body>
</html>
