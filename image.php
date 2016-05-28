<?php include ('menu.php');
?>
Choisissez un fichier sur votre ordinateur :

<form enctype="multipart/form-data" action="image_change.php" method="POST">
<input name="userfile" type="file"/>
<input type="submit"/>
<?php include ('footer.php');?>
