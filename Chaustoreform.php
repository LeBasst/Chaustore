<?php
require_once('registerchaustoreform.php');

if(!empty($_POST)){
    $msg = "";

    if (empty($_POST['first_name']) OR empty($_POST['name']) OR empty($_POST['mail'])) {
      $msg .= "Erreur. Veuillez vérifier votre saisie :<br/>";
    }

    if (empty($_POST['first_name'])) {
      $msg .= "-->Veuillez saisir votre prénom<br/>";
    }

    if (empty($_POST['name'])) {
      $msg .= "-->Veuillez saisir votre nom<br/>";
    }

    if (empty($_POST['mail'])) {
      $msg .= "-->Veuillez saisir votre email<br/>";
    }
    echo $msg;
}

$to      = 'marche.bastien@gmail.com';
$subject = 'Merci de votre inscription !';
$message = 'Bonjour !';
$headers = 'From: Chaustoremag.com' . "\r\n" .
'Reply-To: marche.bastien@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();    

mail($to, $subject, $message, $headers);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="Chaustoreform.css"> 
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica|Pacifico|Permanent+Marker|UnifrakturMaguntia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">


    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>

    <h1> CHAUSTORE </h1>
    <h2>FORMULAIRE D'INSCRIPTION</h2>
    <img class="shoes"src="shoeslogo.jpg"alt="">
    <?php
      if((!empty($_POST['first_name'])
        ) && (!empty($_POST['name'])) && (!empty($_POST['mail']))){
        echo "Merci de votre inscription!";
    }
    ?>
    <?php
    if (empty($_POST['first_name']) OR empty($_POST['name']) OR empty($_POST['mail'])){
      
      ?>
<form method= "post" action= "formulaire.php">
    <div>
        <label for="first_name"> First-Name :</label>
        <input type="first_name" id="first_name" name="first_name"value="<?php
        if(!empty($_POST['first_name']))
             echo $_POST['first_name'];?>"
    />
    </div>
    <br>
    <div>
        <label for="name">  Name :</label>
        <input type="name" id="name" name="name"value="<?php
        if(!empty($_POST['name']))
             echo $_POST['name'];?>"
    />
    </div>
    <br>
    <div>
        <label for="mail"> E-mail :</label>
        <input type="mail" id="mail" name="mail"value="<?php
        if(!empty($_POST['mail']))
             echo $_POST['mail'];?>"
    />
    </div>
    <br>
    <div>
        <label for="password"> Password:</label>
        <input type="password" id="password" name="password"value="<?php
        if(!empty($_POST['password']))
             echo $_POST['password'];?>"
    />
    </div>
    <br>
    <div class="button">
        <button type="submit">Créer mon compte</button>
    </div>
</form>
<?php
    }
?>
</body>
</html>

 