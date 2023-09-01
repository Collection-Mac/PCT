<?php
session_start();
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
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire
    if(isset($_POST['valider'])){
    // Vérifie si les champs on été remplis et les stock dans la bd
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
            $pseudo = $conn->real_escape_string($_POST['pseudo']);
            $mdp = $conn->real_escape_string($_POST['mdp']);
            $sqlAdmin = "INSERT INTO admin(pseudo, mdp)VALUES('$pseudo', '$mdp')";
            
            if($conn->query($sqlAdmin) === true){
        
            }
            echo "--------------------------------------------------------------INSCRIPTION REUSSI !";
        }
        else{
            echo "--------------------------------------------------------------Veuillez compléter tous les champs !";
        }
    }else{
        echo "--------------------------------------------------------------Une erreur s'est produite lors de l'inscription : " . $conn->error;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inscription - Admin</title>
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


        <!-- Debut Sign Up -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"></h3>
                            </a>
                            <h3>Créer un Compte</h3>
                        </div>
                        <form method="POST" action="">
                            <div class="form-floating mb-3">
                                <input type="text" name="pseudo" class="form-control" id="floatingText" placeholder="Marcel">
                                <label for="floatingText">Nom utilisateur</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Addresse mail</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="mdp" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Mot de passe</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">rester connecté</label>
                                </div>
                                <a href="">Mot de passe oublié</a>
                            </div>
                            <button type="submit" name="valider" class="btn btn-primary py-3 w-100 mb-4">Valider</button>
                        </form>
                        <p class="text-center mb-0">Vous avez déjà un compte? <a href="login.php">Se connecter</a></p>
                    </div>
                    <div class="credit">
                        Portail de gestion | ALLAKRO <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Sign Up -->
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