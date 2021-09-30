<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="kanda_joel_style.css" rel="stylesheet" type="text/css" >
    <title>selecting de numero</title>
   
</head>
<body>
    <form action="index.php" method="post" class="formulaire">     
        <fieldset class="champ"> 
            <legend> IDENTIFICATION DE NUMERO</legend> 
                <div id="number_phone">
                        <label for="user_number">Entrez votre numéro à 8 chiffres:</label>
                        <input class="tel" type="tel" id="user_number" name="user_number" maxlength="8" minlength="8"/><br>
                </div>    <br><br>
                <input type="submit" value="numéro à 10 chiffres">      
                <p> <strong><?php
$user_number = "";
$char_number = 0;
$the_two = 0;

if (!(empty($_POST["user_number"]))) {
    if (is_int($_POST["user_number"])) {
        $user_number = test_input($_POST["user_number"]);
        $char_number = str_split($user_number);
        $the_two = $char_number[0] . $char_number[1];
        test_number($the_two, $user_number);
    }
    else {
        echo('Pas de caractères');
        $user_number = "";
    }
}
else {
    echo('Veuillez saisir un numéro');
    $user_number = "";
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function test_number($num, $number)
{
    $mtn = array('04', '05', '06', '44', '45', '46', '54', '55', '56', '64', '65', '66', '74', '75', '76', '84', '85', '86', '94', '95', '96');
    $moov = array('01', '02', '03', '40', '41', '42', '43', '50', '51', '52', '53', '70', '71', '72', '73');
    $orange = array('07', '08', '09', '47', '48', '49', '57', '58', '59', '67', '68', '69', '77', '78', '79', '87', '88', '89', '97', '983', '984');
    if (in_array($num, $mtn)) {
        $user_number = "05" . $number;
        echo($user_number);
    }
    elseif (in_array($num, $moov)) {
        $user_number = "01" . $number;
        echo($user_number);
    }
    elseif (in_array($num, $orange)) {
        $user_number = "07" . $number;
        echo($user_number);
    }
}
?>
            </strong>
        </p>
                <br>  
       </fieldset>      
    </form>          
</body>
</html>
