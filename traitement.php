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
    // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire naissance
    if (isset($_POST["naissance_submit"])) {
       
	    // Traitement du formulaire de naissance
        $nom = $conn->real_escape_string($_POST["nom"]);
		$sexe = $conn->real_escape_string($_POST["sexe"]);
		$date = $conn->real_escape_string($_POST["date"]);
		$mode = $conn->real_escape_string($_POST["mode"]);
		$pere = $conn->real_escape_string($_POST["pere"]);
		$mere = $conn->real_escape_string($_POST["mere"]);
		$lieu = $conn->real_escape_string($_POST["lieu"]);
		$tel = $conn->real_escape_string($_POST["tel"]);
		$whatsapp = $conn->real_escape_string($_POST["whatsapp"]);
        
        // Construction de la requête SQL pour la table "naissances"
        $sqlNaissance = "INSERT INTO naissances(NOM_ET_PRENOMS, SEXE, DATE_DE_NAISSANCE, MODE_DE_NAISSANCE,
                                    NOM_ET_PRENOMS_DU_PERE, NOM_ET_PRENOMS_DE_LA_MERE,
                                    LIEU_HABITATION_FAMILLE, TELEPHONE, WHATSAPP ) VALUES('$nom', '$sexe', '$date', '$mode',
                                    '$pere', '$mere', '$lieu', '$tel', '$whatsapp')";

        if ($conn->query($sqlNaissance) === true) {
            echo "Enregistrement de naissance réussi ! <br> MERCI D'AVOIR RENSEIGNE LE FORMULAIRE !";
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement de la naissance : " . $conn->error;
        }

        // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire decès
    } elseif (isset($_POST["deces_submit"])) {

        // Traitement du formulaire de decès
        $nomd = $conn->real_escape_string($_POST["nomd"]);
		$sexed = $conn->real_escape_string($_POST["sexed"]);
		$fonctiond = $conn->real_escape_string($_POST["fonctiond"]);
		$datenaissanced = $conn->real_escape_string($_POST["datenaissanced"]);
		$dated = $conn->real_escape_string($_POST["dated"]);
		$moded = $conn->real_escape_string($_POST["moded"]);
		$raisond = $conn->real_escape_string($_POST["raisond"]);
		$nomreferentd = $conn->real_escape_string($_POST["nomreferentd"]);
		$lieud = $conn->real_escape_string($_POST["lieud"]);
		$teld = $conn->real_escape_string($_POST["teld"]);

        // Construction de la requête SQL pour la table "deces"
        $sqlDeces = "INSERT INTO deces(NOM_ET_PRENOMS ,SEXE ,FONCTION ,DATE_DE_NAISSANCE, DATE_DE_DECES	,MODE_DE_DECES	,RAISON_DU_DECES, NOM_ET_PRENOM_PARENT_REFERENT, LIEU_HABITATION, TELEPHONE) 
		VALUES('$nomd', '$sexed', '$fonctiond','$datenaissanced','$dated', '$moded','$raisond', '$nomreferentd', '$lieud', '$teld')";

        if ($conn->query($sqlDeces) === true) {
            echo "Enregistrement de deces réussi ! <br> MERCI D'AVOIR RENSEIGNE LE FORMULAIRE !";
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement du deces : " . $conn->error;
        }

        // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire aménagement
    }elseif (isset($_POST["amenagement_submit"])) {

        // Traitement du formulaire d'aménagement
        $noma = $conn->real_escape_string($_POST["noma"]);
		$sexea = $conn->real_escape_string($_POST["sexea"]);
		$fonctiona = $conn->real_escape_string($_POST["fonctiona"]);
		$datea = $conn->real_escape_string($_POST["datea"]);
		$provenancea = $conn->real_escape_string($_POST["provenancea"]);
		$modea = $conn->real_escape_string($_POST["modea"]);
		$lieua = $conn->real_escape_string($_POST["lieua"]);
		$tela = $conn->real_escape_string($_POST["tela"]);
		$whatsappa = $conn->real_escape_string($_POST["whatsappa"]);

        // Construction de la requête SQL pour la table "amenagement"
        $sqlAmenagement = "INSERT INTO amenagements(NOM_ET_PRENOMS, SEXE, FONCTION, DATE_DE_NAISSANCE,	PROVENANCE, MODE_HEBERGEMENT, LIEU_HABITATION, TELEPHONE, WHATSAPP) 
		VALUES('$noma', '$sexea', '$fonctiona','$datea', '$provenancea','$modea',
		'$lieua', '$tela','$whatsappa')";

        if ($conn->query($sqlAmenagement) === true) {
            echo "Enregistrement d'amenagement réussi ! <br> MERCI D'AVOIR RENSEIGNE LE FORMULAIRE !";
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement du deces : " . $conn->error;
        }

        // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire déménagement
    }elseif (isset($_POST["demenagement_submit"])) {

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
            echo "Enregistrement de demenagement réussi ! <br> MERCI D'AVOIR RENSEIGNE LE FORMULAIRE !";
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement du demenagement : " . $conn->error;
        }

        // Vérifie si l'utilisateur à cliquer sur "SUBMIT" du formulaire emploi
    }elseif (isset($_POST["emploi_submit"])) {

        // Traitement du formulaire emploi
        $nome = $conn->real_escape_string($_POST["nome"]);
		$servicee = $conn->real_escape_string($_POST["servicee"]);
		$qualificatione = $conn->real_escape_string($_POST["qualificatione"]);
		$tele = $conn->real_escape_string($_POST["tele"]);
		$whatsappe = $conn->real_escape_string($_POST["whatsappe"]);
		$commentairee = $conn->real_escape_string($_POST["commentairee"]);

        // Construction de la requête SQL pour la table "emploi"
        $sqlEmploi = "INSERT INTO offres_emploi(NOM_ET_PRENOMS, OFFRES_SERVICE, QUALIFICATIONS, TELEPHONE, WHATSAPP, MESSAGE_A_PASSER) 
		VALUES('$nome', '$servicee', '$qualificatione',
	    '$tele', '$whatsappe', '$commentairee')";

        if ($conn->query($sqlEmploi) === true) {
            echo "Enregistrement d'emploi réussi ! <br> MERCI D'AVOIR RENSEIGNE LE FORMULAIRE !";
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement d'emploi : " . $conn->error;
        }
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
<br><br>
<div style="padding-left: 20px;">
    <button style="background-color: #4070f4; border:none; border-radius: 5px; "><a href="index.php" style=" text-decoration:none; font-weight: 800; color: #fff;">Aller à l'accueil</a></button>
</div>