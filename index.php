<?php
    $page = 'accueil';
    $allowed_pages = array(
        'accueil',
        'competences',
        'experiences',
        'formation'
    );

    if(in_array($_GET['page'], $allowed_pages))
    {
        $page = $_GET['page'];
    }
?>
<!doctype html>
<html>

    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" media="all" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic">
        <link rel="stylesheet" type="text/css" media="all" href="styles/main.css">

        <?php
            if(file_exists('pages/'.$page.'.head.php'))
            {
                include('pages/'.$page.'.head.php');
            }
        ?>

    </head>

    <body class="flex-column">

        <main class="content-wrapper flex-1 overflow-auto">
            <header class="site-header">
                <h1 class="site-title">Romain Guillemot</h1>
                <ul class="site-subtitle">
                    <li>Développeur</li>
                    <li>Architecte<br>logiciel</li>
                    <li>Formateur</li>
                </ul>
                <aside>
                    <ul class="social-bar a-row align-right">
                        <li><a href="https://github.com/wasthishelpful" class="a-button"><i class="fa fa-2x fa-github"></i> on GitHub</a></li>
                        <li><a href="http://stackoverflow.com/users/6612932/wasthishelpful" class="a-button"><i class="fa fa-2x fa-stack-overflow"></i> on Stack Overflow</a></li>
                    </ul>
                </aside>
            </header>

            <?php
                if(file_exists('pages/'.$page.'.body.php'))
                {
                    include('pages/'.$page.'.body.php');
                }
            ?>
        </main>

        <nav class="site-menu">
            <ul class="a-row">
                <li><a href="?page=accueil" class="a-button"><i class="fa fa-3x fa-home"></i><br>Accueil</a></li>
                <li><a href="?page=competences" class="a-button"><i class="fa fa-3x fa-bar-chart"></i><br>Compétences</a></li>
                <li><a href="?page=experiences" class="a-button"><i class="fa fa-3x fa-handshake-o"></i><br>Expériences</a></li>
                <li><a href="?page=formation" class="a-button"><i class="fa fa-3x fa-book"></i><br>Formation</a></li>
            </ul>
        </nav>

    </body>

</html>

