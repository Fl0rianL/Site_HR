<?php

// Par défaut apache risque renvoyer entêtes en standard ISO-8859-1
// Indique le bon format des entêtes
header('Content-type: text/html; charset=UTF-8');

// Fonction pour la récupération des variables : test la configuration get_magic_quotes_gpc du serveur
function Verifier_magicquotes ($p_chaine)
{
	if (get_magic_quotes_gpc()) $p_chaine = stripslashes($p_chaine);
		return $p_chaine;
}

// Initialisation du message d'erreur
$i_message = null;

if ($_POST['page']=="connexion" )
{
	// Nettoie les variables
	$nom = (isset($_POST['nom']) && trim($_POST['nom']) != '')? Verifier_magicquotes($_POST['nom']) : null;

    if(isset($nom))
    {
    	
        // Futur scrip de co avec db

    	// TEMPO
    	if( ($nom == "test") && isset($_POST['marron']) && isset($_POST['rouge']) && isset($_POST['bleu_clair']) && isset($_POST['jaune']) )
        {
            session_start();

            // Var de test
            $_SESSION['nom'] = "NOM";
            $_SESSION['prenom'] = "Prenom";

            header("Location:../structure.php");
        }
        else{
            $i_message = "connexion_incorrecte";
            header("Location:../index.php?i_message={$i_message}");
        }
    }
    else{
        $i_message = 'connexion_incomplete';
        header("Location:../index.php?i_message={$i_message}");
    }
}
else
     header("Location:../index.php");
?>