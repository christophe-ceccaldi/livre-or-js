
<?php if ($user->isConnected()): ?>

<header>
    <div class="container">
        <div class="flex">
            <div id="left" class="ordi"><a href="index.php"><img src="img/Logo_onglet.png" alt=""></a></div>

            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

                <nav class="mobile">
                    <ul>
                        <li><a class="a_head" href="index.php">Accueil</a></li>
                        <li><a class='a_head' href='profile.php'>Profil</a></li>
                        <li><a class='a_head' href='livre-or.php'>Livre d'or</a></li>
                    </ul>
                </nav>

                <div id='center'>
                    <h3>Bonjour <?= $user->login ?></h3>
                    <a href='disconnect.php'><button>Déconnexion</button></a>
                </div>
                <nav class="ordi">
                    <ul>
                        <li><a class='a_head' href='profile.php'>Profil</a></li>
                        <li><a class='a_head' href='livre-or.php'>Livre d'or</a></li>
                    </ul>
                </nav>
        </div>
    </div>
</header>

<?php else: ?>


    <header>
    <div class="container">
        <div class="flex">
            <div id="left" class="ordi"><a href="index.php"><img src="img/Logo_onglet.png" alt=""></a></div>

            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <nav class="mobile">
                    <ul>
                        <li><a class="a_head" href="index.php">Accueil</a></li>
                        <li><a class='a_head' href='livre-or.php'>Livre d'or</a></li>
                    </ul>
                </nav>

                <div>
                    <a href='user.php?sign=conn'><button>Connexion</button></a>
                    <a href='user.php?sign=insc'><button>Inscription</button></a>
                </div>
                <div class="ordi">
                    <a class='a_head' href='index.php'>Accueil</a>
                    <a class='a_head' href='livre-or.php'>Livre d'or</a>
                </div>
        </div>
    </div>
</header>


<?php endif; ?>