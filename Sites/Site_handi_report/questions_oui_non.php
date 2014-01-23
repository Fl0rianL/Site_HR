
<div class="question_block">
	<form method="post" action="#">
	   <p>
			<script language="javascript">
				function Check_just_one() {
					if (document.forms.frm.oui.checked != 0) {
						document.forms.frm.non.checked = 0;
					}
					else if(document.forms.frm.non.checked != 0) {
						document.forms.frm.oui.checked = 0;
					}
				}
			</script>
		   <span class="question_question">Question :</span> <br /><br/>
		   <input type="checkbox" name="oui" onchange="Check_just_one()" id="oui" /> <label for="oui">oui</label>
		   <input type="checkbox" name="non" onchange="Check_just_one()" id="non" /> <label for="non">non</label><br />
	   </p>
	</form>
</div>
