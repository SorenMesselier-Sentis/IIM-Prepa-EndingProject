<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header4">

<?php 
    include('view/nav.php');
?>

    <div class="wrapper">
        <h2>Contact Us</h2>
        <form id="myform" onsubmit="return validation()">
            <div class="champs">
                <input type="text" placeholder="Name" id="nom">
            </div>
            <div class="champs">
                <input type="text" placeholder="Surname" id="prenom">
            </div>
            <div class="champs">
                <input type="text" placeholder="Email" id="email">
            </div>
            <div class="champs">
                <textarea id="message" placeholder="Text"></textarea>
            </div>
            <div id="erreur"></div>
            <div class="bouton">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</header>
<?php 
    include('view/footer.php');
?>
    <script src="script/script.js"></script>
    <script src="script/script2.js"></script>
</body>
</html>