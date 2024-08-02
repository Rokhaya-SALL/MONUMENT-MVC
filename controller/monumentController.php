<?php

// --------------------------------
// Contrôleur des monuments
// --------------------------------

use App\Model\Monument;
use App\Model\MonumentManager;

if(!empty($_GET['action'])) {
    if($_GET['action'] == 'create') {
        if(!empty($_POST['nom']) && !empty($_POST['pays']) && !empty($_POST['ville']) && $_POST['nb_visites_an'] != ''){
            try {
                $monument = new Monument;
                $monument->hydrate($_POST['nom'], $_POST['pays'], $_POST['ville'], $_POST['nb_visites_an'] );
                MonumentManager::create($monument);
                $success = 'Les informations obligatoires ont bien étés reçues';
            } catch(Exception $error) {}
           
        }else{
            $error = new Exception ('Tous les champs sont obligatoires');
        }
        require_once 'view/createMonumentForm.php';
        
    } elseif ($_GET['action'] == 'update') {
       if (!empty($_GET['monument_id'])) {
        try {

            $monument = MonumentManager::getOne($_GET['monument_id']);
            if(!empty($_POST)){ 
                if(!empty($_POST['nom']) && !empty($_POST['pays'])&& !empty($_POST['ville']) && ($_POST['nb_visites_an']!="")){ 
                    try{
                        $monument->hydrate($_POST['nom'], $_POST['pays'], $_POST['ville'], $_POST['nb_visites_an']); 

                        MonumentManager::update($monument); 
                        $success = "Le monument a été mis à jour avec succès"; 

                    }catch(Exception $error) { } 
                }else{
                    $error = new Exception ('Tous les champs sont obligatoires'); 
                }
            }
            require_once 'view/updateMonumentForm.php'; // Inclue le formulaire de modification
            $success = 'Monument trouvé dans la base de données';
            
          
            require_once 'view/updateMonumentForm.php';
        }catch(Exception $error) {
            require_once 'view/404View.php';
        }
       }else {
        require_once 'view/404View.php';
       }
       
    }elseif( $_GET['action'] == 'delete'){
        if(!empty($_GET['monument_id'])){
            try {
                $monument = MonumentManager::getOne($_GET['monument_id']);
                if(!empty($_POST['confirm'])){
                    if($_POST['confirm'] == 'OUI'){
                        try{
                            MonumentManager::delete($monument);
                            $success = 'Monument supprimé avec succès';
                        }catch(Exception $error) {}
                    }else{
                        header('Location:?page=monument&monument_id='.$monument->getId());
                        exit;
                    }
                }
                require_once 'view/deleteMonumentForm.php';
            }catch(Exception $error){
                require_once 'view/404View.php';
            }
        }else{
            require_once 'view/404View.php';
        }
    }else{
        require_once 'view/404View.php';
    }
} elseif( !empty($_GET['monument_id']) ){

    try {
        $monument = MonumentManager::getOne( intval($_GET['monument_id']) );
        require_once 'view/monumentView.php';
    }catch(Exception $error) {
        require_once 'view/404View.php';
    }
    
}else{ 
    $monuments = MonumentManager::getAll();
    require_once 'view/monumentsView.php';
}
