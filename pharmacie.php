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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portail de gestion des acteurs du village d'Allakro">
    <title>Pharmacies | Allakro Communauté</title>
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
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Début Navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary">ALLAKRO <span class="text-white font-weight-normal">COMMUNAUTE</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link">ACCUEIL</a>
                    <a href="pharmacie.php" class="nav-item nav-link active">Pharmacies</a>
                    <a href="pharmaciegarde.php" class="nav-item nav-link">Pharmacies de gardes</a>
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

    <!-- Debut ANNONCES -->
    <div class="container-fluid py-3 mb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">ANNONCES</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center "
                            style="width: calc(100% - 170px); padding-right: 90px; background: #28b4627c !important">
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="" style="color: black !important;" >La pharmacie du rond point est de garde le samedi 10 et dimanche 11 Juillet</a></div>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="" style="color: black !important;" >La pharmacie du rond point est de garde le samedi 10 et dimanche 11 Juillet</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin ANNONCES -->

    <!-- Début barre PHARMACIES -->
    <div class="container-fluid mb-3 pt-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 100%; background: #430243;">
                            <h4 class="m-0 text-uppercase font-weight-bold" style="color: #fff;">Pharmacies</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin barre PHARMACIES -->

    <!-- Début table PHARMACIES -->
    <table id="table" class="table table-striped table-bordered table-hover container ">
        <thead>
            <tr role="row">
                <th id="" rowspan="1" colspan="1" style="width: 158.25px;">Pharmacie</th>
                <th id="" rowspan="1" colspan="1" style="width: 158.25px;">Localisation</th>
                <th id="" rowspan="1" colspan="1" style="width: 158.25px;">Contacts</th>
                <th id="" rowspan="1" colspan="1" style="width: 100.25px;">Horaires</th>
                <th id="" rowspan="1" colspan="1" style="width: 50px;">Détails</th>
            </tr>
        </thead>
        <tbody>
            <tr role="row" class="odd">
                <td>PHARMACIE BONNE SANTE</td>
                <td>Cocody 2 plateaux carrefour manguier non loin du Garage CFA, Abidjan <br>
                    <strong>Position :</strong> 
                    <a href="https://goo.gl/maps/Aq517ukWV6EFbUd16" target="_blank">Google map</a>
                </td>
                <td> <br>
                    <strong>Contact : </strong>+225 86 57 92 36
                </td>
                <td>24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_889" data-toggle="modal" data-target="#modalPush_889">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            <tr role="row" class="odd">
                <td>PHARMACIE ORCHID</td>
                <td>Boulevard des Martyrs, Abidjan<br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/Fr9oCUSRYFGCpBBS8" target="_blank">Google map</a>
                </td>
                <td> <br>
                    <strong>Contact : </strong>+225 27 22 40 42 75
                </td>
                <td>24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_889" data-toggle="modal" data-target="#modalPush_889">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            <tr role="row" class="odd">
                <td>PHARMACIE SAINTE TRINITE</td>
                <td>Pharmacie située sur la voie II Plateaux Mobil et le Carrefour Marché en descendant vers Adjamé <br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/bYYMZFTEHzNmcpSW9"" target="_blank">Google map</a>
                </td>
                <td><br>
                    <strong>Contact : </strong>+225 22 41 68 88
                </td>
                <td>24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_889" data-toggle="modal" data-target="#modalPush_889">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            <tr role="row" class="odd">
                <td>PHARMACIE LATRILLE</td>
                <td>Bd des Martyrs, Abidjan 08 BP 1813 <br>
                    <strong>Position :</strong>
                    <br><a href="https://goo.gl/maps/iJWKbTNMVC6PD7pp9" target="_blank">Google map</a>
                </td>
                <td> <br>
                    <strong>Contact : </strong>+225 22 41 03 68
                </td>
                <td>24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_889" data-toggle="modal" data-target="#modalPush_889">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            <tr role="row" class="odd">
                <td>GRANDE PHARMACIE DES DEUX PLATEAUX</td>
                <td>2 PLATEAUX, BVD LANTRILLE FACE SGBCI SOCOCE <br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/HscXGCmDumBoZ2At9" target="_blank">Google map</a>
                </td>
                <td><br>
                    <strong>Contact : </strong>+225 27 22 41 36 04
                </td>
                <td> 24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_521" data-toggle="modal" data-target="#modalPush_521">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
			<tr role="row" class="odd">
                <td>PHARMACIE DES HALLES</td>
                <td>Espace Latrille, Centre commercial SOCOCE - Deux-plateaux - SOCOCE Cocody <br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/ESh8pMKCvKhTCvvi8" target="_blank">Google map</a>
                </td>
                <td><br>
                    <strong>Contact : </strong>+225 27 22 41 93 32 
                </td>
                <td> 24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_521" data-toggle="modal" data-target="#modalPush_521">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
			<tr role="row" class="odd">
                <td>PHARMACIE DES GRACES</td>
                <td> pharmacie située un carrefour avant le carrefour Bleu Marine, en venant de II Plateaux Mobil. <br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/NcTtBf8gU74BXQWd7" target="_blank">Google map</a>
                </td>
                <td><br>
                    <strong>Contact : </strong>+225  27 22 41 24 27
                </td>
                <td> 24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_521" data-toggle="modal" data-target="#modalPush_521">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
			<tr role="row" class="odd">
                <td>PHARMACIE II PLATEAUX-AGBAN</td>
                <td> ENTRE LE NOUVEAU MARCHE ET L'HOPITAL DES IMPOTS AU POSTE NORD DU CAMP D'AGBAN ABIDJAN-II PLATEAUX, Abidjan <br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/MgbPiTZZsXKxHdj97" target="_blank">Google map</a>
                </td>
                <td><br>
                    <strong>Contact : </strong>+225 01 01 45 67 49/ +225 57 49 08 68
                </td>
                <td> 24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_521" data-toggle="modal" data-target="#modalPush_521">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
			<tr role="row" class="odd">
                <td>PHARMACIE EMERAUDE</td>
                <td>Derrière station Total sococé 2 plateaux en face de la clinique le rocher, K 86, Abidjan <br>
                    <strong>Position :</strong>
                    <a href="https://goo.gl/maps/GaSeCvsxK8aZfYbt9" target="_blank">Google map</a>
                </td>
                <td><br>
                    <strong>Contact : </strong>+225 22 46 54 31
                </td>
                <td> 24H / 24</td>
                <td>
                    <button type="button" class="btn btn-primary modalPush_" data-id="modalPush_521" data-toggle="modal" data-target="#modalPush_521">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Fin table PHARMACIES -->


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
                    <a href="pharmaciegarde.php" class="btn btn-sm btn-secondary m-1">Pharmacies de gardes</a>
                    <a href="sante.php" class="btn btn-sm btn-secondary m-1">Centres de santés</a>
                    <a href="offre.php" class="btn btn-sm btn-secondary m-1">Offres emplois</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Besoin d'un services</a>
                    <a href="actualite.php" class="btn btn-sm btn-secondary m-1">Actualités</a>
                    <a href="" class="btn btn-sm btn-secondary m-1">Projets Mairie</a>
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


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>