<?php
    class Comunicazioni {
        public $mittente;
        public $titolo;
        public $messaggio;
        public $destinatario;
    
    
        public function __construct($mittente, $titolo, $messaggio, $destinatario){
            $this->mittente = $mittente;
            $this->titolo = $titolo;
            $this->messaggio = $messaggio;
            $this->destinatario = $destinatario;
        }

        public function getComunic(){
            return [
                'mittente' => $this->mittente,           
                'titolo' => $this->titolo,                  
                'messaggio' => $this->messaggio,              
                'destinatario' => $this->destinatario              
            ];
        }
    }

?>