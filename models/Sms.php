<?php
    class Sms extends Comunicazioni {
        private $notifica_lett;
        private $risposta;
        static private $ringtone;
        static private $colorled;

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, $notifica_lett, $risposta, $ringtone, $colorled){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);
            $this->notifica_lett = $notifica_lett;                 
            $this->risposta = $risposta;
            $this->ringtone = $ringtone;
            $this->colorled = $colorled;         
        }

        public function Invia(){
            return 'SMS Inviato!';
        }

        public function Risposta(){
            return 'Risposta inviata';
        }

        public function getRingTone(){
            return 'DRIIIN';
        }
    }

?>