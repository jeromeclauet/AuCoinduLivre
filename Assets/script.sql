#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE `aucoindulivre`
CHARACTER SET `utf8`;
USE `aucoindulivre`;

#------------------------------------------------------------
# Table: m3u0l_genders
#------------------------------------------------------------

CREATE TABLE `m3u0l_genders`(
        `id`   Int  Auto_increment  NOT NULL ,
        `name` Varchar (50) NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `m3u0l_genders`(`id`, `name`)
VALUES 
(1, 'Romans'),
(2, 'Société'),
(3, 'Histoire'),
(4, 'Sports');


#------------------------------------------------------------
# Table: m3u0l_authors
#------------------------------------------------------------

CREATE TABLE `m3u0l_authors`(
        `id`              Int  Auto_increment  NOT NULL ,
        `lastNameAuthor`  Varchar (50) NOT NULL ,
        `firstNameAuthor` Varchar (50) NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB;

INSERT INTO `m3u0l_authors`(`id`, `lastNameAuthor`, `firstNameAuthor`)
VALUES 
(1, 'Fontanieu', 'Bastien'),
(2, 'Martin', 'Alexandre'),
(3, 'Müller', 'Julien'),
(4, 'Salliou', 'Anthony'),
(5, 'Lazenby', 'Roland'),
(6, 'Doc', 'Seven'),
(7, 'Bern', 'Stéphane'),
(8, 'Luneau', 'Aurélie'),
(9, 'Guérout', 'Jeanne'),
(10, 'Martens', 'Stefan'),
(11, 'Alivon', 'Alain'),
(12, 'Soubelet', 'Bertrand'),
(13, 'Des Bois', 'Rabbin'),
(14, 'Hébert', 'André'),
(15, 'Gil Jimenez', 'Ugo'),
(16, 'Abauzit', 'Adrien'),
(17, 'Wolff', 'Michael'),
(18, 'Nota', 'Benne'),
(19, 'Barreau', 'Nicolas'),
(20, 'Camus', 'Albert'),
(21, 'Ernaux', 'Annie'),
(22, 'Uhlman', 'Fred');



#------------------------------------------------------------
# Table: m3u0l_usersRoles
#------------------------------------------------------------

CREATE TABLE `m3u0l_usersRoles`(
        `id`   Int  Auto_increment  NOT NULL ,
        `name` Varchar (50) NOT NULL,
	PRIMARY KEY (`id`)
)ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `m3u0l_usersRoles`(`id`, `name`)
VALUES 
(1,'Administrateur'),
(2, 'Membres');


#------------------------------------------------------------
# Table: m3u0l_users
#------------------------------------------------------------

CREATE TABLE `m3u0l_users`(
        `id`                  Int  Auto_increment  NOT NULL ,
        `username`            Varchar (50) NOT NULL ,
        `mail`                Varchar (255) NOT NULL ,
        `password`            Varchar (255) NOT NULL ,
        `id_m3u0l_usersRoles` Int NOT NULL,
	PRIMARY KEY (`id`),
	KEY `m3u0l_users_m3u0l_usersRoles_FK` (`id_m3u0l_usersRoles`)
)ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `m3u0l_users` (`id`, `username`, `mail`, `password`, `id_m3u0l_usersRoles`)
VALUES 
(1, 'Akira', 'lululul@hotmail.fr', 'mdrputain09', 1),
(7, 'Roronoa', 'lesabreurdu60@outlook.com', 'jetedecoupe07', 2);
 

#------------------------------------------------------------
# Table: m3u0l_comments
#------------------------------------------------------------

CREATE TABLE `m3u0l_comments`(
        `id`             Int  Auto_increment  NOT NULL ,
        `comments`       Text NOT NULL ,
        `date`           Date NOT NULL ,
        `id_m3u0l_users` Int NOT NULL,
	PRIMARY KEY (`id`),
	KEY `m3u0l_coments_m3u0l_users_FK` (`id_m3u0l_users`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `m3u0l_comments`(`id`, `comments`, `date`, `id_m3u0l_users`)
VALUES
(1, 'VTF', 22/07/2020, 7); 


#------------------------------------------------------------
# Table: m3u0l_articles
#------------------------------------------------------------

CREATE TABLE `m3u0l_articles`(
        `id`                Int  Auto_increment  NOT NULL ,
        `name`              Varchar (50) NOT NULL ,
        `content`           Text NOT NULL ,
        `id_m3u0l_comments` Int NOT NULL,
	PRIMARY KEY (`id`)
	KEY `m3u0l_articles_m3u0l_comments_FK`(`id_m3u0l_comments`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `m3u0l_articles` (`id`, `name`, `content`, `id_m3u0l_comments`)
VALUES
(1, 'Un soir à Paris', 'Il était une fois le cinéma Paradis…
Alain Bonnard, jeune propriétaire d'un cinéma, se décide à inviter une jeune inconnue, Mélanie, qui assiste chaque mercredi à la dernière séance. Deux jours plus tard, un célèbre réalisateur annonce au jeune homme qu'il désire tourner son prochain film dans le cinéma. Alain pense que la chance lui sourit. Deux choses m'étonnent toujours chez Nicolas Barreau. Tout d'abord, c'est le plus français des auteurs allemands. Jamais je n'aurais cru, en lisant un de ses livres pour la première fois, que cet auteur n'était pas français. Aussi bien ses intrigues que ses phrasés sentent bons la France tout au long de ses ouvrages... Et pourtant, même s'il nous entraîne, dans un soir à Paris, à travers la capitale française, soulignant de ci de là ses merveilles architecturales comme ce fabuleux pont Alexandre III, Nicolas Barreau a bien rédigé l'original dans la langue de Goethe. Ensuite, je reste toujours admirative devant les auteurs masculins qui parviennent à me faire rêver grâce à de belles histoires d'amour, toute en finesse et légèreté. Un soir à Paris ne fait pas exception. C'est avec beaucoup de joie que l'on découvre les premiers pas amoureux d'Alain et Mélanie; c'est avec un pincement au cœur qu'on réalise, avec Alain, qu'il l'a peut-être perdue et c'est avec beaucoup d'espoir qu'on croise le doigts pour qu'il la retrouve. Et sachant que l'auteur aime à jouer avec les coïncidences dans ses romans, on n'est pas surpris d'être baladé dans l'ouvrage comme le héros se balade dans Paris. Enfin, le cœur de l'histoire se situe dans un petit cinéma d'art et d'essai de quartier, c'est donc aussi l'occasion pour Nicolas Barreau de faire un clin d'œil à Woody Allen et de nous rappeler quelques grands noms du 7e art. Vous l'aurez compris, Un soir à Paris est fait pour les amoureux; les amoureux de Paris, les amoureux de belles histoires, les amoureux du cinéma... les amoureux tout court.', 1);

#------------------------------------------------------------
# Table: m3u0l_notation
#------------------------------------------------------------

CREATE TABLE `m3u0l_notation`(
        `id`             Int  Auto_increment  NOT NULL ,
        `notation`       Int NOT NULL ,
        `id_m3u0l_users` Int NOT NULL,
	PRIMARY KEY (`id`),
	KEY `m3u0l_notation_m3u0l_users`(`id_m3u0l_users`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


#------------------------------------------------------------
# Table: m3u0l_books
#------------------------------------------------------------

CREATE TABLE `m3u0l_books`(
        `id`                Int  Auto_increment  NOT NULL ,
        `title`             Varchar (50) NOT NULL ,
        `releasedate`       Date NOT NULL ,
        `pagenumber`        Int NOT NULL ,
        `editor`            Varchar (50) NOT NULL ,
        `collection`        Varchar (50) NOT NULL ,
        `id_m3u0l_articles` Int NOT NULL ,
        `id_m3u0l_genders`  Int NOT NULL ,
        `id_m3u0l_authors`  Int NOT NULL ,
        `id_m3u0l_notation` Int NOT NULL ,
	PRIMARY KEY (`id`),
	KEY `m3u0l_books_m3u0l_articles_FK` (`id_m3u0l_articles`),
	KEY `m3u0l_books_m3u0l_genders_FK` (`id_m3u0l_genders`),
	KEY `m3u0l_books_m3u0l_authors_FK` (`id_m3u0l_authors`),
	KEY `m3u0l_books_m3u0l_notation_FK` (`id_m3u0l_notation`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




--- Contraintes pour la table `m3u0l_users`

ALTER TABLE `m3u0l_users`
ADD CONSTRAINT `m3u0l_users_m3u0l_usersRoles_FK` FOREIGN KEY (`id_m3u0l_usersRoles`) REFERENCES `m3u0l_usersRoles`(`id`);


--- Contraintes pour la table `m3u0l_comments`

ALTER TABLE `m3u0l_comments`
ADD CONSTRAINT `m3u0l_comments_m3u0l_users_FK` FOREIGN KEY (`id_m3u0l_users`) REFERENCES `m3u0l_users`(`id`);

--- Contraintes pour la table `m3u0l_books`

ALTER TABLE `m3u0l_books`
ADD CONSTRAINT `m3u0l_books_m3u0l_articles_FK` FOREIGN KEY (`id_m3u0l_articles`) REFERENCES `m3u0l_articles`(`id`),
ADD CONSTRAINT `m3u0l_books_m3u0l_genders0_FK` FOREIGN KEY (`id_m3u0l_genders`) REFERENCES `m3u0l_genders`(`id`),
ADD CONSTRAINT `m3u0l_books_m3u0l_authors1_FK` FOREIGN KEY (`id_m3u0l_authors`) REFERENCES `m3u0l_authors`(`id`),
ADD CONSTRAINT `m3u0l_books_m3u0l_notation2_FK` FOREIGN KEY (`id_m3u0l_notation`) REFERENCES `m3u0l_notation`(`id`);


--- Contraintes pour la table `m3u0l_articles`

ALTER TABLE `m3u0l_articles`
ADD CONSTRAINT `m3u0l_articles_m3u0l_comments_FK` FOREIGN KEY (`id_m3u0l_comments`) REFERENCES `m3u0l_comments`(`id`);

--- Contraintes pour la table `m3u0l_notation`

ALTER TABLE `m3u0l_notation`
ADD CONSTRAINT `m3u0l_notation_m3u0l_users_FK` FOREIGN KEY (`id_m3u0l_users`) REFERENCES `m3u0l_users`(`id`);