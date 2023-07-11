<?php
    class Notifica extends Comunicazioni {
        private $icona;
        private $risposta;
        public $ringtone;
        static public $colorled = 'Blue';

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, $icona, $risposta, $ringtone, $colorled){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);   
            $this->icona = $icona;                 
            $this->risposta = $risposta;
            $this->ringtone = $ringtone;
            $this->colorled = $colorled;       
        }

        
    }

?>