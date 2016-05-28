<?php include('header.php');

if (isset ($_GET['logout'])){
	session_unset();
}

if ($_SESSION['loggued']!==true)
	{echo '<body>Votre session a expiré. Merci de vous reconnecter</body></html>';
	die();
	}?>
<table border=2><tr><td>
<ul>
<h2>Si vous avez déjà rempli votre carte : </h2>
<h3>Modifier la carte existante</h3>
<li><a href="modification_rapide.php">Modification globale de la carte</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Cette option vous permet de modifier rapidement votre carte : changer globalement les prix, changer le nom ou les ingrédients d'un ou plusieurs articles...</span>
</li>
<li><a href="modification_ordre_categories.php">Modifier l'ordre des catégories</a> ou <a href="modification_ordre.php">des produits</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Cette option vous permet de modifier l'ordre selon lequel vos produits ou vos catégories s'affichent sur la carte. </span></li>
<h2>Si vous venez juste de créer la page</h2><h4>il est temps de définir votre carte</h4>
<h3>Titres</h3>
	<li><a href="titre.php">Changer le titre de votre site</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Le titre de votre site est très important pour votre classement dans les moteurs de recherche. Ex : ~Pizza Chez Cyril~</span>
</li>
<li><a href="title.php">Changer le titre qui s'affichera dans la barre en haut de la fenêtre</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Ce titre est celui qui s'affichera en haut de la fenêtre, dans les pages de résultats de recherche et les partages sur les réseaux sociaux. Inclure le nom de votre ville peut être une bonne idée. Ex : Chez Cyril - Janneyrias </span>
</li>
<h3>Horaires et localisation</h3>
<li><a href="description.php">Changer les horaires et la localisation géographique</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Ici vous indiquerez vos deux principaux sous-titres. Vous pouvez y mettre ce que vous voulez, mais il est recommandé d'indiquer dans le premier vos horaires d'ouverture, et dans le second votre localisation géographique. </span>
</li>
<li><a href="gps.php">Changer les coordonnées GPS</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Les coordonnées GPS sont très importantes. Non seulement elles aident les clients potentiels à vous trouver, mais aussi, elle assurent un bon classement local dans les résultats de recherche. N'oubliez pas de les indiquer. Si vous ne connaissez pas vos coordonnées GPS exacte, vous pouvez indiquer celle de votre ville, que vous trouverez par exemple sur l'encyclopédie en ligne <a target="new" href="http://fr.wikipedia.org/wiki">Wikipédia</a>. </span>
</li>
<li><a href="livraison.php">Indiquer la zone de livraison (optionnel)</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Si vous livrez à domicile, vous pouvez indiquer ici les localités desservies et les conditions de livraison (ex : "Livraison à domicile sur ville1, ville2, ville3. Pas de paiement CB en livraison. Minimum 2 pizzas"). Pour supprimer l'option livraison, entrez simplement une chaine vide. </span>
</li>
<h3>Image d'en-tête</h3>
<li><a href="image.php">Ajouter ou remplacer l'image d'en tête</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Un site avec une image d'en tête, c'est plus sympa ! Prenez une photo de votre salle ou de votre devanture et importez là grâce à l'option suivante. Attention ! Pour un temps de chargement optimal, n'oubliez pas de redimensionner l'image en <em>basse résolution</em>, par exemple 600 pixels de large, avec un éditeur d'image comme <a target="new" href="http://gimp.org">The Gimp</a> qui est gratuit (menu > Image > Echelle et taille de l'image). </span>
</li>
<li><a href="image_suppr.php">Supprimer l'image d'en tête</a> 
<a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Utiliser cette option si vous ne souhaitez plus afficher d'image. </span></li>
<h3>Catégories</h3>
<li><a href="categorie_creer.php">Créer une nouvelle catégorie</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Les produits (les plats) que vous avez en vente doivent être classés par catégorie ("entrée, plat, dessert... Ou Pizza base blanche, pizza base tomate...). Ces options permettent de créer ou de suprimmer des catégories. Astuce : si vous avez une catégorie qui apparait et disparait régulièremetn (ex : pizzas d'été, pizzas d'hivers), il vous suffit de la recréer avec le nom à l'identique pour retrouver immédiatement tous les produits qu'elle contenait auparavant, ils auront été sauvegardé. </span>
</li>
<li><a href="categorie_suppr.php">Supprimer une catégorie existante</a></li>
<h3>Articles</h3>
<li><a href="produit.php">Créer un nouveau produit</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">C'est le coeur de votre carte. Pour chaque produit figurant sur votre carte, vous pouvez indiquer son nom, sa catégorie, sa description (les ingrédients, par exemple), et, optionnellement, un prix (par exemple, 12€).</span>
</li>
<li><a href="produit_suppr.php">Supprimer un produit existant</a></li>
<h3>Contact</h3>
<li><a href="contact.php">Créer ou modifier les coordonnées de contact</a> <a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Ici indiquez ce qui viendra en bas de page. C'est le bon endroit pour indiquer un numéro de téléphone pour commander ou réserver. </span>
</li>
<h3>Afficher le site</h3>
<li><a target="new" href="./">Afficher le site</a>
<a href="javascript:void(0);" onclick="this.nextSibling.style.display='inline';">?</a><span style="display:none;">Une fois que vous aurez remplis les différents champs précédent, votre site est terminé. Vous pouvez l'afficher. </span></li>
<li><a href="?logout=logout">Se déconnecter</a></li>
</ul>
Note : tous les champs texte peuvent librement contenir du code HTML (module social Facebook, lien, etc). Pour entrer les symboles &lt; ou &gt; qui sont utilisés pour délimiter un tel code, entrez à la place &amp;lt; ou &amp;gt; 


</td><td>
