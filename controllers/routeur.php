<?php

if (isset($_GET['action'])) {
    $action = 'défault';
} else {
    $action = $_GET['action'];
}
//  structure ternaire équivalent à :
// $action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';

 ?>
