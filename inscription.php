<!DOCTYPE html>
<html lang="en">
<head>

    <title>Signup</title>
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
    if(isset($_GET['reg_err']))
    {
        $err = htmlspecialchars($_GET['reg_err']);

        switch($err)
        {
            case 'success':
                ?>
                <div class="success"><strong>It works</strong>you are registered</div>
                <?php
                break;
                case 'password':?>
                <div class="error"><strong>Error</strong>choose another password </div>
                <?php
                break;
                case 'mail':?>
                <div class="error"><strong>Error</strong> invalid Email</div>
                <?php
                break;
                case 'mail_legnth':?>
                <div class="error"><strong>Error</strong> Email too long </div>
                <?php
                break;
                case 'pseudo_length':?>
                <div class="error"><strong>Error</strong> username too long </div>
                <?php
                break;
                case 'already':?>
                <div class="error"><strong>Error</strong> this account already exist </div>
                <?php
                break;
            }
        }
?>
<div class="LogBox">
    <form action="inscription_data.php" method="post" class="FormLog">
        <div class="Log">Sign up:</div>
        <input class="formlog" type="text" name="pseudo" required="required" placeholder="Username"><br><br>
        <input class="formlog" type="text" name="mail" required="required" placeholder="Email"><br><br>
        <input class="formlog" type="password" name="password" required="required" placeholder="Password"><br><br>
        <input class="formlog" type="password" name="password_check" required="required" placeholder="Password check"><br><br>
        <input class="formsub" type="submit" value="Sign up"><br><br>
    </form>
</div>
<?php 
    include('view/footer.php');
?>
    <script src="script/script.js"></script>
</body>
</html>