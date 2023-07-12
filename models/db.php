<?php

    $Mail1 = new Email('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', true);
    $allegato = new Allegato('PDF', 12.25, 'PROVA ALLEGATO');
    $Mail1->setAllegato($allegato);

    $Mail2 = new Email('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', false);
    $Mail3 = new Email('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', false);
    $allegato = new Allegato('JPG', 25.25, 'img ALLEGATO');
    $Mail3->setAllegato($allegato);


    $comunics = [
        $Mail1,
        $Mail2,
        $Mail3
    ];



    $sms1 = new Sms('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', false);
    $sms2 = new Sms('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', false);
    $sms3 = new Sms('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', false);
?>
