<?php
    class Email extends Comunicazioni {
        private $notifica_cons;
        private $allegato;
        static public $colorled = 'yellow';

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, String $notifica_cons){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);
            $this->notifica_cons = $notifica_cons;
        }

        public function Invia(){
            return 'E-Mail Inviata!';
        }

        public function Inoltra(){
            return 'E-Mail Inoltrata!';
        }

        public function Stampa(){
            return 'E-Mail Stampata!';
        }

        public function getNotificaCons(){
            return $this->notifica_cons;
        }

        public function getAllegato(){
            return $this->allegato;
        }

        public function setAllegato($allegato){
            return $this->allegato = $allegato;
        }

        
        
    }

?>