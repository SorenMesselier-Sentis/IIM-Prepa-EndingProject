<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="style/style3.css">-->
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>

<?php 
    include('view/nav.php');
?>

    <header class="header3">
        <p>THE HEAD OFFICE</p>
        <br>
        <h1>Company</h1>
    </header>
    <div class="container">
        <section class="QG">
            <h2>Nintendo Headquarters</h2>
            <div class="Miyamoto">
                <img class="photo" src="images/13.jpg" alt="">
                <p><strong>Nintendo Co.,Ltd.,</strong><br> 
                    Japanese multinational based in Kyoto, recognized for its innovation in the interactive entertainment sector,<br> 
                    produces video games and video game consoles including the Nintendo Switch ™ home console <br> 
                    and portable consoles from the Nintendo 3DS ™ family.<br> 
                    Since 1983, Nintendo has sold nearly 4.7 billion video games and over 750 million consoles globally<br> 
                    and created some of the biggest icons in the industry such as <br> 
                    Mario™, Donkey Kong™, Metroid™,<strong> Zelda™ </strong>et Pokémon™.
                </p>
            </div>
        </section>
        <section class="carte">
            <h2>The location of the head office</h2>
            <div class="Miyamoto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.357301777934!2d135.75233000427292!3d34.972713957607716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010f565f86e1ff%3A0x496b7bc3077dc7e!2sNintendo%20Development%20Center!5e0!3m2!1sfr!2sfr!4v1603039711272!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <p><strong>Kyoto,</strong><br> ancient capital of Japan,<br> 
                    Kyoto is a city located on the island of Honshū.<br> 
                    Its fame comes from its traditions such as kaiseki cuisine, a meal composed of several studied dishes,<br> 
                    and the district of Gion, the district of the geishas (women offering entertainment services).</p>
            </div>
        </section>
    </div>
<?php 
    include('view/footer.php');
?>
<script src="script/script.js"></script>
</body>
</html>
