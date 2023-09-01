<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Allakro Communauté des acteurs du village d'Allakro">
    <title>Accueil | Allakro Communauté</title>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.php" class="navbar-brand p-0 d-none d-lg-block">
                    <span class="text-secondary font-weight-normal">COMMUNAUTE</span><h1 class="m-0 display-4 text-uppercase text-primary">ALLAKRO</h1>
                </a>
            </div>
            <div class="col-lg-4 text-center text-lg-right">
                <a class="navbar-brand text-primary" href="admin/index.php"><i class="fas fa-user" style="font-size: 30px;"></i> Admin</a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Début Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
                <span class="text-white font-weight-normal">Communauté</span><h1 class="m-0 display-4 text-uppercase text-primary">Allakro </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">ACCUEIL</a>
                    <a href="actualite.php" class="nav-item nav-link">Actualités</a>
                    <a href="projet.php" class="nav-item nav-link">Projets Mairie & ...</a>
                    <a href="maladie.php" class="nav-item nav-link">Maladies & épidémies</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 200px;">
                    <input type="text" class="form-control border-0" placeholder="Recherche">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3">
                            <i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Fin Navbar -->


    <!-- Début BANNIERE -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <!-- PHARMACIES -->
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/1.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="pharmacie.php">Consulter</a>
                                    <a class="text-violet" href="pharmacie.php"><small>10 Juin</small></a>
                                </div>
                                <a class="h6 m-0 text-violet text-uppercase font-weight-semi-bold" href="pharmacie.php">Pharmacies</a>
                            </div>
                        </div>
                    </div>
                    <!-- CENTRES DE SANTE -->
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/hop.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="sante.php">Consulter</a>
                                    <a class="text-violet" href=""><small>10 Juin</small></a>
                                </div>
                                <a class="h6 m-0 text-violet text-uppercase font-weight-semi-bold" href="sante.php">Centres de santés</a>
                            </div>
                        </div>
                    </div>
                    <!-- OFFRE EMPLOI -->
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/emp.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="offre.php">Consulter</a>
                                    <a class="text-violet" href=""><small>10 Juin</small></a>
                                </div>
                                <a class="h6 m-0 text-violet text-uppercase font-weight-semi-bold" href="offre.php">Offres d'emploi</a>
                            </div>
                        </div>
                    </div>
                    <!-- BESOIN SERVICES -->
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="img/serv.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="service1.php">Consulter</a>
                                    <a class="text-violet" href=""><small>10 Juin</small></a>
                                </div>
                                <a class="h6 m-0 text-violet text-uppercase font-weight-semi-bold" href="service1.php">J'ai besoin d'un service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CAROUSSEL ACTU -->
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/new-1.jpg" style="object-fit: cover;">
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/new-2.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="actualite.php">Lire plus</a>
                                <a class="text-white" href="actualite.php">Jan 01, 2023</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="actualite.php">Ceci est le caroussel qui contiendra toutes les actualités (information, promotion...)</a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="im/news-800x500-3.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">Lire plus</a>
                                <a class="text-violet" href="">Jan 01, 2023</a>
                            </div>
                            <a class="h2 m-0 text-violet text-uppercase font-weight-bold" href="">Ceci est le caroussel qui contiendra toutes les actualités (promotion et divers)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin BANNIERE -->


    <!-- Début ANNONCES -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">ANNONCES</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Bienvenue sur la plateforme Communauté des Acteur du village d'Allakro !</a></div>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Bienvenue sur la plateforme Communauté des Acteur du village d'Allakro !</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin ANNONCES -->


    <!-- Debut Slider ACTIVITES & PRODUITS -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Activités & Produits d'Allakro</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/prod-1.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Plus d'info</a>
                            <a class="text-white" href=""><small>Jan 01,</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Couture Homme & Femme</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/prod-2.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Plus d'info</a>
                            <a class="text-white" href=""><small>Jan 01,</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Superette PrixChoc</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/prod-3.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Plus d'info</a>
                            <a class="text-white" href=""><small>Jan 01,</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Restaurant Delice</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/prod-4.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Plus d'info</a>
                            <a class="text-white" href=""><small>Jan 01,</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Quicaillerie Pro</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/prod-5.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">Plus d'info</a>
                            <a class="text-white" href=""><small>Jan 01,</small></a>
                        </div>
                        <a class="h6 m-0 text-violet text-uppercase font-weight-semi-bold" href="">Imprimerie Smart Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Slider ACTIVITES & PRODUITS -->


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <!-- Début Latérale Gauche -->
                <div class="col-lg-4">

                    <!-- Debut RECENSEMENT -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <img class="img-fluid" src="img/carnet.gif" alt="" style="width: 50px; height: 45.5px; position: absolute; background: transparent;">
                            <h4 class="m-0 text-uppercase font-weight-bold" style="padding-left: 50px;">Récensements</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="#myModalnaiss" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #430243;">
                                <i class="fas fa-clipboard text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Naissances</span>
                            </a>
                            <a href="#myModaldeces" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #430243;">
                                <i class="fas fa-clipboard text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Décès</span>
                            </a>
                            <a href="#myModalamg" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #430243;">
                                <i class="fas fa-clipboard text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Aménagements</span>
                            </a>
                            <a href="#myModaldmg" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #430243;">
                                <i class="fas fa-clipboard text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Démenagements</span>
                            </a>
                            <a href="#myModalemp" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #430243;">
                                <i class="fas fa-clipboard text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Proposition d'emploi</span>
                            </a>
                        </div>
                    </div>
                    <!-- Fin RECENSEMENT -->
                </div>
                <!-- Fin Latérale Gauche -->

                <!-- Début Latérale Droite -->
                
                <!-- Fin Latérale Droite -->

            </div>
        </div>
    </div>


    <!-- DEBUT Footer -->
    <div class="container-fluid bg-dark px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-md-6">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">CONTACTEZ-NOUS</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Rue K4, Abidjan Cocody Deux-Plateaux, CI</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+225 0000000000</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>courrier@uvci.edu.ci</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <h5 class="mb-4 mf text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <a href="pharmacie.php" class="btn btn-sm btn-secondary m-1">Pharmacies</a>
                    <a href="sante.php" class="btn btn-sm btn-secondary m-1">Centres de santés</a>
                    <a href="offre.php" class="btn btn-sm btn-secondary m-1">Offres emplois</a>
                    <a href="service1.php" class="btn btn-sm btn-secondary m-1">Besoin d'un services</a>
                    <a href="actualite.php" class="btn btn-sm btn-secondary m-1">Actualités</a>
                    <a href="projet.php" class="btn btn-sm btn-secondary m-1">Projets Mairie</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Activités & centres d'intérêts</a>
                    <a href="maladie.php" class="btn btn-sm btn-secondary m-1">Maladies & épidémies</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Allakro | Communauté Allakro</a>. 2023<a href=""></a></p>
    </div>
    <!-- FIN Footer -->


    <!-- BOUTON RETOUR EN HAUT -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!--Début Modale NAISSANCE -->
    <div id="myModalnaiss" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px solid #fff;">
    
                    <a href="#" class="close">
                        <button type="button" data-dismiss="modal" aria-label="Close" style="border: none; background: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="col-lg-12 footer-links " style="text-align: center;">
                        <h4 style="font-size: 17px;">Veuillez renseignez les champs ci-dessous !</h4>
                    </div>
                </div>
                <!--FORMULAIRE-->
                <div class="form-container sign-container ">
                    <form method="POST" action="traitement.php">
                        <input type="text" name="nom" placeholder="Nom & Prenoms du nouveau-né*" autocomplete="none" required>
						<div class="sexe-box">
                            <span class="sexe-titre">Sexe :</span>
                            <div class="sexe">
                                <input type="radio" name="sexe" id="m" value="Masculin">
                                <label for="m">Masculin</label>
                                <input type="radio" name="sexe" id="m" value="Féminin">
                                <label for="f">Feminin</label>
                            </div>
                        </div>
						<span class="date-titre">Date naissance</span>
						 <input type="date" name="date" id="date" required>
						 <input type="text" name="mode" placeholder="Mode de naissance*" autocomplete="none" required>
						 <input type="text" name="pere" placeholder="Nom & Prenom du père*" autocomplete="none" required>
						 <input type="text" name="mere" placeholder="Nom & Prenom de la mère*" autocomplete="none" required>
                        <input type="text" name="lieu" placeholder="Lieu d'habitation de la famille(ou de la mère)*" autocomplete="none" required>
						<input type="text" name="tel" placeholder="Numéro de Téléphone(votre numéro)*" autocomplete="none" required>
						<input type="text" name="whatsapp" placeholder="Numéro WhatsApp">
                        <button type="submit" name="naissance_submit">Valider</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#">Fermer</a>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Modale NAISSANCE-->

    <!--Début Modale DECES -->
    <div id="myModaldeces" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px; height: 5px;">
    
                    <a href="#" class="close">
                        <button type="button" data-dismiss="modal" aria-label="Close" style="border: none; background: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="col-lg-12 footer-links " style="text-align: center;">
                        <h4 style="font-size: 17px;">Veuillez renseignez les champs ci-dessous !</h4>
                    </div>
                </div>
                <!--FORMULAIRE-->
                <div class="form-container sign-container ">
                    <form method="POST" action="traitement.php">
                        <input type="text" name="nomd" placeholder="Nom & Prenoms du defunt*" autocomplete="none" required>
						<div class="sexe-box">
                            <span class="sexe-titre">Sexe :</span>
                            <div class="sexe">
                                <input type="radio" name="sexed" id="m" value="Maculin">
                                <label for="m">Masculin</label>
                                <input type="radio" name="sexed" id="f" value="Feminin">
                                <label for="f">Feminin</label>
                            </div>
                        </div>
						<input type="text" name="fonctiond" placeholder="Fonction">
						<span class="date-titre">Date de naissance</span>
						<input type="date" name="datenaissanced" id="date">
						<span class="date-titre">Date de décès</span>
						<input type="date" name="dated" id="date">
						<input type="text" name="moded" placeholder="Mode de décès(Exemple:hôpital;domicile)*" autocomplete="none" required>
						<input type="text" name="raisond" placeholder="Raison du décès*" autocomplete="none" required>
						<input type="text" name="nomreferentd" placeholder="Nom & prenom du parent référent*" autocomplete="none" required>
						<input type="text" name="lieud" placeholder="Lieu d'habitation de la famille (ou du defunt)*" autocomplete="none" required>
                        <input type="text" name="teld" placeholder="Numéro de Téléphone (votre numéro)*" autocomplete="none" required>
                        <button type="submit" name="deces_submit">Valider</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#">Fermer</a>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Modale DECES-->

    <!--Début Modale AMENAGEMENT -->
    <div id="myModalamg" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px solid #fff;">
    
                    <a href="#" class="close">
                        <button type="button" data-dismiss="modal" aria-label="Close" style="border: none; background: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="col-lg-12 footer-links " style="text-align: center;">
                        <h4 style="font-size: 17px;">Veuillez renseignez les champs ci-dessous !</h4>
                    </div>
                </div>
                <!--FORMULAIRE-->
                <div class="form-container sign-container ">
                    <form method="POST" action="traitement.php">
                        <input type="text" name="noma" placeholder="Nom & Prenoms*" autocomplete="none" required>
						<div class="sexe-box">
                            <span class="sexe-titre">Sexe :</span>
                            <div class="sexe">
                                <input type="radio" name="sexea" id="m" value="Masculin">
                                <label for="m">Masculin</label>
                                <input type="radio" name="sexea" id="f" value="Masculin">
                                <label for="f">Feminin</label>
                            </div>
                        </div>
						<input type="text" name="fonctiona" placeholder="Fonction" autocomplete="none">
						<span class="date-titre">Date de naissance</span>
						<input type="date" name="datea" id="date" required>
						<input type="text" name="provenancea" placeholder="Provenance" autocomplete="none">
						<input type="text" name="modea" placeholder="Mode d'hebergement à l'arrivée(nouvelle habitation\un parent)*" autocomplete="none" required>
						<input type="text" name="lieua" placeholder="Lieu d'habitation de la famille(ex:il habite près de chez COULIBALY)*" autocomplete="none" required>
                        <input type="text" name="tela" placeholder="Numéro de Téléphone (votre numéro)*" autocomplete="none" required>
                        <input type="text" name="whatsappa" placeholder="Numéro WhatsApp">
                        <button type="submit" name="amenagement_submit">Valider</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#">Fermer</a>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Modale AMENAGEMENT-->

    <!--Début Modale DEMENAGEMENT-->
	 <div id="myModaldmg" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px solid #fff;">
    
                    <a href="#" class="close">
                        <button type="button" data-dismiss="modal" aria-label="Close" style="border: none; background: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="col-lg-12 footer-links " style="text-align: center;">
                        <h4 style="font-size: 17px;">Veuillez renseignez les champs ci-dessous !</h4>
                    </div>
                </div>
                <!--FORMULAIRE-->
                <div class="form-container sign-container ">
                    <form method="POST" action="traitement.php">
                        <input type="text" name="nomde" placeholder="Nom & Prenoms*" autocomplete="none" required>
						<div class="sexe-box">
                            <span class="sexe-titre">Sexe :</span>
                            <div class="sexe">
                                <input type="radio" name="sexede" id="m">
                                <label for="m">Masculin</label>
                                <input type="radio" name="sexede" id="f">
                                <label for="f">Feminin</label>
                            </div>
                        </div>
						<input type="text" name="fonctionde" placeholder="Fonction">
						<span class="date-titre">Date de naissance</span>
						<input type="date" name="datede" id="date">
						<input type="text" name="lieude" placeholder="Lieu d'habitation de la famille(ex:il habite près de chez COULIBALY)*" autocomplete="none" required>
						<input type="text" name="destinationde" placeholder="Nouvelle destination">
                        <input type="text" name="telde" placeholder="Numéro de Téléphone (votre numéro)*" autocomplete="none" required>
                        <input type="text" name="whatsappde" placeholder="Numéro WhatsApp">
                        <button type="submit" name="demenagement_submit">Valider</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#">Fermer</a>
                </div>
            </div>
        </div>
    </div>
	<!--Fin Modale DEMENAGEMENT-->

	<!--DEBUT Modale PROPOSITION D'EMPLOI-->
	 <div id="myModalemp" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: 0px solid #fff;">
    
                    <a href="#" class="close">
                        <button type="button" data-dismiss="modal" aria-label="Close" style="border: none; background: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </a>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="col-lg-12 footer-links " style="text-align: center;">
                        <h4 style="font-size: 17px;">Veuillez renseignez les champs ci-dessous !</h4>
                    </div>
                </div>
                <!--FORMULAIRE-->
                <div class="form-container sign-container ">
                    <form method="POST" action="traitement.php">
                        <input type="text" name="nome" placeholder="Nom & Prenoms*" autocomplete="none" required>
						<input type="text" name="servicee" placeholder="Service à offrire*" autocomplete="none" required>
						<input type="text" name="qualificatione" placeholder="Vos qualifications/Compétences*" autocomplete="none" required>
                        <input type="text" name="tele" placeholder="Numéro de Téléphone (votre numéro)*" autocomplete="none" required>
                        <input type="text" name="whatsappe" placeholder="Numéro WhatsApp">
						<input type="text" name="commentairee" placeholder="Autre information sur l'offre">
                        <button type="submit" name="emploi_submit" >Valider</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#">Fermer</a>
                </div>
            </div>
        </div>
    </div>
	<!--Fin Modale PROPOSITION D'EMPLOI-->
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>