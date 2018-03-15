<?php
define('VIEW', 'views/');
define('CONTROLLER', 'controllers/');
define('MODEL', 'model/');

// FONCTIONS

function present()
{
    require(VIEW . 'presentation.php');
}

function stock()
{
    require(VIEW . 'stock.php');
}

function stock_item()
{
    require(VIEW . 'stock-item.php');
}

function contact()
{
    require(VIEW . 'contact.php');

}
