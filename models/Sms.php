<?php
    class Sms extends Comunicazioni {
        private $notifica_lett;
        private $risposta;
        public $ringtone;
        static public $colorled = 'green';

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, $notifica_lett, $risposta, $ringtone){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);
            $this->notifica_lett = $notifica_lett;                 
            $this->risposta = $risposta;
            $this->ringtone = $ringtone;       
        }

        public function Invia(){
            return 'SMS Inviato!';
        }

        public function Risposta(){
            return 'Risposta inviata';
        }

       
    }

?>