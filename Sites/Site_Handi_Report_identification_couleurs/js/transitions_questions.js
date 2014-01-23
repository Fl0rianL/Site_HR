/* ********************************************************************************
   *        Fonctions pour cocher qu'un seul checkbox des formulaires 	CHECK!!
   ******************************************************************************** */

/* Fonctions pour les questions oui/non  */

function Check_just_one_yes(formulaire) {
	if (formulaire.oui.checked == true && formulaire.non.checked == true) {
		formulaire.oui.checked = false;
	}
}
function Check_just_one_no(formulaire) {
	if (formulaire.non.checked == true && formulaire.oui.checked == true) {
		formulaire.non.checked = false;
	}
}

/* Fonctions pour les  QCM (petit bug en validant reponse1 puis reponse2...) */

function Check_just_one_qcm_r1(formulaire) {
	if (formulaire.reponse2.checked == true && formulaire.reponse1.checked == true) {
		formulaire.reponse2.checked = false;
	}
	else if(formulaire.reponse3.checked == true && formulaire.reponse1.checked == true) {
		formulaire.reponse3.checked = false;
	}
}
function Check_just_one_qcm_r2(formulaire) {
	if (formulaire.reponse1.checked == true && formulaire.reponse2.checked == true) {
		formulaire.reponse1.checked = false;
	}
	else if(formulaire.reponse3.checked == true && formulaire.reponse2.checked == true) {
		formulaire.reponse3.checked = false;
	}
}
function Check_just_one_qcm_r3(formulaire) {
	if (formulaire.reponse1.checked == true && formulaire.reponse3.checked == true) {
		formulaire.reponse1.checked = false;
	}
	else if(formulaire.reponse3.checked == true && formulaire.reponse2.checked == true) {
		formulaire.reponse2.checked = false;
	}
}


/* *********************************************************************************
   *        Fonctions pour les boutons valider des formulaires 		CHECK!!
   ********************************************************************************* */

/* marche pas comme fonction générale... sais à peu près pk mais bon... 
function Changer_Statut_Valider(formulaire) {
	for (var i=0; i<formulaire.elements.length; i++) {
		if (formulaire.elements[i].checked == true) { 
			formulaire.validation.disabled = false 
		}
		else
		{ formulaire.validation.disabled = true }
	}
}
*/

/* fonctions pour rendre disabled les boutons valider des formulaires si rien de coché!! Un peu lourd cependant... */
function ChangeStatut_oui_non(formulaire) {
if(formulaire.oui.checked == true || formulaire.non.checked == true) {formulaire.validation.disabled = false }
if(formulaire.oui.checked == false && formulaire.non.checked == false ) {formulaire.validation.disabled = true }
}

function ChangeStatut_qcm(formulaire) {
if(formulaire.reponse1.checked == true || formulaire.reponse2.checked == true || formulaire.reponse3.checked == true) {formulaire.validation.disabled = false }
if(formulaire.reponse1.checked == false && formulaire.reponse1.checked == false && formulaire.reponse3.checked == false ) {formulaire.validation.disabled = true }
}

/* ************************************************************************************************
   *        Fonctions pour les transitions de page (mais normalement seul bootstrap suffit...
   ************************************************************************************************ */

/* évite que le caroussel ne défile tout seul... apparement ça marche pas très bien...*/
$('.carousel').carousel({
  interval: false
})

   
/* Transition sous forme "transparente" un peu chiante a mon gout...

$(document).ready(function() {

$("body").css("display", "none");

$("body").fadeIn(500);

$("a.transition").click(function(event){
	event.preventDefault();
	linkLocation = this.href;
	$("body").fadeIn(500, redirectPage);		
});
	
function redirectPage() {
	window.location = linkLocation;
}

});


/* Transition avec slide horizontal de la page !! Attention ne peut s'utiliser qu'avec jquery.easing.1.3.js

function Animate2id(id,ease){ //the id to animate, the easing type
	var animSpeed=3000; //set animation speed
	var $container=$("#container"); //define the container to move
	if(ease){ //check if ease variable is set
		var easeType=ease;
	} else {
    	var easeType="easeOutQuart"; //set default easing type
	}
	//do the animation
    $container.stop().animate({"left": -($(id).position().left)}, animSpeed, easeType);
}

*/