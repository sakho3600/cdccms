<?php include('menu.php');
include ('files.php');

if (file_exists('./image.dat')){unlink (file_get_contents(unserialize('./image.dat')));}

$name=str_replace('.php','',$_FILES['userfile']['name']);

move_uploaded_file ($_FILES['userfile']['tmp_name'],'./'.$name);

file_put_contents('./image.dat',serialize($name));

?>
<em>Image ajoutée ! </em>
<?php include ('footer.php'); ?>
