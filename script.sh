rm -rf site
mkdir site
php-cgi -f index.php page=accueil > site/index.html
php-cgi -f index.php page=competences > site/competences.html
php-cgi -f index.php page=experiences > site/experiences.html
php-cgi -f index.php page=formation > site/formation.html
mkdir site/styles
cp styles/* site/styles/

