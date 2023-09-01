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
    // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire déménagement
    if (isset($_POST["demenagement_submit"])) {

        // Traitement du formulaire de déménagement
        $nomde = $conn->real_escape_string($_POST["nomde"]);
		$sexede = $conn->real_escape_string($_POST["sexede"]);
		$fonctionde = $conn->real_escape_string($_POST["fonctionde"]);
		$datede = $conn->real_escape_string($_POST["datede"]);
		$lieude = $conn->real_escape_string($_POST["lieude"]);
		$destinationde = $conn->real_escape_string($_POST["destinationde"]);
		$telde = $conn->real_escape_string($_POST["telde"]);
		$whatsappde = $conn->real_escape_string($_POST["whatsappde"]);

        // Construction de la requête SQL pour la table "demenagement"
        $sqlDemenagement = "INSERT INTO demenagements(NOM_ET_PRENOMS, SEXE, FONCTION, DATE_DE_NAISSANCE,	LIEU_HABITATION_FAMILLE, NOUVELLE_DESTINATION, TELEPHONE, WHATSAPP) 
		VALUES('$nomde', '$sexede', '$fonctionde','$datede',
		'$lieude', '$destinationde', '$telde', '$whatsappde')";

        if ($conn->query($sqlDemenagement) === true) {
            echo "--------------------------------------------------------------ENREGISTREMENT DE DEMENAGEMENT REUSSI !";
        } else {
            echo "--------------------------------------------------------------Une erreur s'est produite lors de l'enregistrement de déménagement : " . $conn->error;
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
    <title>Espace Admin | ALLAKRO </title>
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
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Récenssements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="naissance.php" class="dropdown-item">Naissance</a>
                            <a href="deces.php" class="dropdown-item">Décès</a>
                            <a href="amenagement.php" class="dropdown-item">Aménagements</a>
                            <a href="demenagement.php" class="dropdown-item active">Démenagements</a>
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
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">XXxxxxxxxxxxx</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">XXxxxxxxxxxxx</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">XXxxxxxxxxxxx</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Voir plus</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user rounded-circle"  style="font-size: 30px; width: 35px; height: 35px;"></i>
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->


            <!-- Debut Liste DEMENAGEMENT -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">DEMENAGEMENT</h6>
                        <a href="">Afficher tout</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Nom & prénoms</th>
                                    <th scope="col">Sexe</th>
                                    <th scope="col">Fonction</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Lieu d'habitation de la famille</th>
                                    <th scope="col">Nouvelle destination</th>
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Numéro Whatsapp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Xxxxxxxxx</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td><a class="btn btn-sm btn-outline-danger" href="">Supprimer</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Xxxxxxxxx</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX3</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td>xXxXxXxX</td>
                                    <td><a class="btn btn-sm btn-outline-danger" href="">Supprimer</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Fin Liste DEMENAGEMENT -->


            <!-- Debut Form DEMENAGEMENT -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ajouter un déménagement</h6>
                            <form method="POST" action="traitement.php">
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Nom & Prénoms" autocomplate="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Sexe" autocomplate="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Fonction" autocomplate="none" >
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nomPharm" class="col-form-label">Date de naissance</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="date" class="form-control" id="nomPharm" placeholder="Date de naissance" autocomplete="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Lieu d'habitation de la famille" autocomplate="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Nouvelle destination" autocomplate="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Numéro" autocomplate="none" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomPharm" placeholder="Numéro Whatsapp" autocomplate="none" >
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary m-2">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Form DEMENAGEMENT -->


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