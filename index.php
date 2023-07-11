<?php
    require_once __DIR__."/models/Comunicazioni.php";
    require_once __DIR__."/models/Email.php";
    require_once __DIR__."/models/Sms.php";
    require_once __DIR__."/models/Notifica.php";
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
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <?php foreach ($comunicazioni as $comunic) { ?>
                            <div class="card">
                                <?php echo $comunic->getRingTone()."<br>"; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>