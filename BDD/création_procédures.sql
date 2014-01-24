
/*Le delimiter permet de créer toutes les procédures en faisant juste un copier coller 
des codes dans la fenetre SQL de phpMyAdmin */

DELIMITER $$

/* ***************************************************
 *				Ajout de tables standard
 *****************************************************/


CREATE PROCEDURE ajout_personne(p_nom VARCHAR(50),p_prenom VARCHAR(50),p_mail VARCHAR(50))
BEGIN 
INSERT INTO Personne(nom_societe, mail, inscription) 
VALUES (p_nom, p_prenom, p_mail);
END$$

CREATE PROCEDURE ajout_referent(p_nom VARCHAR(50),p_prenom VARCHAR(50),p_mail VARCHAR(50), pid_referent_personne INT)
BEGIN 
INSERT INTO Referent(nom,prenom,mail,id_referent_personne)
VALUES (p_nom,p_prenom,p_mail, pid_referent_personne);
END$$

CREATE PROCEDURE ajout_patron(p_nom VARCHAR(50),p_prenom VARCHAR(50),p_mail VARCHAR(50), pid_patron_personne INT)
BEGIN 
INSERT INTO Patron(nom,prenom,mail,id_patron_personne)
VALUES (p_nom,p_prenom,p_mail, pid_patron_personne);
END$$

CREATE PROCEDURE ajout_famille(p_nom VARCHAR(50),p_mail VARCHAR(50), pid_famille_personne INT)
BEGIN 
INSERT INTO Famille(nom,mail,id_famille_personne)
VALUES (p_nom,p_mail, pid_famille_personne);
END$$

/*On ajoute une date seulement lors de lajout du questionnaire!!
=> pas besoin de créer une procédure dajout de date*/

CREATE PROCEDURE ajout_questionnaire(p_question_oui_non_1 INT,p_question_oui_non_2 INT,p_question_oui_non_3 INT,
p_question_qcm_1 INT,p_question_qcm_2 INT,p_question_qcm_3 INT,p_mail VARCHAR(50),
p_id_personne INT)
BEGIN
DECLARE v_id_date_questions INT; /* permet de stocker l'autoincrement actuel de la table Date_questions*/

SELECT `AUTO_INCREMENT` INTO v_id_date_questions FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA = 'handi-report' AND TABLE_NAME = 'Date_questions';

INSERT INTO Date_questions(jour_releve_questionnaire) VALUES (CURRENT_DATE);

INSERT INTO Questionnaire(question_oui_non_1,question_oui_non_2,
question_oui_non_3,question_qcm_1,question_qcm_2,question_qcm_3,
mail,id_questionnaire_personne, id_questionnaire_date)
VALUES (p_question_oui_non_1,p_question_oui_non_2,
p_question_oui_non_3,p_question_qcm_1,p_question_qcm_2,p_question_qcm_3,p_mail,p_id_personne, v_id_date_questions);
END$$













DELIMITER ;