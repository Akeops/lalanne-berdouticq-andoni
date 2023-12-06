<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio Andoni</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/app.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php require("menu.php"); ?>
        <?= $content ?>
        <footer class="footer" id="footer">
        <div class="inner">
            <div class="column is-logo">
                <div class="logo">
                    <img src="images/logo-web-component-white.webp" alt="logo" width="50px">
                </div>
                <div class="logo-info">
                    <div class="footer_text">LE DOHER Loïc</div>
                    <span class="copyright">© 2022. All rights reserved.</span>
                </div>
            </div>
            <div class="column is-nav">
                <div class="column-title">Navigation</div>
                <ul>
                    <li><a href="index.html" class="footer_a">Accueil</a></li>
                    <li><a href="entreprise.html" class="footer_a">Mon entreprise</a></li>
                    <li><a href="Veille_Technologique.php" class="footer_a">Ma veille</a></li>
                </ul>
            </div>
            <div class="column is-nav">
                <div class="column-title">Contact</div>
                <ul>
                    <li><a href="mailto:loic.ledoher@gmail.com" class="footer_a"><i class="fa fa-envelope-open"></i>
                            loic.ledoher@gmail.com</a></li>
                    <li><a href="#footer" class="footer_a"><i class="fa fa-phone"></i> 07 83 49 98 20</a></li>
                    <li><a href="https://www.linkedin.com/in/loic-le-doher/" target="_blank" rel="noreferrer" class="footer_a"><i
                                class="fa fa-linkedin"></i> Linkedin</a></li>
                </ul>
            </div>
            <div class="column is-nav">
                <div class="column-title">Informations</div>
                <ul>
                    <li><a href="Mentions_Legales.html" class="footer_a">Mentions Légales</a></li>
                    <li><a href="#" class="footer_a">Conditions d'utilisation</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </body>
</html>