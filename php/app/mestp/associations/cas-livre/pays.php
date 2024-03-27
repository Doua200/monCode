<?php
class Pays {
    private string $nomPays;

    public function __construct(string $nomPays) {
        $this->nomPays = $nomPays;
    }

    
    public function getNomPays(): string {
        return $this->nomPays;
    }
}


?>