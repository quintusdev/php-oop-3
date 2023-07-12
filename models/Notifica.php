<?php
    class Notifica extends Comunicazioni {
        private $icona;
        private $visibile;
        static public $colorled = 'Blue';

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, $icona, $visibile){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);   
            $this->icona = $icona;                 
            $this->visibile = $visibile;
        }

        public function getIcona(){
            return $this->icona;
        }

        public function getVisibile(){
            return $this->visibile;
        }

        public function Invia(){
            return 'Notifica Inviata!';
        }

        public function onClick(){
            return 'Apro l\'applicazione collegata al bottone';
        }
    }

?>