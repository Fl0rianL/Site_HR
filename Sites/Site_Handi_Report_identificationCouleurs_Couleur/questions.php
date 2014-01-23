<html>
	<head>
	<title>Handi Report - Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/connexion.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/questions.css" rel="stylesheet">
</html>


<div class="center">
	<h1>Questionnaire</h1>
</div>

<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
		<li data-target="#myCarousel" data-slide-to="6"></li>
		<li data-target="#myCarousel" data-slide-to="7"></li>
	</ol>
	<!-- Carousel items -->
	<div class="carousel-inner ">
		<div class="active item">
			<div class="question_block">
				<form method="post" action="#" name="question_o/n_1">
				   <p>
						<span class="question_question">Question 1:</span> <br /><br/>
						<input type="checkbox" name="oui" onClick="ChangeStatut_oui_non(this.form)" onchange="Check_just_one_no(this.form)" id="oui" /> <label for="oui">oui</label>
						<input type="checkbox" name="non" onClick="ChangeStatut_oui_non(this.form)" onchange="Check_just_one_yes(this.form)" id="non" /> <label for="non">non</label><br />
				   </p>
				   <a href="#myCarousel" data-slide="next"><input type="submit" name="validation" class="btn btn-primary" value="Valider" disabled /></a>
				</form>
			</div>
		</div>
		
		<div class="item">
			<div class="question_block">
				<form method="post" action="#" name="question_o/n_2">
				   <p>
						<span class="question_question">Question 2:</span> <br /><br/>
						<input type="checkbox" name="oui" onClick="ChangeStatut_oui_non(this.form)" onchange="Check_just_one_no(this.form)" id="oui" /> <label for="oui">oui</label>
						<input type="checkbox" name="non" onClick="ChangeStatut_oui_non(this.form)" onchange="Check_just_one_yes(this.form)" id="non" /> <label for="non">non</label><br />
				   </p>
				   <a href="#myCarousel" data-slide="next"><input type="submit" name="validation" class="btn btn-primary" value="Valider" disabled /></a>
				</form>
			</div>
		</div>
		
		<div class="item">
			<div class="question_block">
				<form method="post" action="#" name="question_o/n_3">
				   <p>
						<span class="question_question">Question 3:</span> <br /><br/>
						<input type="checkbox" name="oui" onClick="ChangeStatut_oui_non(this.form)" onchange="Check_just_one_no(this.form)" id="oui" /> <label for="oui">oui</label>
						<input type="checkbox" name="non" onClick="ChangeStatut_oui_non(this.form)" onchange="Check_just_one_yes(this.form)" id="non" /> <label for="non">non</label><br />
				   </p>
				   <a href="#myCarousel" data-slide="next"><input type="submit" name="validation" class="btn btn-primary" value="Valider" disabled /></a>
				</form>
			</div>
		</div>
		
		<div class="item">
			<div class="question_block">
				<form method="post" action="#" name="question_QCM_1">
				<p>
				<span class="question_question">Question QCM 1:</span> <br />
				<input type="checkbox" name="reponse1" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r1(this.form)" id="value1" /> <label for="value1">reponse number 1</label><br />
				<input type="checkbox" name="reponse2" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r2(this.form)" id="value2" /> <label for="value2">reponse number 2</label><br />
				<input type="checkbox" name="reponse3" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r3(this.form)" id="value3" /> <label for="value3">reponse number 3</label>
				</p>
				<a href="#myCarousel" data-slide="next"><input type="submit" name="validation" class="btn btn-primary" value="Valider" disabled /></a>
				</form>
			</div>
		</div>
		
		<div class="item">
			<div class="question_block">
				<form method="post" action="#" name="question_QCM_2">
				<p>
				<span class="question_question">Question QCM 2:</span> <br />
				<input type="checkbox" name="reponse1" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r1(this.form)" id="value1" /> <label for="value1">reponse number 1</label><br />
				<input type="checkbox" name="reponse2" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r2(this.form)" id="value2" /> <label for="value2">reponse number 2</label><br />
				<input type="checkbox" name="reponse3" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r3(this.form)" id="value3" /> <label for="value3">reponse number 3</label>
				</p>
				<a href="#myCarousel" data-slide="next"><input type="submit" name="validation" class="btn btn-primary" value="Valider" disabled /></a>
				</form>
			</div>
		</div>
		
		<div class="item">
			<div class="question_block">
				<form method="post" action="#" name="question_QCM_3">
				<p>
				<span class="question_question">Question QCM 3:</span> <br />
				<input type="checkbox" name="reponse1" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r1(this.form)" id="value1" /> <label for="value1">reponse number 1</label><br />
				<input type="checkbox" name="reponse2" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r2(this.form)" id="value2" /> <label for="value2">reponse number 2</label><br />
				<input type="checkbox" name="reponse3" onClick="ChangeStatut_qcm(this.form)" onchange="Check_just_one_qcm_r3(this.form)" id="value3" /> <label for="value3">reponse number 3</label>
				</p>
				<a href="#myCarousel" data-slide="next"><input type="submit" name="validation" class="btn btn-primary" value="Valider" disabled /></a>
				</form>
			</div>
		</div>
		
		<div class="item">
			<div class="question_block">
				<form method="post" action="#" name="question_ouverte">
				<p>
				   <label for="question_question"> Question ouverte: </label><br />
				   <textarea name="reponse_question_ouverte" id="reponse_question_ouverte" rows="10" cols="200"> </textarea> <br/>
				   <a href=""><input type="submit" name="validation" class="btn btn-primary" value="Envoyer"/></a></input>
				</p>
				</form>
			</div>
		</div>		
	</div>
	<!-- Carousel nav -->
	<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	<!-- script pour les questionnaires -->
	<script src="js/transitions_questions.js"></script>
</div>