<?php
    class Sms extends Comunicazioni {
        private $notifica_lett;
        private $risposta;
        static public $colorled = 'green';

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, $notifica_lett, $risposta){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);
            $this->notifica_lett = $notifica_lett;                 
            $this->risposta = $risposta;  
        }

        public function Invia(){
            return 'SMS Inviato!';
        }

        public function Risposta(){
            return 'Risposta inviata';
        }

        public function getNotifica_lett(){
            return $this->notifica_lett;
        }

        public function getRisposta(){
            return $this->risposta;
        }

       
    }

?>