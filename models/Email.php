<?php
    class Email extends Comunicazioni {
        private $allegato;
        public $notifica_cons;
        private $inoltra;
        private $stampa;
        public $ringtone;
        static public $colorled = 'yellow';

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, Allegato $allegato, String $notifica_cons, String $inoltra, String $stampa){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);
            $this->allegato = $allegato;
            $this->notifica_cons = $notifica_cons;  
            $this->inoltra = $inoltra;                 
            $this->stampa = $stampa;
        }

        public function Invia(){
            return 'E-Mail Inviata!';
        }

        public function Stampa(){
            return 'E-mail stampata';
        }

        public function Inoltra(){
            return 'E-mail inoltrata';
        }

        public function getNotificaCons(){
            return $this->notifica_cons;
        }

        /* public function setRingTone(){
            return 'DRIIIN';
        } */

        public function getRingTone(){
            return $this->ringtone = $ringtone;
        }
        
    }

    class Allegato{
        private $formato;
        private $dimensione;
        private $contenuto;

        function __construct(String $formato, Float $dimensione, String $contenuto){
            $this->formato = $formato;  
            $this->dimensione = $dimensione;  
            $this->contenuto = $contenuto;                 
        }


    }


?>