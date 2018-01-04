#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Association
#------------------------------------------------------------

CREATE TABLE Association(
        idAsso          int (11) Auto_increment  NOT NULL ,
        nomAsso         Varchar (25) NOT NULL ,
        siretAsso       Int NOT NULL ,
        email           Varchar (100) NOT NULL ,
        telephone       Int NOT NULL ,
        mdp             Varchar (25) NOT NULL ,
        dateInscription Date NOT NULL ,
        PRIMARY KEY (idAsso )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Enseigne
#------------------------------------------------------------

CREATE TABLE Enseigne(
        idEns           int (11) Auto_increment  NOT NULL ,
        nomEns          Varchar (25) NOT NULL ,
        siretEns        Int NOT NULL ,
        email           Varchar (100) NOT NULL ,
        telephone       Int NOT NULL ,
        inscription     Varchar (25) NOT NULL ,
        mdp             Varchar (25) NOT NULL ,
        dateInscription Date NOT NULL ,
        PRIMARY KEY (idEns )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ville
#------------------------------------------------------------

CREATE TABLE Ville(
        idVille     int (11) Auto_increment  NOT NULL ,
        codePostal  Int NOT NULL ,
        departement Varchar (25) NOT NULL ,
        region      Varchar (25) NOT NULL ,
        PRIMARY KEY (idVille )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Offre
#------------------------------------------------------------

CREATE TABLE Offre(
        idOffre       int (11) Auto_increment  NOT NULL ,
        titreOffre    Varchar (25) NOT NULL ,
        libeleOffre   Varchar (50) NOT NULL ,
        nombreProduit Int NOT NULL ,
        dateDebut     Date NOT NULL ,
        dateFin       Date NOT NULL ,
        prixOffre     Float NOT NULL ,
        PRIMARY KEY (idOffre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        idProduit   int (11) Auto_increment  NOT NULL ,
        nomProduit  Varchar (25) NOT NULL ,
        prixUnite   Float NOT NULL ,
        descProduit Varchar (255) NOT NULL ,
        PRIMARY KEY (idProduit )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ContactAsso
#------------------------------------------------------------

CREATE TABLE ContactAsso(
        idContact     int (11) Auto_increment  NOT NULL ,
        nomcontact    Varchar (55) NOT NULL ,
        prenomContact Varchar (55) NOT NULL ,
        email         Varchar (100) NOT NULL ,
        telephone     Int NOT NULL ,
        age           Int NOT NULL ,
        identifiant   Varchar (25) NOT NULL ,
        mdp           Varchar (50) NOT NULL ,
        idAsso        Int NOT NULL ,
        PRIMARY KEY (idContact )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        idCommande int (11) Auto_increment  NOT NULL ,
        PRIMARY KEY (idCommande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ContactEns
#------------------------------------------------------------

CREATE TABLE ContactEns(
        idContactEns  int (11) Auto_increment  NOT NULL ,
        nomContact    Varchar (55) NOT NULL ,
        prenomContact Varchar (55) NOT NULL ,
        email         Varchar (100) NOT NULL ,
        telephone     Int NOT NULL ,
        age           Int NOT NULL ,
        identifiant   Varchar (25) NOT NULL ,
        mdp           Varchar (25) NOT NULL ,
        idEns         Int NOT NULL ,
        PRIMARY KEY (idContactEns )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Gerer
#------------------------------------------------------------

CREATE TABLE Gerer(
        idContact  Int NOT NULL ,
        idCommande Int NOT NULL ,
        PRIMARY KEY (idContact ,idCommande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contenir
#------------------------------------------------------------

CREATE TABLE Contenir(
        idProduit Int NOT NULL ,
        idOffre   Int NOT NULL ,
        PRIMARY KEY (idProduit ,idOffre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: seSitue
#------------------------------------------------------------

CREATE TABLE seSitue(
        idEns   Int NOT NULL ,
        idVille Int NOT NULL ,
        PRIMARY KEY (idEns ,idVille )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: seTrouver
#------------------------------------------------------------

CREATE TABLE seTrouver(
        idVille Int NOT NULL ,
        idAsso  Int NOT NULL ,
        PRIMARY KEY (idVille ,idAsso )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Interesser
#------------------------------------------------------------

CREATE TABLE Interesser(
        idCommande Int NOT NULL ,
        idOffre    Int NOT NULL ,
        PRIMARY KEY (idCommande ,idOffre )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Deposer
#------------------------------------------------------------

CREATE TABLE Deposer(
        idContactEns Int NOT NULL ,
        idOffre      Int NOT NULL ,
        PRIMARY KEY (idContactEns ,idOffre )
)ENGINE=InnoDB;

ALTER TABLE ContactAsso ADD CONSTRAINT FK_ContactAsso_idAsso FOREIGN KEY (idAsso) REFERENCES Association(idAsso);
ALTER TABLE ContactEns ADD CONSTRAINT FK_ContactEns_idEns FOREIGN KEY (idEns) REFERENCES Enseigne(idEns);
ALTER TABLE Gerer ADD CONSTRAINT FK_Gerer_idContact FOREIGN KEY (idContact) REFERENCES ContactAsso(idContact);
ALTER TABLE Gerer ADD CONSTRAINT FK_Gerer_idCommande FOREIGN KEY (idCommande) REFERENCES Commande(idCommande);
ALTER TABLE Contenir ADD CONSTRAINT FK_Contenir_idProduit FOREIGN KEY (idProduit) REFERENCES Produit(idProduit);
ALTER TABLE Contenir ADD CONSTRAINT FK_Contenir_idOffre FOREIGN KEY (idOffre) REFERENCES Offre(idOffre);
ALTER TABLE seSitue ADD CONSTRAINT FK_seSitue_idEns FOREIGN KEY (idEns) REFERENCES Enseigne(idEns);
ALTER TABLE seSitue ADD CONSTRAINT FK_seSitue_idVille FOREIGN KEY (idVille) REFERENCES Ville(idVille);
ALTER TABLE seTrouver ADD CONSTRAINT FK_seTrouver_idVille FOREIGN KEY (idVille) REFERENCES Ville(idVille);
ALTER TABLE seTrouver ADD CONSTRAINT FK_seTrouver_idAsso FOREIGN KEY (idAsso) REFERENCES Association(idAsso);
ALTER TABLE Interesser ADD CONSTRAINT FK_Interesser_idCommande FOREIGN KEY (idCommande) REFERENCES Commande(idCommande);
ALTER TABLE Interesser ADD CONSTRAINT FK_Interesser_idOffre FOREIGN KEY (idOffre) REFERENCES Offre(idOffre);
ALTER TABLE Deposer ADD CONSTRAINT FK_Deposer_idContactEns FOREIGN KEY (idContactEns) REFERENCES ContactEns(idContactEns);
ALTER TABLE Deposer ADD CONSTRAINT FK_Deposer_idOffre FOREIGN KEY (idOffre) REFERENCES Offre(idOffre);
