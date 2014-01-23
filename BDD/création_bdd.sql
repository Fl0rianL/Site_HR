CREATE TABLE Personne(
id_personne INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom VARCHAR(50),
prenom VARCHAR(50),
mail VARCHAR(50)
); 

CREATE TABLE Referent(
id_referent INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom VARCHAR(50),
prenom VARCHAR(50),
mail VARCHAR(50),
id_referent_personne INT NOT NULL,
CONSTRAINT FK_REFERENT_PERSONNE FOREIGN KEY (id_referent_personne) REFERENCES Personne(id_personne)
);

CREATE TABLE Patron(
id_patron INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom VARCHAR(50),
prenom VARCHAR(50),
mail VARCHAR(50),
id_patron_personne INT NOT NULL,
CONSTRAINT FK_PATRON_PERSONNE FOREIGN KEY (id_patron_personne) REFERENCES Personne(id_personne)
);

CREATE TABLE Famille(
id_famille INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nom VARCHAR(50),
mail VARCHAR(50),
id_famille_personne INT NOT NULL,
CONSTRAINT FK_FAMILLE_PERSONNE FOREIGN KEY (id_famille_personne) REFERENCES Personne(id_personne)
);

CREATE TABLE Date_questions(
id_date INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
jour_releve_questionnaire DATE
);

CREATE TABLE Questionnaire(
id_questionnaire INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
question_oui_non_1 INT,
question_oui_non_2 INT,
question_oui_non_3 INT,
question_qcm_1 INT,
question_qcm_2 INT,
question_qcm_3 INT,
mail VARCHAR(50),
id_questionnaire_personne INT,
id_questionnaire_date INT,
CONSTRAINT FK_QUESTIONNAIRE_PERSONNE FOREIGN KEY (id_questionnaire_personne) REFERENCES Personne(id_personne),
CONSTRAINT FK_QUESTIONNAIRE_DATE FOREIGN KEY (id_questionnaire_date) REFERENCES Date_questions(id_date)
);