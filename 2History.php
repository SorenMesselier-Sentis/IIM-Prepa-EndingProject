<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>History</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>

<?php 
    include('view/nav.php');
?>

        <header class="header2">
                <p>LINK</p><br>
                <h1>History</h1>
    </header>
    <div class="container">
        <section class="Createur">
            <h2>Synopsis</h2>
            <p>The Legend of Zelda game is an action-adventure game where the player takes the role of a young boy,<br> 
                sometimes a young man, named Link and must, armed with his sword, his shield, and a host of other objects including a bow, a grappling hook and bombs,<br> 
                save Princess Zelda, who is the Princess of Hyrule. The main enemy is Ganondorf, also depicted in his bestial form,<br> 
                Ganon (there are other enemies, like Vaati who appeared in The Minish Cap and Four Swords or Agahnim in A Link to the Past,<br> 
                as well as Majora's mask in Majora's Mask). The action usually takes place in the realm of Hyrule and involves the Triforce,<br> 
                a divine relic in the shape of three golden triangles and granting a wish to whoever touches it.<br> 
                As the games progressed, the storyline only deviated slightly, but various elements were added to it, deepening the series.<br> 
                There are only three games where Zelda does not appear: Link's Awakening,<br> 
                where it's only mentioned at the start of the game when Link wakes up, The Legend of Zelda: <br>
                Tri Force Heroes as well as Majora's Mask, where we only see it as a flashback.</p><br><br>
        </section>
        <section class="Objets">
            <h2>Important characters</h2>
            <div class="Objs">
                <div>
                    <p>Zelda</p><img class="zelda" src="images/9.png" width="796" height="756">
                </div>
                <div>
                    <p>Ganon</p><img class="images" src="images/8.png">
                </div>
            </div>
        </section>
        <section class="QueteP">
            <h2>Main Quest</h2>
            <p>Aside from a few episodes such as The Legend of Zelda:<br> 
                Majora's Mask or The Legend of Zelda: Link's Awakening, each game in the series follows an identical main storyline:<br>
                the hero, Link, must annihilate the Lord of Evil, often Ganon, and save Princess Zelda. <br>
                Link may be a different character depending on the episode, but his outfit (a green tunic and a pointed cap)<br> 
                is always the same, except in the last Zelda released in 2017, Breath of the Wild. <br>
                In some episodes, Link's name can be personalized by the player.<br><br>
                The Legend of Zelda is one of the first games of the action-adventure genre<br> 
                (Only The Adventure of Link is part of the action-RPG category due to the presence of experience points and levels that do not exist in other games).<br> 
                It’s a mix of puzzles, exploration and combat phases. These elements are constant in the series, but have undergone changes.<br> 
                This successful chemistry is a primary factor in building one of Nintendo's most important franchises.<br> 
                The player is frequently rewarded with the acquisition of new items for solving a puzzle or thoroughly searching an area.</p><br><br>
        </section>
        <section class="Lieu">
            <h2>Hyrule Castle</h2>
            <div class="Chateau">
                <img class="Hyrule" src="images/10.jpg" alt="">
                <p>Hyrule Castle is a recurring location in The Legend of Zelda series.<br>
                    This is the home of the royal family of Hyrule,<br>  
                    Princess Zelda, King of Hyrule or both depending on the game.<br> 
                    The architecture of the castle can vary enormously from one episode to another,<br> 
                    as well as its role within the story. In most episodes,<br> 
                    the castle is stormed by Ganondorf and his minions (or by Vaati in The Minish Cap).<br>
                    Link may also have to infiltrate it by avoiding the guards.<br> 
                    Sometimes Hyrule Castle even functions as a dungeon in its own right.</p>
            </div>
            <h2>Firone Forest</h2>
            <div class="Chateau">
                <img class="Hyrule" src="images/11.jpg" alt="">
                <p>The Firone forest is a set of wooded areas located in the region<br> 
                    from the Prairie de Firone in the province of Firone, to the south-east of the Lake Hylia region.<br>
                    It is a large tropical forest located south of Hyrule.<br>
                    The Firone forest is divided into several small forests and woods.<br> 
                    It is especially in this forest that Link will be able to find Firone's tower.<br> 
                    The region of Firone is known for its abundant rains, typical of equatorial regions.<br>
                    Also, the forest of Firone, even more than the other regions,<br> 
                    is often the seat of torrential rains and violent thunderstorms.
                </p>
            </div>
</section>
</div>
<?php 
    include('view/footer.php');
?>
<script src="script/script.js"></script>
</body></html>
