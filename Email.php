<?php
    class Email extends Comunicazioni {
        private $allegati;
        private $notifica_cons;
        private $inoltra;
        private $stampa;

        function __construct($mittente, $titolo, $messaggio, $destinatario, $allegati, $notifica_cons, $inoltra, $stampa){
            parent::__construct($mittente, $titolo, $messaggio, $destinatario);   
            $this->inoltra = $inoltra;                 
            $this->stampa = $stampa;         
        }
    }


?>