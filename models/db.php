<?php

    $Mail1 = new Email('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', true);
    $allegato = new Allegato('PDF', 12.25, 'PROVA ALLEGATO');
    $Mail1->setAllegato($allegato);

    $Mail2 = new Email('Simone', 'Seconda Mail', 'Ti invio la seconda mail', 'Marco Quintus', false);
    $Mail3 = new Email('Mario', 'Terza Mail', 'Ti invio la terza mail', 'Marco Quintus', false);
    $allegato = new Allegato('JPG', 25.25, 'img ALLEGATO');
    $Mail3->setAllegato($allegato);


    $comunics = [
        $Mail1,
        $Mail2,
        $Mail3
    ];



    $sms1 = new Sms('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', false, 'Grazie per l\' sms');
    $sms2 = new Sms('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', true, 'Grazie per l\' sms');
    $sms3 = new Sms('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', true, 'Grazie per l\' sms');

    $messages = [
        $sms1,
        $sms2,
        $sms3
    ];

    $notifica1 = new Notifica('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', 'Icona', false);
    $notifica2 = new Notifica('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', 'Icona', true);
    $notifica3 = new Notifica('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', 'Icona', false);

    $notificas = [
        $notifica1,
        $notifica2,
        $notifica3
    ];
?>
