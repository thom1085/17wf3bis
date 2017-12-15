<!DOCTYPE html>
<html>

<head>

<title>The Best Website ever</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<h1>truely the best website ever</h1>

<p>you won't believe how good this will be. really good. incredibly good.</p>

<h3>Still very good</h3>

<img id="moi" src="http://localhost/wf3/introduction/img/tomb.jpg" alt=Moi>


<h1>la bande des ennemis</h1>

<?php 
echo "à";


$databaseMySQL  = "intro2";
$hostMySQL      = "localhost";
$userMySQL      = "root";
$passwordMySQL  = "";
$dsn            = "mysql:host=$hostMySQL;dbname=$databaseMySQL;charset=utf8";
$requeteSQL     = "SELECT * from personnes ORDER BY id DESC";$objetPDO           = new PDO($dsn, $userMySQL, $passwordMySQL);
$objetPDOStatement  = $objetPDO->query($requeteSQL);// LECTURE DES LIGNES TROUVEES
while($tabLigne = $objetPDOStatement->fetch() )
{
   // RECUPERER LES INFOS DES COLONNES POUR CHAQUE LIGNE
   $nom      = $tabLigne["nom"];
   $prenom    = $tabLigne["prenom"];    
   // CONSTRUCTION ET AFFICHAGE DU CODE HTML
   echo
<<<CODEHTML
   <article>
       <li>$prenom $nom</li>
   </article>
CODEHTML;

}

?>


<img onclick="cacher();" src="http://localhost/wf3/introduction/img/button.png" alt= button>



<h6>less good</h6>



<a href="www.dailymail.co.uk">Here is a terrible newspaper</a>

<script type="text/javascript" src="js/intro.js"></script> 

</body>

</html>