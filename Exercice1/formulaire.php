<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php
    require  'Html.php';

    $html = new Html;
    $html->meta("viewport", "width=device-width, initial-scale=1.0");
    $html->css();
    $html->script();
    ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<?php
    require 'Form.php' ;
    require 'Validator.php';

    $form = new Form;

    $form->create();
    $form->radio("genre", ["Madame", "Monsieur", "Autre"]);
    $form->text("nom");
    $form->text("prenom");
    $form->select("pays", ["Wallonie", "Flandre"]);
    $form->submit("envoyer");
    $form->end();
    ?>
</body>
</html>
