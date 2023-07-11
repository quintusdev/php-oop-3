<?php

   /*  $comunic = [
        new Notifica('Antonello', 'Prima Mail', 'Ti invio la prima mail', ),
        new Email ('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', 'NO', true, 'no', 'no', 'DRIIIN','white'),
        new Sms('Fabrizio', 'Aiuto', 'Fai bene l\'esercizio', 'Marco Quintus', 'ok', 'Da inviare', 'DRIIIN', 'ROSSO'),
    ]; */

    $comunicazionegen = new Comunicazioni('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus');
    echo 'Prima: '.$comunicazionegen->ringtone;
    $comunicazionegen->setRingTone('DRRRIIINN');
    echo 'Dopo: '.$comunicazionegen->ringtone;

    $allegato1 = new Allegato('PDF', 12.25, 'PROVA ALLEGATO');

    $comunicazioneMail = new Email('Antonello', 'Prima Mail', 'Ti invio la prima mail', 'Marco Quintus', $allegato1, true, 'no', 'no', 'DRIIIN','white');
    var_dump($comunicazioneMail);
    echo $comunicazioneMail->Invia();
    echo $comunicazioneMail->Stampa();
    echo $comunicazioneMail->Invia();
?>
