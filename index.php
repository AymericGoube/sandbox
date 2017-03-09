<?php include("env.php"); ?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Ma boutique</title>
    </head>

    <body>
        <header>
            <h1>Ma boutique</h1>
        </header>
<?php
$entries = scandir($products_dir);
$entries = array_diff($entries, array(".", ".."));
?>
        <nav>
            <ul>
<?php
    echo_basket_link("li");
?>
            </ul>
        </nav>
        <main>
            <ul>
<?php
    foreach($entries as $entry)
    {
        $entry = basename($entry, ".php");

        echo "<li><a href=\"product.php?wanted=$entry\">$entry</a></li>\n";
    }
?>
            </ul>
        </main>
    </body>

</html>

