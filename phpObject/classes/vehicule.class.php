<?php
class Vehicule{

    private string $couleur, $modele;
    private int $puissance;

    protected function __construct(string $couleur,string $modele,int $puissance){
        $this->couleur = $couleur;
        $this->modele = $modele;
        $this->puissance = $puissance;
    }

    public function getCouleur():string{
        return $this->couleur;
    }

    public function getModele():string{
        return $this->modele;
    }

    public function getPuissance():int{
        return $this->puissance;
    }

    public function __toString()
    {
        return serialize($this);
    }
}


?>