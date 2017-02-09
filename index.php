<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Journal de bord</title>
    </head>

    <body>
        <header>
            <h1>Journal de bord</h1>
        </header>
<?php

$articles_dir = "billets";
$show_article = false;

if(isset($_GET['wanted']))
{
    $article_path = "$articles_dir/" . $_GET["wanted"] . ".php";

    // inclure l'article : attention à la faille include,
    // ne faire l'inclusion que si le chemin demandé est
    // vraiment dans le bon répertoire

    if(
        dirname(
            realpath($article_path)
        ) == (
            realpath("./$articles_dir")
        )
    )
    {
        $show_article = true;
?>
            <nav>
                <ul>
                    <li><a href=".">accueil</a></li>
                </ul>
            </nav>
            <main>
                <?php include($article_path); ?>
            </main>
<?php
    }
}

if(!$show_article)
{
?>
            <nav>
                <ul>
<?php
    // lister le contenu d'un répertoire dans un tableau : scandir
    // http://php.net/manual/fr/function.scandir.php
    // attention à l'ordre

    $entries = scandir($articles_dir, SCANDIR_SORT_DESCENDING);

    // supprimer . et .. : différence de 2 tableaux

    $entries = array_diff($entries, array(".", ".."));

    // parcourir tous les éléments d'un tableau : foreach
    // http://php.net/manual/fr/control-structures.foreach.php

    foreach($entries as $entry)
    {
        // récupérer le nom du fichier dans un chemin,
        // et supprimer l'extension : basename
        // http://php.net/manual/fr/function.basename.php
        $entry = basename($entry, ".php");

        // guillemets doubles (") vs simples (') :
        // intégrer une variable directement dans la chaîne
        // http://php.net/manual/fr/language.types.string.php
        echo "<li><a href=\"?wanted=$entry\">$entry</a></li>\n";
    }
?>
                </ul>
            </nav>
<?php
}
?>
    </body>

</html>

