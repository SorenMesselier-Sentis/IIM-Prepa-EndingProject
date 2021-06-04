<?php

    if ($_POST){

        if(isset($_POST['modifBlog'])) {
            $Date = new DateTime('NOW');
                    // Injection img dans la bdd
                $imgname = $_FILES['img_Update']['name'];
                $imgtemp = $_FILES['img_Update']['tmp_name'];
                $imglink = 'images/upload/' . $imgname;
                move_uploaded_file($imgtemp, $imglink);
            $donneesBlog = [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'id_comm' => $_POST['id_comm'],
                'img' => $imglink,
                'date' => $Date->format('Y-m-d H:i')
            ];

            $UpdateBlog = $bdd->prepare("UPDATE blog set titre = :titre, img = :img, contenu = :contenu, date = :date WHERE id_comm = :id_comm");
            $UpdateBlog->execute($donneesBlog);
        }
        elseif(isset($_POST['deleteBlog']))
        {
            $id_ = $_POST['id_comm'];
            $Blog_Delete = $bdd->prepare("DELETE FROM blog WHERE id_comm = '$id_' ");
            $Blog_Delete->execute();
        }
        else
        {
        // Injection img dans la bdd
        $imgname = $_FILES['img']['name'];
        $imgtemp = $_FILES['img']['tmp_name'];
        $imglink = 'images/upload/' . $imgname;
        move_uploaded_file($imgtemp, $imglink);

        $Date = new DateTime('NOW');
            $donneesBlogs = [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'img' => $imglink,
                'date' => $Date->format('Y-m-d H:i')
            ];
        // insertion Sql
        $BlogPost = $bdd->prepare("INSERT INTO blog (titre, img, contenu, date) VALUES (:titre, :img, :contenu, :date)");
        $BlogPost->execute($donneesBlogs);
        }

    }

        $request = $bdd->prepare("SELECT * FROM blog");
        $request->execute();
        $Blog_list = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="tableau">
            <thead>
                <tr class="tbl" >
                    <th class="ttl">Title</th>
                    <th class="ttl">Content</th>
                    <?php
                    if(isset($_SESSION['admin'])) { 
                    if($_SESSION['admin'] === 'admin') { 
                    ?>
                    <th class="ttl">Modify content</th>
                    <?php
                    }}
                    ?>
                    <th class="ttl">Image</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            foreach($Blog_list as $Blog) {
        ?>
            <tr class="tableau_donnees">
                <form action="6blog.php" method="POST" enctype="multipart/form-data">
                    
                    <td>
                        <input type="hidden" name="id_comm" value="<?= $Blog["id_comm"]?> ">
                        <input type="text" name="titre" value="<?= $Blog["titre"]?> ">
                    </td>
                    <td>
                    <p name="contenu"> <?= $Blog["contenu"]?> </p>
                    </td>
                    <td>
                        <?php
                        if(isset($_SESSION['admin'])) { 
                        if($_SESSION['admin'] === 'admin') { 
                        ?>
                        <textarea type="text" name="contenu" value="<?= $Blog["contenu"]?> "></textarea></td>
                        <?php
                        }}
                        ?>
                    <td>
                    <img src="<?= $Blog['img'];?>" alt="img_bdd">
                        <?php
                    if(isset($_SESSION['admin'])) { 
                    if($_SESSION['admin'] === 'admin') { 
                    ?>
                        <input type="file" name='img_Update' class="ok." accept=".jpeg, .png, .jpg, .gif" multiple></td>
                    </td>
                        <td><input type="submit" name='modifBlog' class="mod-btn" value='Modify'></td>
                        <td><input type="submit" name='deleteBlog' class="dlt-btn" value='Delete'></td>
                    <?php
                    }
                }
            ?>
            </form>
        </tr>
    <?php 
    } 
    ?>
    </tbody>
</table>