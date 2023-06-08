<?php
    session_start();

    require_once 'class/User.php';
    require_once 'class/Comment.php';

    $user = new User();
    $comment = new Comment();

    // var_dump($user);

    // var_dump(isset($_SESSION['user']));
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://christophe-ceccaldi.students-laplateforme.io/livre-or-js/site.css">
    <link rel="icon" type="images/png" sizes="64x64" href="img/tabs.png" />
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
        <section class="centrage" id="intro">
            <h1>livre d'or JS</h1>
            <p>Voir les commentaires sur la page</p>
            <p>Vous pouvez aussi laisser un commentaire, mais pour ça vous devez être connecté</p>
        </section>

        
    </main>
    <!-- /Main -->

    <!-- Footer -->
    <?php require_once 'includes/footer.php'; ?>
    <!-- /Footer -->

</body>

</html>