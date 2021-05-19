CREATE TABLE athletes (
id int, 
nom varchar(300),
sexe varchar(3),
PRIMARY KEY (id)
);

INSERT INTO athletes (id, nom, sexe)
VALUES
(1, 'Tom', 'm'),
(2, 'Jerry', 'm'),
(3, 'Titi', 'f');
