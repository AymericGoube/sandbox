<?php

session_start();

$products_dir = "produits";

function echo_link($href_, $inner_, $container_type_ = "")
{
    $text = '<a href="'.$href_.'">'.$inner_.'</a>';
    if($container_type_ != "")
    {
        $text = "<$container_type_>$text</$container_type_>";
    }
    echo $text;
}

function echo_home_link($container_type_ = "")
{
    echo_link(
        "index.php",
        "Accueil",
        $container_type_
    );
}

function echo_basket_link($container_type_ = "")
{
    echo_link(
        "basket.php",
        "Panier",
        $container_type_
    );
}

?>

