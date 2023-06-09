<?php
    session_start();

    require_once 'class/User.php';
    require_once 'class/Comment.php';

    $user = new User();
    $comment = new Comment();

    // var_dump($user);

    // echo $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
    <link rel="stylesheet" href="https://christophe-ceccaldi.students-laplateforme.io/livre-or-js/site.css">
    <link rel="icon" type="images/png" sizes="64x64" href="img/tabs.png" />
    <script src="scripts/comment.js"></script>
    <script src="scripts/menu.js"></script>
</head>

<body>

    <!-- Header -->
    <?php
    require_once 'includes/header.php';
    ?>
    <!-- /Header -->

    <!-- Main -->
    <main>
        <section id="commentaires" class="container">
            <section class="background_form">
                <h1>Laisser un commentaire</h1>
                <form action="" method="post" id="formCom">
                    <div class="center">
                        <label for="commentaires">Commentaires</label>
                        <textarea name="commentaires" id="comment" cols="60" rows="10" required></textarea>
                        <p></p>
                    </div>
                    <br>
                    <div class="center">
                        <input type="submit" value="Envoyer" id="com">
                        <p></p>
                    </div>
                </form>
            </section>
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <?php
    require_once 'includes/footer.php';
    ?>
    <!-- /Footer -->

</body>

</html>