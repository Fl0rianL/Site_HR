
<div class="question_block">
	<form method="post" action="#">
	   <p>
			<!-- si dans le QCM en quuestion on ne doit quand même cocher qu'une seule case
			alors le script suivant est nécessaire -->
			<script language="javascript">
				function Check_just_one() {
					if (document.forms.frm.reponse1.checked != 0) {
						document.forms.frm.reponse2.checked = 0;
						document.forms.frm.reponse3.checked =0;
					}
					else if(document.forms.frm.reponse2.checked != 0) {
						document.forms.frm.reponse1.checked = 0;
						document.forms.frm.reponse3.checked = 0;
					}
					else if(document.forms.frm.reponse3.checked != 0) {
						document.forms.frm.reponse1.checked = 0;
						document.forms.frm.reponse2.checked = 0;
					}
				}
			</script>
			<!-- S'il est vraiment utile penser à l'inclure dans les checkbox juste en dessous ;) -->
		   <span class="question_question">Question :</span> <br />
		   <input type="checkbox" name="reponse1" id="value1" /> <label for="value1">reponse number 1</label><br />
		   <input type="checkbox" name="reponse2" id="value2" /> <label for="value2">reponse number 2</label><br />
		   <input type="checkbox" name="reponse3" id="value3" /> <label for="value3">reponse number 3</label>
	   </p>
	</form>
</div>