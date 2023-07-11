<?php
    class Comunicazioni {
        private $mittente;
        private $titolo;
        private $messaggio;
        private $destinatario;
        public $ringtone;
    
        public function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario){
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
            $this->destinatario = $destinatario;
        }

        public function Invia(){
            return 'Comunicazione Inviata!';
        }

        public function getMittente(){
            return $this->mittente;
        }

        public function getTitolo(){
            return $this->titolo;
        }

        public function getMessaggio(){
            return $this->messaggio;
        }

        public function getDestinatario(){
            return $this->destinatario;
        }

        public function setRingTone($ringtone){
            $this->ringtone = $ringtone;
        }

        public function getRingTone(){
            return $this->ringtone;
        }

    }
?>