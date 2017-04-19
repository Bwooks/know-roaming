<?php
    switch($_GET['page']) {
        case '404':
            require('not_found.php');
        default:
            require('includes/home.php');                   //Functions for home page
            include('templates/pages/home/home_template.php');        //Homepage template that uses above functions
    }
?>

    