<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/351e9300a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/header.css" xmlns="http://www.w3.org/1999/html">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <a href="../../index.php" <h1 class="logo"><img src="../../assets/img/logo.jpg"></h1> </a>
        </div>
        <nav class="navbar">
            <ul class="nav-menu">
                <li class="nav-item has-dropdown">
                    <a href="#">Aide de jeu</a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Aidedejeu/charactercreation.php">Création personnages</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/characterclasse.php">Classes personnages</a></li>
                        <li class="sub-item"><a href="#">Règles alternatives</a></li>
                        <li class="sub-item"><a href="#">Aides de jeu</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/effets.php">Effets</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/shop.php">Magasins</a></li>
                        <li class="sub-item"><a href="/View/Aidedejeu/faq.php">FAQ</a></li>
                    </ul>
                </li>


                <li class="nav-item has-dropdown">
                    <a href="#">Ressources</a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="#">Fiches PNJ</a></li>
                        <li class="sub-item"><a href="/View/Ressources/bestiary.php">Bestiaire</a></li>
                        <li class="sub-item"><a href="/View/Ressources/listofmonster.php">Listes Monstres</a></li>
                        <li class="sub-item"><a href="#">Magie</a></li>
                        <li class="sub-item"><a href="#">Alchimie</a></li>
                        <li class="sub-item"><a href="/View/Ressources/story.php">Campagnes</a></li>
                        <?php
                        if (isset($_SESSION["id"])){
                          ?>
                            <li class="sub-item"><a href="#">Mappemondes</a></li>
                            <li class="sub-item"><a href="#">Battlemaps</a></li>
                        <?php
                        }
                        ?>
                        ?>

                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Outils </a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Outils/diceroller.php">Lancer de dés</a></li>
                        <li class="sub-item"><a href="/View/Outils/namegenerator.php">Générateur de nom</a></li>
                        <li class="sub-item"><a href="/View/Outils/contractgenerator.php">Générateur contrat</a></li>
                    </ul>
                </li>

                <li class="nav-item has-dropdown">
                    <a href="#">Liens </a>
                    <ul class="item-dropdown">
                        <li class="sub-item"><a href="/View/Liens/connexion.php">Connexion</a></li>
                        <li class="sub-item"><a href="/View/Liens/registration.php">Inscription</a></li>
                        <li class="sub-item"><a href="/View/Liens/blog.php">Vatt'Ghern-Blog</a></li>
                        <li class="sub-item"><a href="#">Kaer morhen</a></li>
                        <li class="sub-item"><a href="#">Mentions Légales</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php
        if (isset($_SESSION["id"])) {
            ?>
            <p class="menu" id="pseudo"><i class="fas fa-user-circle"></i><?= $_SESSION["pseudo"]?></p>
            <a class="menu colorRed" href="../../assets/php/disconnection.php"><i class="fas fa-sign-out-alt"></i></a>
            <?php
        }
        ?>

    </div>
</header>


<script src="../../assets/js/header.js"></script>

</body>
</html>


