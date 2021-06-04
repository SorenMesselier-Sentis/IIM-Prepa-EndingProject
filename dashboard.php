<?php
    session_start();
    if(!isset($_SESSION['admin']))
        header('Location: 7profile.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body class="header4">
<?php 
    include('view/nav.php');
    include('config.php');
?>
    <h1 class="test">Hello admin <?php echo $_SESSION['user'];?></h1>
<?php
    if ($_POST){

        if(isset($_POST['modifyUser'])) {
            
            $donnees = array(
                'pseudo' => $_POST['pseudo'],
                'mail' => $_POST['mail'],
                'id_utilisateur' => $_POST['id_utilisateur'],
                'admin' => $_POST['admin']
            );

            $Update = $bdd->prepare("UPDATE utilisateurs set pseudo = :pseudo, mail = :mail, admin = :admin WHERE id_utilisateur = :id_utilisateur");
            $Update->execute($donnees);
        }
        elseif(isset($_POST['deleteUser']))
        {
            $id = $_POST['id_utilisateur'];
            $UserDelete = $bdd->prepare("DELETE FROM utilisateurs WHERE id_utilisateur = '$id' ");
            $UserDelete->execute();
        }
        else
        {
        // gestion de la secu sql
        $_POST['pseudo'] = addslashes($_POST['pseudo']);
        // gestion de la secu html
        $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
        // gestion hash du password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // insertion Sql
        $bdd->exec("INSERT INTO utilisateurs (pseudo, mail, password, admin) VALUES ('$_POST[pseudo]', '$_POST[mail]', '$_POST[password]', 'normal')");
        }

    }

    $request = $bdd->prepare("SELECT * FROM utilisateurs");
    $request->execute();
    $User_list = $request->fetchAll(PDO::FETCH_ASSOC);
    ?>

<table class="tableau">
            <thead>
                <tr class="tbl" >
                    <th class="ttl">Pseudo</th>
                    <th class="ttl">Email Address</th> 
                    <th class="ttl">Admin or not</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            foreach($User_list as $User) {
        ?>
            <tr class="tableau_donnees">
                <form action="dashboard.php" method="POST">
                    
                    <td>
                        <input type="hidden" name="id_utilisateur" value="<?= $User["id_utilisateur"]?> ">
                        <input type="text" name="pseudo" value="<?= $User["pseudo"]?> ">
                    </td>
                    <td><input type="text" name="mail" value="<?= $User["mail"]?> "></td>
                    <td>
                    <select name="admin" class="opn">
                            <option value="admin" <?php if($User['admin'] == 'admin') { 
                                echo 'selected'; } ?> > Admin </option>
                            <option value="normal" <?php if($User['admin'] == 'normal') { 
                                echo 'selected'; } ?> > Normal </option>
                        </select>
                        </td>
                    <td><input type="submit" name='modifyUser' class="mod-btn" value='Modify'></td>
                    <td><input type="submit" name='deleteUser' class="dlt-btn" value='Delete'></td>
                </form>
            </tr>
        <?php 
        } 
        ?>
            </tbody>
</table>

    <a href="deconnexion.php" class="deco-btn">Disconnect</a>
<?php 
    include('view/footer.php');
?>
    <script src="script/script.js"></script>
</body>
</html>