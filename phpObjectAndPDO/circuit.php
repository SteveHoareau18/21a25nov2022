<?php
class Circuit{

    private string $nom, $lieu;
    private int $km;

    public function __construct($nom,$lieu,$km)
    {
        $this->nom = $nom;
        $this->lieu = $lieu;
        $this->km = $km;
    }

}
?>