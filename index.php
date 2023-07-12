<?php
    require_once __DIR__."/models/Comunicazioni.php";
    require_once __DIR__."/models/Email.php";
    require_once __DIR__."/models/Sms.php";
    require_once __DIR__."/models/Notifica.php";
    require_once __DIR__."/models/Allegato.php";
    require_once __DIR__."/models/db.php";

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- link BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <!-- link FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Titolo scheda browser -->
        <title>OOP 3</title>
    </head>

    <body>
        <header class="bg-dark text-white p-5 mb-5 text-center">    
            <h1>Sistema Comunicazioni</h1>
            
        </header>

        <main>
            <h2 class="text-center">E-MAIL</h2>
            <hr>
            <div class="container">
                <div class="row">
                <?php foreach ($comunics as $comunic): ?>
                    <div class="col-4">
                        <div class="card">
                            <h3><?php echo $comunic->getMittente()?></h3>
                            <h4><?php echo $comunic->getTitolo()?></h4>
                            <h4><?php echo $comunic->getMessaggio()?></h4>
                            <h4><?php echo $comunic->getDestinatario()?></h4>
                            <h4><?php echo Comunicazioni::$ringtone?></h4>
                            <?php if(!is_null($comunic->getAllegato())){ ?>
                                    <i class="fa-solid fa-paperclip" style="color: #000000;"></i><span>
                                    <?php echo $comunic->getAllegato()->getFormato() ?></span>
                                    <span><?php echo $comunic->getAllegato()->getDimensione() ?></span>
                                    <span><?php echo $comunic->getAllegato()->getContenuto() ?></span>
                            <?php } ?>
                            <h5><?php echo $comunic->getNotificaCons() ? 'E-Mail Consegnata': 'E-Mail NON Consegnata'?></h5>
                            <h4><?php echo Email::$colorled?></h4>
                            <h5><?php echo $comunic->Stampa()?></h5>
                            <h5><?php echo $comunic->Inoltra()?></h5>
                            <h5><?php echo $comunic->Invia()?></h5>
                        </div>
                    </div>
                <?php endforeach; ?> 
                </div>
            </div>
            <hr>
            <h2 class="text-center">SMS</h2>
            <hr>
            <div class="container">
                <div class="row">
                <?php foreach ($messages as $message): ?>
                    <div class="col-4">
                        <div class="card">
                            <h3><?php echo $message->getMittente()?></h3>
                            <h4><?php echo $message->getTitolo()?></h4>
                            <h4><?php echo $message->getMessaggio()?></h4>
                            <h4><?php echo $message->getDestinatario()?></h4>
                            <h4><?php echo Comunicazioni::$ringtone?></h4>
                            <h4><?php echo $message->getRisposta()?></h4>
                            <h5><?php echo $message->getNotifica_lett() ? 'SMS Consegnato': 'SMS NON Consegnato'?></h5>
                            <h4><?php echo Sms::$colorled?></h4>
                            <h5><?php echo $message->Invia()?></h5>
                        </div>
                    </div>
                <?php endforeach; ?> 
                </div>
            </div>
            <hr>
            <h2 class="text-center">NOTIFICHE</h2>
            <hr>
            <div class="container">
                <div class="row">
                <?php foreach ($notificas as $notifica): ?>
                    <div class="col-4">
                        <div class="card">
                            <h3><?php echo $notifica->getMittente()?></h3>
                            <h4><?php echo $notifica->getTitolo()?></h4>
                            <h4><?php echo $notifica->getMessaggio()?></h4>
                            <h4><?php echo $notifica->getDestinatario()?></h4>
                            <h4><?php echo Comunicazioni::$ringtone?></h4>
                            <h4><?php echo $notifica->getIcona()?></h4>
                            <h5><?php echo $notifica->getVisibile() ? 'Visibile': 'NON Visibile'?></h5>
                            <h4><?php echo $notifica->onClick()?></h4>
                            <h4><?php echo Notifica::$colorled?></h4>
                            <h5><?php echo $notifica->Invia()?></h5>
                        </div>
                    </div>
                <?php endforeach; ?> 
                </div>
            </div>
        </main>
    </body>

</html>