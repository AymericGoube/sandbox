<?php
include("env.php");

$basket = [];

if(isset($_SESSION["basket"]))
{
    $basket = $_SESSION["basket"];
}

if(isset($_GET['action']) && isset($_GET['product']))
{
    if($_GET['action'] === "add")
    {
        $basket[] = $_GET['product'];
    }
    else if($_GET['action'] === "remove")
    {
        $index = array_search($_GET['product'], $basket);

        if($index !== FALSE)
        {
            array_splice($basket, $index, 1);
        }
    }
}

$_SESSION["basket"] = $basket;
?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Ma boutique</title>
    </head>

    <body>
        <header>
            <h1>Ma boutique - panier</h1>
        </header>
        <nav>
            <ul>
<?php
echo_home_link("li");
?>
            </ul>
        </nav>
        <main>
            <ul>
<?php
    foreach($basket as $product)
    {
        echo
            '<li><a href="product.php?wanted='.
            $product.
            '">'.
            $product.
            '</a>(<a href="?action=remove&product='.
            $product.
            '">Supprimer</a>)</li>';
    }
?>
            </ul>
        </main>
    </body>

</html>

