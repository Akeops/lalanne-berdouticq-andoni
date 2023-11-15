<?php ob_start();
require '../utile/formatage.php';
?>


<!-- Présentation de ma personne -->
<div class="container text-center" id="accueil">
    <?= formatageTitre("Présentation") ?>
    <div class="row divPresentation">
        <div class="col-12 col-xl-7  presentation">
            <img src="../source/images/exemple.png" class="card-img-top img-fluid shadow-lg" alt="...">
        </div>
        <div class="col-12 col-xl-5 presentationDescription shadow-lg">
                <p>Je suis Lalanne-Berdouticq Andoni, un passionné de développement informatique avec un BTS en SIO option SLAM. Ayant récemment repris mes études dans la lignée de mon BTS à Efrei, je me spécialise actuellement dans le développement Full-Stack en Javascript. Mon parcours m'a doté de solides compétences en PHP, Bootstrap, CSS, Docker et Javascript.</p>
        </div>
    </div>
</div>


<div class="text-center mt-3">
    <a class="btn rounded-pill monBouton" href="../source/pdf/Lalanne_Berdouticq_CV.pdf" download="Lalanne-Berdouticq-Andoni">Télécharger mon CV</a>
</div>
 
<!-- Parcours scolaire -->
<div class="container text-center" id="parcoursScolaire">
    <?= formatageTitre("Parcours scolaire") ?>
<ul class="external-style-ul">
    <li class="external-style-li shadow-lg" style="--accent-color:#41516C">
        <div class="date">2002</div>
        <div class="title">Title 1</div>
        <div class="descr">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas itaque hic quibusdam fugiat est numquam harum, accusamus suscipit consequatur laboriosam!</div>
    </li>
    <li class="external-style-li shadow-lg" style="--accent-color:#FBCA3E">
        <div class="date">2007</div>
        <div class="title">Title 2</div>
        <div class="descr">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos adipisci nobis nostrum vero nihil veniam.</div>
    </li>
    <li class="external-style-li shadow-lg" style="--accent-color:#E24A68">
        <div class="date">2012</div>
        <div class="title">Title 3</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga minima consequuntur soluta placeat iure totam commodi repellendus ea delectus, libero fugit quod reprehenderit, sequi quo, et dolorum saepe nulla hic.</div>
    </li>
    <li class="external-style-li shadow-lg" style="--accent-color:#1B5F8C">
        <div class="date">2017</div>
        <div class="title">Title 4</div>
        <div class="descr">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, cumque.</div>
    </li>
    <li class="external-style-li shadow-lg" style="--accent-color:#4CADAD">
        <div class="date">2022</div>
        <div class="title">Title 5</div>
        <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, non.</div>
    </li>
</ul>
</div>


<!-- Mes expériences professionnel -->
<!-- Card -->
<div class="container text-center" id="expProfessionnels">
    <?= formatageTitre("Mon expériences professionnel") ?>
    <div class="container text-center divEntreprises">
        <div class="row divEntreprises1">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card cardPro">
                    <button type="button" class=" border border-2 bouton-card" data-bs-toggle="modal" data-bs-target="#ecreatures"><img src="../source/images/ecreatures2.png" class="card-img-top shadow-lg bouton-card" alt="ecreaturesLogo"></button>    
                </div>
            </div>




            <div class="col-12 col-md-6 col-lg-4">
                <div class="card cardPro">
                    <button type="button" class="border border-2 bouton-card" data-bs-toggle="modal" data-bs-target="#picDigital"><img src="../source/images/pic-digital.png" class="card-img-top shadow-lg bouton-card" alt="ecreaturesLogo"></button>    
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-4">
                <div class="card cardPro">
                    <button type="button" class=" border border-2 bouton-card shadow-lg" data-bs-toggle="modal" data-bs-target="#blueLogic"><img src="../source/images/bluelogic.png" class="card-img-top shadow-lg bouton-card" alt="ecreaturesLogo"></button>    
                </div>
            </div>
        </div>
    </div>
</div>
   


    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="ecreatures" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Ecreatures</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/ecreatures2.png" class="card-img-top img-fluid" alt="ecreaturesLogo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="picDigital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/pic-digital.png" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="blueLogic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Ecreatures</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/bluelogic.png" class="card-img-top img-fluid" alt="ecreaturesLogo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


<!-- Progress bar -->
<div class="container text-center" id="competences">
    <?= formatageTitre("Mes compétences") ?>
    <div class="row">
        <div class="col-12 col-md-6 perso_colorYellow">
            HTML/CSS
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%">50%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            PHP / POO
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 25%">25%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            Javascript / Node.js
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 5%">5%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            SQL / PDO
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%">50%</div>
            </div>
        </div>
    </div>
</div>




<!-- Card -->
<div class="container text-center" id="mesProjets">
    <?= formatageTitre("Mes projets") ?>
    <div class="m-5 container text-center">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card1.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours1">Détails</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card2.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ITwatchdog</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours2">Détails</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card3.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Je ne sais pas encore</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours3">Détails</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   


    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Portfol.io</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card1.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card2.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card3.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Intégration du jquery pour que le main.js fonctionne -->
    <script src="../js/main.js"></script>


<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>

