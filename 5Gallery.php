<?php 
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=linkbiography', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
    if ($_POST){
        //Je set la valeur delete
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            $pdo->exec("DELETE FROM commentaires WHERE id_commentaire = '$id' ");
            header("Refresh:0");
        }else{
          // les apostrophes
            $_POST['pseudo'] = addslashes($_POST['pseudo']);
            $_POST['message'] = addslashes($_POST['message']);
            $pdo->exec("INSERT INTO commentaires (pseudo, message, date_heure_message) VALUE ('$_POST[pseudo]', '$_POST[message]', NOW())");
            header("Refresh:0");
        }
    } 
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body class="BGgalerie">
    <header>

<?php 
    include('view/nav.php');
?>

<h2>Gallery</h2>
<div class="filtre-Wrapper">
    <div class="filtre">
        <a href="#" class="galerieuh" onclick="gly()">switch</a>
    </div>
</div>
<div class="gallery">
    <div class="gimg">
        <img class="normal " id="galerieJeux" src="./images/galerie/1.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux2" src="./images/galerie/2.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux3" src="./images/galerie/3.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux4" src="./images/galerie/4.png" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux5" src="./images/galerie/5.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux6" src="./images/galerie/6.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux7" src="./images/galerie/7.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux8" src="./images/galerie/8.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux9"  src="./images/galerie/9.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux10" src="./images/galerie/10.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux11" src="./images/galerie/11.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux12" src="./images/galerie/12.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux13" src="./images/galerie/13.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux14" src="./images/galerie/14.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux15" src="./images/galerie/15.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux16" src="./images/galerie/16.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux17" src="./images/galerie/17.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux18" src="./images/galerie/18.jpg" alt=""></div>
    <div class="gimg">
        <img class="normal" id="galerieJeux19" src="./images/galerie/19.jpg" alt=""></div>
    <div class="fullscreen"></div>
</div>

<?php
        $request = $pdo->prepare("SELECT * FROM commentaires ORDER BY date_heure_message DESC");
        /*Permet d'afficher les commentaires*/
        $request->execute();

        $comment_list = $request->fetchAll(PDO::FETCH_ASSOC);
        ?>

<section class="section-commentaires" id="contact">
        <div class="formcommentaire">
            <h2>If you want to comment</h2>
                <form class="contact" action="" method="post">
                    <input type="text" name="pseudo" class="text-box" placeholder="Your pseudo" required><br><br>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
                    <input type="submit" name="submit" class="send-btn" value="Send">
                </form>
        </div>

    </section>
        <?php 
            foreach($comment_list as $comment) {
        ?>
            <div class="commentaire">
                <p class="com"><?php echo  $comment['pseudo'] . "<br>" . $comment['message'] . "<br>" . $comment['date_heure_message']; ?></p>
                <form method="post" class="delete-btn">
                
                <?php
                if(isset($_SESSION['admin'])) { 
            if($_SESSION['admin'] === 'admin') { 
            ?><input type="submit" value="delete">
            <input class="dlt-btn" type="hidden" value="<?php echo $comment['id_commentaire'];?>" name="delete">
        <?php
            }
        }
        ?>
        </form>
    </div>
<?php 
} 
?>
</header>

<?php 
    include('view/footer.php');
?>

    <script src="script/script.js"></script>
    <script src="script/script4.js"></script>
</body>
</html>