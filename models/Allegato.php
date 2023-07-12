<?php
    class Allegato{
            private $formato;
            private $dimensione;
            private $contenuto;

            function __construct(String $formato, Float $dimensione, String $contenuto){
                $this->formato = $formato;  
                $this->dimensione = $dimensione;  
                $this->contenuto = $contenuto;                 
            }

            public function getFormato(){
                return $this->formato;
            }

            public function getDimensione(){
                return $this->dimensione;
            }

            public function getContenuto(){
                return $this->contenuto;
            }
        }
?>