<?php
    class Notifica extends Comunicazioni {
        private $icona;
        private $risposta;
        static private $ringtone;
        static private $colorled;

        function __construct(String $mittente, String $titolo, String $messaggio, String $destinatario, $icona, $risposta, $ringtone, $colorled){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);   
            $this->icona = $icona;                 
            $this->risposta = $risposta;
            $this->ringtone = $ringtone;
            $this->colorled = $colorled;       
        }

        public function getRingTone(){
            return 'DRIIIN';
        }
    }

?>