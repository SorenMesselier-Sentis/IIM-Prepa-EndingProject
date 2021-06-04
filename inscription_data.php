<?php
    require_once 'config.php';

if(isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['password_check'])){


    $date = new DateTime('now');
    $datas = [
    "pseudo" => htmlspecialchars($_POST['pseudo']),
    "mail" => htmlspecialchars($_POST['mail']),
    "password" => htmlspecialchars($_POST['password']),
    "date_inscription" => $date->format('Y-m-d H:i')
    ];

    $password_check = htmlspecialchars($_POST['password_check']);

    // L'utilisateur est inscrit dans la BDD
    $checkup = $bdd->prepare('SELECT pseudo, mail, password FROM utilisateurs WHERE mail = ?');
    $checkup->execute(array($datas["mail"]));
    $row = $checkup->rowCount();

    if($row == 0)
    {
        if(strlen($datas["pseudo"]) <= 50)
        {
            if(strlen($datas["mail"]) <= 50)
            {
                if(filter_var($datas["mail"], FILTER_VALIDATE_EMAIL))
                {
                    if($datas["password"] === $password_check)
                    {
                        $datas["password"] = password_hash($datas["password"], PASSWORD_BCRYPT);
                        $send = $bdd->prepare("INSERT INTO utilisateurs (pseudo, mail, password, date_inscription) VALUES(:pseudo, :mail, :password, :date_inscription)");
                        $send->execute($datas);
                        header('Location: 7profile.php?reg_err=success');
                    }else{ header('Location: inscription.php?reg_err=password');}
                }else{ header('Location: inscription.php?reg_err=mail');}
            }else{ header('Location: inscription.php?reg_err=mail_length');}
        }else{ header('Location: inscription.php?reg_err=pseudo_length');}
    }else{ header('Location: inscription.php?reg_err=already');}
}
?>