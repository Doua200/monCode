<?php
class Personne {
private String $_nom;
private String $_prenom;

public function __constructor(string $prenom, string $nom){
    $this->_prenom = $prenom;
    $this->_nom = $nom;
    
    }


public function __destruct()
    {
        echo "l'instance vient d'être détruite.";
  }
public function __debugInfo()
{
 return ['name'=>$this_nom, 'first_name'=>$this_prenom];   
}

public function saluer(string $mot) {
    echo "$mot $this->_prenom\n";
}

public function __call($name, $arguments)
{
    echo "la methode " .$name. "a été appelé avec les paramètres suivants\n";
    var_dump($arguments);
}

}
?>





