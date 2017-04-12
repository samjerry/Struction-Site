<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------

// hier komen de instellingen van deze web app
include 'includes/config.php';

// hier komt de head sectie <head> etc.
include 'views/head.php';

// hier komt de header sectie etc.
include 'views/header.php';

// hier komt de navigatie
include 'views/menu.php';

// hier komt de content van de home page
include 'views/home.php';

switch ($_GET['page']) {
  case 'contact':
    include'views/contact.php';
    break;

  default:
    include'views/home.php';
    break;
}

// hier komt de footer
include 'views/footer.php'
?>
