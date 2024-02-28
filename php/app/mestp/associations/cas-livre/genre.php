<?php
class Genre 
{
    public string $_intitule;


    public function __construct(string $_intitule) {
        $this->_intitule= $_intitule;
        }

     public function getGenre():string {
            return $this->_intitule;
        }
}


?>