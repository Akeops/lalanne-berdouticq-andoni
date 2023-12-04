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
        <footer>
            <div class="container text-start">
                <div class="row align-items-center">
                    <div class="col">
                        <ul>
                            <li class="liFooter">© Lalanne-Berdouticq Andoni</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <h5>Liste de Navigation</h5>
                            <li class="liFooter"><a class="footer_a" aria-current="page" href="index.php#presentation">Accueil</a></li>
                            <li class="liFooter"><a class="footer_a" href="index.php#expPro">Expériences professionnels</a></li>
                            <li class="liFooter"><a class="footer_a" href="index.php#competencesPro">Compétences</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <h5>Liste de Navigation</h5>
                            <li class="liFooter"><a class="footer_a" aria-current="page" href="index.php#presentation">Accueil</a></li>
                            <li class="liFooter"><a class="footer_a" href="index.php#expPro">Expériences professionnels</a></li>
                            <li class="liFooter"><a class="footer_a" href="index.php#competencesPro">Compétences</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>