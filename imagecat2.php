<?php include('menu.php');
include ('files.php');

if (file_exists('./imagecat.dat')){$data=unserialize(file_get_contents('./imagecat.dat'));}
else
{$data=array();}

$name=str_replace('.php','',$_FILES['userfile']['name']);

move_uploaded_file ($_FILES['userfile']['tmp_name'],'./images/'.$name);
array_push ($data, array($_POST['categorie'], 'url'=>$name));
file_put_contents('./imagecat.dat',serialize($data));

?>
<em>Image ajoutée ! </em>
<?php include ('footer.php'); ?>
