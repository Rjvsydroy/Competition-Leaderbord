# projet-sylex_project

| Name | Student Number | Email |
| --- | --- | --- |
| Sydroy Rakotonomenjanahary | 300041897 | srako102@uottawa.ca |
| Zack Stempowicz | 300136018 | zstem023@uottawa.ca |
| Alex Benimana | 8524206 | abeni011@uottawa.ca |



## Livrable 1 (5%) Hello-World

| Note | Description | Commentaire |
| --- | --- | --- |
| 2.0 | Configuration du repo GitHub | [GitHub Repo](https://github.com/professor-forward/projet-sylex_project) |
| 2.5 | Modèle ER | Voir ci-dessous |
| 2.5 | Modèle relationnel / schéma SQL | Les images et SQL ci-dessous |
| 1.0 | Exemples SQL pour insérer, mettre à jour, sélectionner et supprimer des données | Voir les exemples ci-dessous|
| 1.0 | README.md contient toutes les informations requises | Voir _cette_ page |
| 1.0 | Utilisation de git (messages de commit, tous les étudiants impliqués) | Voir [les commits dans GitHub](https://github.com/professor-forward/projet-sylex_project/commits/main?before=15521741dd2bc59deccf698f92d8e57cf3c1af52+35&branch=main&path%5B%5D=README.md) |
| / 10 | |

(Note: les diagrammes ci-dessous ont été créés à partir de [LucidChart](https://lucid.app)

### ER Diagram

![ER Diagram](https://github.com/professor-forward/projet-sylex_project/blob/main/ER.png?raw=true)

### Model Relationnel

![Model Relationnel](https://github.com/professor-forward/projet-sylex_project/blob/main/ModelRelationnel.png?raw=true)

### Schema SQL

La base de donnée a été créée à partir de Postgres.

```bash
psql
> create database athletes ;
```

Création du schéma des athlètes à partir du code SQL suivant:

```sql
CREATE TABLE athletes (
id int, 
nom varchar(300),
sexe varchar(3),
PRIMARY KEY (id)
);
```

### Exemple de SQL

#### INSERT

```sql
INSERT INTO athletes (id, nom, sexe)
VALUES
(1, 'Tom', 'm'),
(2, 'Jerry', 'm'),
(3, 'Titi', 'f');
```
#### SELECT

```sql
SELECT *
FROM athletes
WHERE sexe = 'f';
```
La sortie du SELECT devrait être

| id | nom  | sexe |
| --- | --- | --- |
|  3 | Titi | f |

#### UPDATE

```sql
UPDATE athletes
SET nom = 'Tim'
WHERE id = 1;
```

Après l'UPDATE, on a pu rectifier le nom de Tim:

| id | nom  | sexe |
| --- | --- | --- |
|  1 | Tim | m |
|  2 | Jerry | m |
|  3 | Titi | f |

#### DELETE

```sql
DELETE FROM athletes WHERE nom = 'Jerry';
```
La sortie de DELETE devrait être 

| id | nom  | sexe |
| --- | --- | --- |
|  1 | Tim | m |
|  3 | Titi | f |


## Livrable 2 (5%) Application + DB

| Note | Description | Commentaire |
| --- | --- | --- |
| 3.0 | Modèle ER | Voir ci-dessous |
| 3.0 | Modèle relationnel / schéma SQL | Les images et SQL ci-dessous |
| 1.0 | Application (READ-ONLY) | |
| 1.0 | SQL "seed" / exemples pour INSERT, UPDATE, SELECT, DELETE des données | Voir _cette_ page |
| 1.0 | README.md contient toutes les informations requises | Voir _cette_ page |
| 1.0 | Utilisation de git (messages de commit, tous les étudiants impliqués) | Voir [les commits dans GitHub](https://github.com/professor-forward/projet-sylex_project/commits/livrable2) |
| / 10 | |

### ER Model

![ER Diagram](https://github.com/professor-forward/projet-sylex_project/blob/livrable2/ER.png?raw=true)

### Relational Model

![Model Relationnel](https://github.com/professor-forward/projet-sylex_project/blob/livrable2/ModelRelationnel.png?raw=true)

### SQL Schema

```sql
CREATE TABLE athletes(
  id int,
  name varchar(50),
  sex char,
  PRIMARY KEY (id)
);
 
CREATE TABLE competitions(
  id int,
  venue varchar(50),
  start_date date,
  end_date date,   
  name varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE registers(
  athlete_id int,
  competition_id int,
  FOREIGN KEY (athlete_id) REFERENCES athletes(id),
  FOREIGN KEY (competition_id) REFERENCES competitions(id)
);
```

### Example SQL Queries
#### INSERT
```sql
INSERT INTO competitions
VALUES (1, 'Scotiabank Arena', '2020-03-06', '2020-03-07', 'Stanley Cup Playoffs');
```

```sql
INSERT INTO athletes
VALUES (1, 'Zack', 'm');
```

#### UPDATE
```sql
UPDATE athletes
SET name = 'John Smith'
WHERE id = 2;
```

#### SELECT
```sql
SELECT *
FROM competitions
WHERE id < 100;
```

#### DELETE
```sql
DELETE FROM athletes
WHERE name = 'John Smith'
```
### Migrations

Les migrations s'effectuent dans le dossier db du projet. Le premier script de migration testé est celui du livrable1 "INSERT INTO athletes". Ensuite la création des tableaux "competitions" et "registers" ont été ajoutés à "schema.sql". La table de modélisation des migrations utilisée est prise du lab05 du cours.

### Application

Notre application est un frontend PHP pour la base de données PostgreSQL qui peut être utilisé pour effectuer des requêtes en lecture uniquement sur la base de données.

Dans le fichier application, `PGSQLconnect.php` permet la connection entre le code php et la base de donné, `Tables.php` est responsable de l'affichage des données de chaque tableau et `index.php` est la classe principale permettant de faire marcher notre programme.

#### Affichage de la liste des athlètes.
![AthletesTable](https://github.com/professor-forward/projet-sylex_project/blob/livrable2/application/displayAthletesTable.png)

#### Affichage de la liste des compétition.
![CompetitionTable](https://github.com/professor-forward/projet-sylex_project/blob/livrable2/application/displayCompetitionsTable.png)

## Livrable 3 (12%) L'application
| Note | Description | Commentaire |
| --- | --- | --- |
| 2.0 | Modèle ER | Voir ci-dessous |
| 2.0 | Modèle relationnel / schéma SQL | Les images et SQL ci-dessous |
| 2.0 | SQL "seed" / exemples/ migrations | |
| 2.0 |  Application |  |
| 1.0 | README.md contient toutes les informations requises | Voir _cette_ page |
| 1.0 | Utilisation de git (messages de commit, tous les étudiants impliqués) | Voir [les commits dans GitHub](https://github.com/professor-forward/projet-sylex_project/commits/livrable3) |
| / 10 | |

### Modèle ER

####
![ER](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/ER.png)

### Modèle relationnel / schéma SQL

####
![ModelRelationnel](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/ModelRelationnel.png)

### SQL "seed" / exemples/ migrations

Les migrations ont permis d'ajouter plusieurs informations à notre leaderboard:

> - Les structures athletes, competitions et registrations ont été modifiées
> - Les structures partners et events ont été rajoutées

Le dossier db contient des exemples en syntaxe SQL.
Des exemples de modification d'une structure (ALTER) se trouvent dans 2021033011-update-athletes.sql 
Des exemples d'insertion dans nos différentes structures se trouvent dans seed.sql

###  Application

#### Nous allons d'abord nous connecter e tant qu'admnin
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/1.admin(logIn).png)

#### (page d'accueil admnin)
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/2.admin(connected).png)

#### Puis, nous allons ajouter une nouvelle entreprise "MegaCORP" en tant que partenaire en lui attribuant un code d'acces pour son login
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/3.admin(addindPartner).png)

#### (liste des partenaires)
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/4.admin(listOfPartner).png)

#### Comme nous venons d'ajouter notre premier partenaire, la liste des competitions n'affichera rien pour le moment.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/5.admin(listOfCompetition).png)

#### Nous allons maintenant nous connecter en tant que partenaire.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/6.partner(logIn).png)

#### (page d'accueil partenaire)
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/7.partner(connected).png)

#### (creation d'une nouvelle competition)
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/8.partner(addingCompetition).png)

#### (liste des competitions) A partir de cette liste, nous pouvons directement creer et afficher des evenements.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/9.partner(listOfCompetition).png)

#### En guise d'exemple, nous allons creer 3 differents evenements (Srpint, Endurance , Weight throw)
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/10.partner(addingEvent).png)

#### Nous avons a present nos evenements, il nous manque plus que les athletes.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/11.partner(listOfEvent).png)

#### (creation des athletes)
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/12.partner(addingAthletes).png)

#### A present nous pouvons maintenant les inscrire dans les competitions existantes.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/12.1partner(listOfAthlete).png)

#### Comme nous n'avons en ce moment qu'une seule competition, nous allons inscrire touts les athletes dans "Mini olympiade".
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/13.partner(addingAthletestoCompetition).png)

#### Nous pouvons maintenant attribuer leur score aux athletes pour chaque evenement.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/14.partner(listOfEvent).png)

####
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/15.partner(setScore1).png)

#### Finalement, nous pouvons a present voir le leaderboard de la competition dans la liste des competitions de l'administrateur.
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/16.admin(listOfCompetition).png)

#### Leaderboard montrant la position de chaque athletes en fonction du temps de l'evenement 'Sprint'
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/17.admin(leaderboard).png)

#### Leaderboard montrant la position de chaque athletes en fonction du temps de l'evenement 'Endurance' dans la categorie masculine
![adminLogIn](https://github.com/professor-forward/projet-sylex_project/blob/livrable3/application_screenshots/18.admin(leaderboard2).png)
