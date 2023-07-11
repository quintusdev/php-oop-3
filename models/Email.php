<?php
    class Email extends Comunicazioni {
        private $allegati;
        private $notifica_cons;
        private $inoltra;
        private $stampa;
        private $suono;
        static private $ringtone;

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, String $allegati, String $notifica_cons, String $inoltra, String $stampa, String $ringtone, String $colorled){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);
            $this->allegati = $allegati;  
            $this->notifica_cons = $notifica_cons;  
            $this->inoltra = $inoltra;                 
            $this->stampa = $stampa;
            $this->ringtone = $ringtone;
            $this->colorled = $colorled;
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

        public function setRingTone(){
            return 'DRIIIN';
        }

        public function getRingTone(){
            return $this->ringtone = $ringtone;
        }
        
    }


?>