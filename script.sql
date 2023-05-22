CREATE TABLE categorie (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE client (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(50) NOT NULL,
  nb_convives INT DEFAULT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE ingredients (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(255) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE menu (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  description VARCHAR(255) DEFAULT NULL,
  prix DOUBLE PRECISION NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE personnel (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(50) NOT NULL,
  role VARCHAR(50) NOT NULL,
  admin TINYINT(1) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE plats (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  description VARCHAR(255) DEFAULT NULL,
  photo VARCHAR(255) DEFAULT NULL,
  titre_photo VARCHAR(50) DEFAULT NULL,
  prix DOUBLE PRECISION NOT NULL,
  add_date DATETIME NOT NULL,
  categorie_id INT DEFAULT NULL,
  is_specialite TINYINT(1) NOT NULL,
  is_vegan TINYINT(1) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

  ALTER TABLE plats
  ADD CONSTRAINT FK_854A620ABCF5E72D
  FOREIGN KEY (categorie_id)
  REFERENCES categorie (id);
        

CREATE TABLE reservation (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  nb_couverts INT NOT NULL,
  date DATE NOT NULL,
  heure TIME NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE restaurant (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  couverts INT NOT NULL,
  ouv_midi VARCHAR(10) NOT NULL,
  ferm_midi VARCHAR(10) NOT NULL,
  ouv_soir VARCHAR(10) NOT NULL,
  ferm_soir VARCHAR(10) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE utilisateur (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(50) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE client (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) DEFAULT NULL,
  role VARCHAR(50) NOT NULL,
  nb_convives INT DEFAULT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

CREATE TABLE client_ingredients (
  client_id INT NOT NULL,
  ingredients_id INT NOT NULL,
  INDEX IDX_4A2B347419EB6921 (client_id),
  INDEX IDX_4A2B34743EC4DCE (ingredients_id),
  PRIMARY KEY(client_id, ingredients_id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

ALTER TABLE client_ingredients
ADD CONSTRAINT FK_4A2B347419EB6921
FOREIGN KEY (client_id) REFERENCES client (id) ON DELETE CASCADE;

ALTER TABLE client_ingredients
ADD CONSTRAINT FK_4A2B34743EC4DCE
FOREIGN KEY (ingredients_id)
REFERENCES ingredients (id) ON DELETE CASCADE;

CREATE TABLE personnel (
  id INT AUTO_INCREMENT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) DEFAULT NULL,
  role VARCHAR(50) NOT NULL,
  admin TINYINT(1) NOT NULL,
  PRIMARY KEY(id))
  DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

    

INSERT INTO categorie (nom) VALUES ('Entrées');
INSERT INTO categorie (nom) VALUES ('Plats');
INSERT INTO categorie (nom) VALUES ('Desserts');
INSERT INTO categorie (nom) VALUES ('Amuses-bouches');
INSERT INTO categorie (nom) VALUES ('Boissons');

INSERT INTO client (nom, prenom, email, password, nb_convives) VALUES ('Denis', 'Jean', 'jean.denis@gmail.com', 'jeanjean35', 4);
INSERT INTO client (nom, prenom, email, password, nb_convives) VALUES ('Taudiere', 'Faustine', 'faustine.taudiere@gmail.com', 'bebe1234', 3);

INSERT INTO ingredients(nom) VALUES ('oeuf');
INSERT INTO ingredients(nom) VALUES ('lait');
INSERT INTO ingredients(nom) VALUES ('moutarde');
INSERT INTO ingredients(nom) VALUES ('soja');
INSERT INTO ingredients(nom) VALUES ('noix');
INSERT INTO ingredients(nom) VALUES ('fraise');

INSERT INTO menu (nom, description, prix) VALUES ('Menu découverte', 'Découverte des nos plats phares', 70);
INSERT INTO menu (nom, description, prix) VALUES ('Menu saveurs', 'Découverte des nos plats les plus savoureux', 90);
INSERT INTO menu (nom, description, prix) VALUES ('Menu étoilé', 'Découverte des nos plats de chef', 120);

INSERT INTO personnel (nom, prenom, email, password, role, admin) VALUES ('Michant', 'Arnaud', 'arnaud.michant@quaiantiques.fr', 'arnaudleboss', 'Chef', 1);

INSERT INTO plats (nom, description, photo, titre_photo, prix, categorie_id, add_date, is_specialite, is_vegan)
VALUES (
  'Millefeuilles de légumes', 
  'Fenouil, navet, potimarron et épinards', 
  'https://dxm.dam.savencia.com/api/wedia/dam/transform/fix635d9eidk95or9xnd998tqic64pcktk99zuy/', 
  'Millefeuilles-légume', 
  800,
  (SELECT id FROM categorie WHERE nom = 'Amuses-bouches'),
  SYSDATE(),
  false,
  true );


  INSERT INTO restaurant (nom, couverts, ouv_midi, ouv_soir, ferm_midi, ferm_soir)
  VALUES ('Quai Antiques', 200, '12h00', '18h30', '14h30', '23h00');