<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body class="header4">
<?php 
    include('view/nav.php');
?>

<?php
        if(isset($_GET['login_err']))
        {
            $err = htmlspecialchars($_GET['login_err']);
            switch($err)
            {
                case 'password':?>
                <div class="error"><strong>Error</strong> wrong password try another one </div>
                <?php
                break;
                case 'mail':?>
                <div class="error"><strong>Error</strong> wrong Email try another one </div>
                <?php
                break;
                case 'already':?>
                <div class="error"><strong>Error</strong> this account does not exist </div>
                <?php
                break;
            }
        }
?>


<div class="LogBox" id="blur">
    <form action="connexion.php" method="post" class="FormLog">
        <div class="Log">Login:</div>
        <input class="formlog" type="text" name="mail" placeholder="Email"><br><br>
        <input class="formlog" type="password" name="password" placeholder="Password"><br><br>
        <input class="formsub" type="submit" value="Login"><br><br>
        <a class="formsub" id="Signbtn" href="inscription.php">Click here to Sign up</a>
    </form>
</div>
<?php 
    include('view/footer.php');
?>
    <script src="script/script.js"></script>
</body>
</html>