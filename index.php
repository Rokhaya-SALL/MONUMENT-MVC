<?php 
require_once'vendor/autoload.php';
// --------------------------------
// Routeur
// --------------------------------

if( !empty($_GET['page']) ) {

    if($_GET['page'] == 'monument'){
        require_once('controller/monumentController.php');
    }else{ 
        require_once('view/404View.php');
    }

} else {
    require_once('view/homeView.php');
}

