<?php
    require_once("conf/messages.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Handi Report</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/connexion.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet" media="screen">
	</head>
<body>
    
	<div class="container">
        <div class="navbar">
            <div class="navbar-inner">
                <h1>Handi Report</h1>
            </div>
        </div>
		<form class="form-signin center" method="post" action = "data/connexion.php">
			<input type="text" class="input-block-level" placeholder="Nom" name="nom">
			<input type="checkbox" name="marron" id="marron"/><label for="marron"><img src="img/marron.jpeg" alt="marron" class="img-rounded"/></label>
			<input type="checkbox" name="rouge" id="rouge"/><label for="rouge"><img src="img/rouge.gif" alt="rouge" class="img-rounded"/></label>
			<input type="checkbox" name="bleu_clair" id="bleu_clair"/><label for="bleu_clair"><img src="img/bleu_clair.jpg" class="img-rounded" alt="bleu clair"/></label>
			<input type="checkbox" name="noir" id="noir"/><label for="noir"><img src="img/noir.jpeg" alt="noir" class="img-rounded"/></label>
			<input type="checkbox" name="rose" id="rose"/><label for="rose"><img src="img/rose.jpg" alt="rose" class="img-rounded"/></label>
			<input type="checkbox" name="vert" id="vert"/><label for="vert"><img src="img/vert.gif" alt="vert" class="img-rounded"/></label>
			<input type="checkbox" name="bleu_fonce" id="bleu_fonce"/><label for="bleu_fonce"><img src="img/bleu_fonce.jpg" alt="bleu_fonce" class="img-rounded"/></label>
			<input type="checkbox" name="gris" id="gris"/><label for="gris"><img src="img/gris.jpeg" alt="gris" class="img-rounded" name="gris"/></label>
			<input type="checkbox" name="orange" id="orange"/><label for="orange"><img src="img/orange.jpeg" alt="orange" class="img-rounded"/></label>
			<input type="checkbox" name="violet" id="violet"/><label for="violet"><img src="img/violet.jpg" alt="violet" class="img-rounded"/></label>
			<input type="checkbox" name="jaune" id="jaune"/><label for="jaune"><img src="img/jaune.gif" alt="jaune" class="img-rounded"/></label>
			<br/>
			<div class="center">
				<button class="btn btn-large btn-primary" type="submit">Se connecter</button>
				<input type="hidden" name="page" value="connexion">
			</div>
		</form>

<?php
        if( isset($_GET['i_message']) ){
            echo'<div class="alert alert-error center">'.$messages[$_GET['i_message']].'</div>';
        }
?>

	</div>

</body>
</html>