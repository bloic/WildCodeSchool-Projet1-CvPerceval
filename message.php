<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
    <title>Formulaire de contact</title>
</head>
<body>

    <div class = "containerMessage">
        <?php
            // CLEAN INPUT
            foreach ($_POST as $name=>$input) {
                $data[$name] = trim($input);
            }

            //VALIDATION

            $errors = [];

            if(empty($data['surname'])) {
                $errors['surname1'] = '* Il manque votre nom';
            }

            if(empty($data['phone'])) {
                $errors['phone1'] = '* Merci de me fournir votre référence de pigeon';
            }

            if(empty($data['email'])) {
                $errors['email1'] = '* J\'ai besoin de votre email';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email2'] = "Votre adresse mail n'est pas valide";
            }

            if(empty($data['motive'])) {
                $errors['motive1'] = '* Merci de préciser le sujet de votre message';
            }

            if(empty($data['message'])) {
                $errors['message1'] = '* Merci de m\'en dire plus';
            }

            // RETOUR UTILISATEUR

            if(empty($errors)) {
                ?>
                <div class="messageTitleContainer">
                    <h1 class="messageTitle"> Votre demande</h1>
                </div>
                <div class="backgroundMessage">
                    <h3 class = "formValidation">
                        <?= 'Je suis souvent victime des colibris, sous-entendu des types qu’oublient toujours tout. Euh, non...' ?>
                        <br>
                        <br>
                        <?= 'Bref, tout ça pour dire, merci ' . htmlentities($data['surname']) . ' de me considérer en tant que tel. J\'ai bien reçu votre demande au sujet de ' . htmlentities($data['motive']) . '.';?>
                        <br>
                        <br>
                        <?= 'Je vous recontacte après-demain à partir d\'aujourd\'hui pour que nous en parlions plus en serre-taille.';?>
                    </h3>
                    <a href="index.php"><button>Retour</button></a>
                </div>
                <?php
            } else {
                ?>
                <div class="messageTitleContainer">
                    <h1 class="messageTitle"> Formulaire de contact</h1>
                </div>
                <div id="contact-flex-right" class="contact-flex-message">

                    <form action="message.php" method="post">

                        <label for="surname" class="messageLabel">Nom</label>
                        <input id="surname" name="surname" type="text" placeholder="Ex : Arthur Leroi*" class="messageInput" value="<?= htmlentities($data['surname'])?>">
                            <?php
                                if(!empty($errors['surname1'])) {
                                    ?><span class="errorMessage"><?= $errors['surname1'];?></span><?php
                                }
                            ?>

                        <label for="phone" class="messageLabel">Pigeon Voyageur</label>
                        <input id="phone" name="phone" type="tel" placeholder="Ex : 06 69 69 69 69*" class="messageInput" value="<?= htmlentities($data['phone'])?>" >
                            <?php
                                if(!empty($errors['phone1'])) {
                                    ?><span class="errorMessage"><?= $errors['phone1'];?></span><?php
                                }
                            ?>

                        <label for="email" class="messageLabel">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="Ex : recruteur2chevalier@hotmail.fr*" class="messageInput" value="<?= htmlentities($data['email'])?>">
                            <?php
                            if(!empty($errors['email1'])) {
                                ?><span class="errorMessage"><?= $errors['email1'];?></span><?php
                            } else if (!empty($errors['email2'])) {
                                ?><span class="errorMessage"><?= $errors['email2'];?></span><?php
                            }
                            ?>

                        <label for="motive" class="messageLabel">Objet</label>
                        <input id="motive" name="motive" type="text" placeholder="Ex : J'ai une quête à vous proposer*" class="messageInput" value="<?= htmlentities($data['motive'])?>">
                            <?php
                            if(!empty($errors['motive1'])) {
                                ?><span class="errorMessage"><?= $errors['motive1'];?></span><?php
                            }
                            ?>

                        <label for="textarea" class="messageLabel">Message</label>
                        <textarea name="message" id="textarea" placeholder="Votre message" class="messageInput"><?= htmlentities($data['message'])?></textarea>
                            <?php
                            if(!empty($errors['message1'])) {
                                ?><span class="errorMessage"><?= $errors['message1'];?></span><?php
                            }
                            ?>

                        <div class="contact-button">
                            <button>Envoyer</button>
                        </div>
                    </form>
                 </div>
                <?php
            }
        ?>
    </div>
</body>
</html>




