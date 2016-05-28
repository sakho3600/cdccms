<?php include('menu.php');
include('files.php');

?>
<h3>Créer une catégorie</h3>
<form action="categorie_creer_2.php" method="POST">Nom : <input type="text" name="categorie_nom" size="22"/>
<br/>Description (optionnel)<input type="text" name="categorie_description" size="22"/><br/><input type="submit"/></form>
<?php include ('footer.php'); ?>
