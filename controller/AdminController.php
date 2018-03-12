<?php
/**
<<<<<<< HEAD
 * Contrôleur gérant l'adùministration
 */

=======
 * Contrôleur gérant l'administration
 */
>>>>>>> 49abb54f14e2567a6c7c4680aea9138f0940eb9a
// chargement des modeles
require_once "modeles/ArticleModele.php";

// on récupère les résumés d'articles depuis arti
$articles = listeArtiAccueil($mysqli);

// on prend la vue
require_once "vues/Admin.html.php";
