<?php
class Pays 
{
    private string $_nomPays;


    public function __construct(string $_nomPays) {
        $this->_nomPays= $_nomPays;
        }

 public function getNomPays():string {
            return $this->_nomPays;
        }


}


?>