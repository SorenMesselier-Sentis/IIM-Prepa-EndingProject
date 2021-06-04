<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location: 7profile.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Blog</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body class="header4">
<?php 
    include('view/nav.php');
?>
    <h1>Hello <?php echo $_SESSION['user'];?></h1>
<?php
    include('config.php');
    include('view/blog_data.php');
?>
<div class="tableau">
    <form method="POST" class="blg" enctype="multipart/form-data"><br>
        <input name="titre" type="text" placeholder="Title" class="blogs"><br>
        <input name="img" type="file" class="blogs" accept=".jpeg, .png, .jpg, .gif" multiple><br>
        <textarea name="contenu" placeholder="your message"></textarea><br>
        <input name="submit" type="submit" class="blogs" value="Send"><br>
    </form>
</div>
    
    <a href="deconnexion.php" class="deco-btn">Disconnect</a>
<?php 
    include('view/footer.php');
?>
    <script src="script/script.js"></script>
</body>
</html>