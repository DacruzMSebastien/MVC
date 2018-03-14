<?php

require('controllers/routeur.php');

try {
  include(VIEW . 'header.php');

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'presentation') {
            present();
        }
        elseif ($_GET['action'] == 'stock') {
            stock();
        }
        elseif ($_GET['action'] == 'stock-item') {
            stock_item();
        }
        elseif ($_GET['action'] == 'contact') {
            contact();
        }

    }
    else {
        include(VIEW . 'vcard.php');
    }
}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}



include(VIEW . 'footer.php');

 ?>
