<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin du site</title>
</head>
<body>
<h1>Admin du site</h1>
<div id="menu">
    <a href="./">Retour sur l'accueil</a>
</div>
<div id="contenu">
        <ul>
            <li><a href="?admin&ajout">Ajouter un article</a></li>
        </ul>
    <?php
    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?article=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
            <!-- ici le foreach pour les categ -->
            <p><?= $item['texte'] ?> ... <a href="?article=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?> <img width="16" height="16" src="vues/img/update.png" alt="Modifier l'article" onclick="document.location='?admin&modif=<?= $item['idarti'] ?>';"/> | <img width="16" height="16" src="vues/img/delete.png" alt="Modifier l'article" onclick="document.location='?admin&sup=<?= $item['idarti'] ?>';"/></p>
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
</html>
