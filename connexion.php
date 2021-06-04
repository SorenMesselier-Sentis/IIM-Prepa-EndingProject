<?php

    session_start();
    require_once 'config.php';

    if(isset($_POST['mail']) && isset($_POST['password']))
    {
        // Protection contre les injections
        $email = htmlspecialchars($_POST['mail']); 
        $password = htmlspecialchars($_POST['password']);

        // L'utilisateur est inscrit dans la BDD
        $checkup = $bdd->prepare('SELECT pseudo, mail, password, admin FROM utilisateurs WHERE mail = ?');
        $checkup->execute(array($email));
        $datas = $checkup->fetch();
        $row = $checkup->rowCount();


        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $pdw = password_verify($password, $datas["password"]);
                if($pdw == true)
                {   
                    $_SESSION['admin'] = $datas['admin'];
                    $_SESSION['user'] = $datas['pseudo'];
                    
                    if($_SESSION['admin'] === 'admin')
                    {
                        header('Location: dashboard.php?login_err=success');
                    }
                    elseif($_SESSION['user'] = $datas['pseudo'])
                    {
                        header('Location:landing.php');
                    }
                    else header('Location: 7profile.php?login_err=password');
                }
                else header('Location: 7profile.php?login_err=password');
            }
            else header('Location: 7profile.php?login_err=mail'); 
        }
        else header('Location: 7profile.php?login_err=already'); 
    }
    else header('Location: 7profile.php');
?>