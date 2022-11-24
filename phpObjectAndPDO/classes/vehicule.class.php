<?php
class Vehicule{

    private string $couleur, $modele;
    private int $puissance;

    function __construct(?String $couleur,?String $modele,?int $puissance){
        $this->couleur=$couleur;
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

    

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Set the value of puissance
     *
     * @return  self
     */ 
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }
}


?>