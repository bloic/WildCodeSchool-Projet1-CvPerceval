<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&family=Roboto&display=swap" rel="stylesheet">
    <title>Perceval le Gallois</title>
    <meta name="description" content="Le CV en ligne de Provençal le Gaulois, aspirant chevalier de la Table Ronde."/>
    <meta name="author" content="Les Petits Pédestres"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logoKaamelott.png" />
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
    <script src="script/script.js"></script>
</head>

<body>
<main>
    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') :
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

        if (empty($errors)){
            header('Location:index.php?message=success#contact-flex');
        }
    endif;

    ?>

    <?php include 'barNav.php'; ?>
    <?php include 'header.php'; ?>
    <?php include 'a_propos.php'; ?>
    <?php include 'skills.php'; ?>
    <?php include 'realisations.php'; ?>
    <?php include 'Experience.php'; ?>
    <?php include 'Formation.php'; ?>
    <?php include 'Recommandation.php'; ?>
    <?php include 'contact.php'; ?>
    <?php include 'chatbot.php'; ?>

</main>

</body>
</html>