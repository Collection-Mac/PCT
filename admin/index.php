<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: login.php');
}

?>

<?php

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "root";
$database = "allakro";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Vérifie si un formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire acteur
    if (isset($_POST["submit_acteur"])) {

        // Traitement du formulaire d'acteur
        $noma = $conn->real_escape_string($_POST["noma"]);
		$civilite = $conn->real_escape_string($_POST["civilite"]);
		$datea = $conn->real_escape_string($_POST["datea"]);
		$tela = $conn->real_escape_string($_POST["tela"]);
		$fonctiona = $conn->real_escape_string($_POST["fonctiona"]);
		$lieua = $conn->real_escape_string($_POST["lieua"]);

        // Construction de la requête SQL pour la table "acteurs"
        $sqlActeur = "INSERT INTO acteurs(NOM_ET_PRENOMS, SEXE, DATE_DE_NAISSANCE, TELEPHONE, FONCTION, LIEU_HABITATION) 
		VALUES('$noma', '$civilite', '$datea','$tela', '$fonctiona', '$lieua')";

        if ($conn->query($sqlActeur) === true) {
            echo "--------------------------------------------------------------ENREGISTREMENT D'ACTEUR REUSSI !";
        } else {
            echo "--------------------------------------------------------------Une erreur s'est produite lors de l'enregistrement d'acteur : " . $conn->error;
        }
    }
}

    // Fermeture de la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Espace Admin | ALLAKRO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Portail Gestion</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <i class="fas fa-user rounded-circle"  style="font-size: 30px; width: 35px; height: 35px;"></i>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Actif</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Récenssements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="naissance.php" class="dropdown-item active">Naissance</a>
                            <a href="deces.php" class="dropdown-item">Décès</a>
                            <a href="amenagement.php" class="dropdown-item">Aménagements</a>
                            <a href="demenagement.php" class="dropdown-item">Démenagements</a>
                            <a href="emploi.php" class="dropdown-item">Proposition emploi</a>
                        </div>
                    </div>
                    <a href="pharmacie.php" class="nav-item nav-link"><i class="fas fa-medkit me-2"></i>Pharmacies</a>
                    <a href="centresante.php" class="nav-item nav-link"><i class="far fa-hospital me-2"></i>Centres santés</a>
                    <a href=".php" class="nav-item nav-link"><i class="fas fa-briefcase me-2"></i>Offres emploi</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- DEBUT CONTENUE -->
        <div class="content">
            <!-- Debut Navbar -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" style="color: #430243;" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">xxXXXXX</h6>
                                <small>15 minutes</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">XXXXXxxx</h6>
                                <small>15 minutes</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">XxXXXxxx</h6>
                                <small>15 minutes</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Voir plus</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user rounded-circle"  style="font-size: 30px; width: 35px; height: 35px;"></i>
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->


            <!-- STATIS -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">xxsx4</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">xxsx4</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">xxsx4</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">xxsx4</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- STATIS -->


            <!-- Liste ACTEURS -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">ACTEURS ALLAKRO</h6>
                        <a href="">Afficher tout</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Nom & Prenoms</th>
                                    <th scope="col">Civilité</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Fonction</th>
                                    <th scope="col">lieu d'habitation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>XxXxXX</td>
                                    <td>Xxxxx</td>
                                    <td>xxXXx</td>
                                    <td>xxsx</td>
                                    <td>xxXxx</td>
                                    <td>xxXxx</td>
                                    <td><a class="btn btn-sm btn-outline-danger" href="">Supprimer</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>XxXxXX</td>
                                    <td>Xxxxx</td>
                                    <td>xxXXx</td>
                                    <td>xxsx</td>
                                    <td>xxXxx</td>
                                    <td>xxXxx</td>
                                    <td><a class="btn btn-sm btn-outline-danger" href="">Supprimer</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>XxXxXX</td>
                                    <td>Xxxxx</td>
                                    <td>xxXXx</td>
                                    <td>xxsx</td>
                                    <td>xxXxx</td>
                                    <td>xxXxx</td>
                                    <td><a class="btn btn-sm btn-outline-danger" href="">Supprimer</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Liste ACTEURS -->


            <!-- Debut Form Ajout ACTEUR -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter un Acteur</h6>
                            <form>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" name="noma" class="form-control" id="nomPharm" style="color: #430243;" placeholder="Nom & Prénoms" autocomplete="none">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" name="civilite" class="form-control" id="nomPharm" style="color: #430243;" placeholder="Civilité" autocomplete="none">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nomPharm" class="col-form-label">Date de naissance</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="datea" class="form-control" id="nomPharm" style="color: #430243;" placeholder="Date de naissance" autocomplete="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" name="tela" class="form-control" id="nomPharm" style="color: #430243;" placeholder="Téléphone" autocomplete="none">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" name="fonctiona" class="form-control" id="nomPharm" style="color: #430243;" placeholder="Fonction" autocomplete="none">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" name="lieua" class="form-control" id="nomPharm" style="color: #430243;" placeholder="lieu d'habitation" autocomplete="none">
                                    </div>
                                </div>
                                <button type="submit" name="submit_acteur" class="btn btn-outline-primary m-2">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Form Ajout ACTEUR -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-end" style="padding: 0;">
                            ALLAKRO |
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-start" style="padding: 0;">
                            | &copy;  Portail de Gestion. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- FIN CONTENUE -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>