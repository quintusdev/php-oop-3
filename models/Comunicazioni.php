<?php
    class Comunicazioni {
            private $mittente;
            private $titolo;
            private $messaggio;
            private $destinatario;
            static private $ringtone;
        
            public function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, String $ringtone){
                $this->mittente = $mittente;
                $this->titolo = $titolo;
                $this->messaggio = $messaggio;
                $this->destinatario = $destinatario;
                $this->ringtone = $ringtone;
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

        public function setRingTone(){
            return 'DRIIIN';
        }

        public function getRingTone(){
            return $this->ringtone;
        }

    }
?>