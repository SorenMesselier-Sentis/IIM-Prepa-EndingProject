<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location: 7profile.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
    include('view/nav.php');
?>

    <h1>Hello  <?php echo $_SESSION['user'];?></h1>
    <a href="deconnexion.php" class="deco-btn">Disconnect</a>
<?php 
    include('view/footer.php');
?>
    <script src="script/script.js"></script>
</body>
</html>