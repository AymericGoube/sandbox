<?php include("env.php"); ?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Ma boutique</title>
    </head>

    <body>
        <header>
            <h1>Mon produit</h1>
        </header>
        <nav>
            <ul>
<?php
echo_home_link("li");
echo_basket_link("li");
?>
            </ul>
        </nav>
        <main>
<?php
if(isset($_GET['wanted']))
{
    $product_path = "$products_dir/" . $_GET["wanted"] . ".php";

    if(
        dirname(
            realpath($product_path)
        ) == (
            realpath("./$products_dir")
        )
    )
    {
        include($product_path);
?>
            <aside>
                <a href="basket.php?action=add&product=<?php echo $_GET["wanted"]; ?>">Ajouter au panier</a>
            </aside>
<?php
    }
}
?>
        </main>
    </body>

</html>

