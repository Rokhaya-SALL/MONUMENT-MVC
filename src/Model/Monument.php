<?php 
namespace App\Model;

use Exception;

// --------------------------------
// Classe des monuments
// --------------------------------

class Monument {

    private int $id;
    private string $nom;
    private string $pays;
    private string $ville;
    private int $nbVisitesAn;

   public function hydrate(string $nom, string $pays, string $ville, int $nbVisitesAn){

        $this->setNom($nom);
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setNbVisitesAn($nbVisitesAn);

   }

   

    public function getId() : int {
        return $this->id;
    }
    public function setId(int $id) : void {
        $this->id = $id;
    }

    public function getNom() : string {
        return $this->nom;
    }
    public function setNom(string $nom) : void {
        $this->nom = $nom;
    }

    public function getPays() : string {
        return $this->pays;
    }
    public function setPays(string $pays) : void {
        $this->pays = $pays;
    }

    public function getVille() : string {
        return $this->ville;
    }
    public function setVille(string $ville) : void {
        $this->ville = $ville;
    }

    public function getNbVisitesAn() : int {
        return $this->nbVisitesAn;
    }
    public function setNbVisitesAn(int $nbVisitesAn) : void {
        if ($this->validateNbVisitesAn($nbVisitesAn)) {
            $this->nbVisitesAn = $nbVisitesAn;
        }else {
            throw new Exception("Le nombre de visiteur doit être supérieur à 0");    
        }
    }
       

    public function validateNbVisitesAn(int $nbVisitesAn):bool{
        if ($nbVisitesAn > 0 ) {
            return true;
        }else {
            return false;
        }
    }
    
}

