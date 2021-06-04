<nav>
        <a href="#" class="ld" onclick="dm()">Light/Dark</a>
        <div class="logo">
            <h4>Link</h4>
        </div>
        <div class="Sign">
        <a href="7profile.php"><h3>Login</h3></a>
        </div>
        <ul class="liens">
            <li><a href="index.php">Home</a></li>
            <li><a href="2History.php">History</a></li>
            <li><a href="3Company.php">Company</a></li>
            <li><a href="4Forrm.php">Contact</a></li>
            <li><a href="5Gallery.php">Gallery</a></li>  
            <li><a href="6Blog.php">Blog</a></li>  
            <?php
            if(isset($_SESSION['user']))
            ?>
            <li><a href="landing.php">Profil</a></li>  
            <?php
        if(isset($_SESSION['admin'])) { 
            if($_SESSION['admin'] === 'admin') { 
            ?>
            <li><a href="dashboard.php">dashboard</a></li>
        <?php
            }
        }
    ?>
        </ul>
        <div class="burger">
            <div class="ligne1"></div>
            <div class="ligne2"></div>
            <div class="ligne3"></div>
        </div>
    </nav>