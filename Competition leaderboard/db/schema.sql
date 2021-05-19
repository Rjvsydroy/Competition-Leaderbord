/* partly from leaderboard livrable 2 solution */

CREATE TABLE schema_migrations (
 migration varchar(255),
 migrated_at time,
 PRIMARY KEY (migration)
);


INSERT INTO schema_migrations (migration, migrated_at) VALUES
('2021022311-create-athletes.sql', '2020-02-23 11:00:00');
INSERT INTO schema_migrations (migration, migrated_at) VALUES 
('2021022312-create-migrations.sql', '2020-02-23 12:00:00');
INSERT INTO schema_migrations (migration, migrated_at) VALUES
( '2021022313-add-competitions-registration.sql','2021-02-23 13:30:00');
INSERT INTO schema-migrations (migration, migrated_at) VALUES
('2021033011-update-athletes.sql', '2021-03-30 12:00:00');
INSERT INTO schema_migrations (migration, migrated_at) VALUES
('2021033013-update-competitions-registrations.sql', '2021-03-30 13:15:00');
INSERT INTO schema_migrations (migration, migrated_at) VALUES
( '2021033015-create-partners.sql','2021-03-30 16:00:00');
INSERT INTO schema_migrations (migration, migrated_at) VALUES
('2021033111-create-events.sql'; '2021-03-31 13:00:00')


CREATE SEQUENCE athletes_id_seq;
CREATE TABLE athletes (
  id int DEFAULT nextval('athletes_id_seq'),
  identifier varchar(100) NOT NULL DEFAULT md5(random()::text),
  created timestamp NOT NULL DEFAULT NOW(),
  modified timestamp NOT NULL DEFAULT NOW(),
  name varchar(1000),
  dob date,
  gender varchar(100),
  email varchar (100),
  PRIMARY KEY (id),
  UNIQUE (identifier)
);

CREATE SEQUENCE competitions_id_seq;
CREATE TABLE competitions (
  id int DEFAULT nextval('competitions_id_seq'),
  identifier varchar(100) NOT NULL DEFAULT md5(random()::text),
  created timestamp NOT NULL DEFAULT NOW(),
  modified timestamp NOT NULL DEFAULT NOW(),
  partner_contact varchar (300) REFERENCES partners (contact_name),
  name varchar(1000),
  venue varchar(1000),
  year int,
  start_date date,
  end_date date,
  num_of_events int,
  max_athletes int,
  PRIMARY KEY (id),
  UNIQUE (identifier)
);

CREATE SEQUENCE registrations_id_seq;
CREATE TABLE registrations (
  id int DEFAULT nextval('registrations_id_seq'),
  identifier varchar(100) NOT NULL DEFAULT md5(random()::text),
  created timestamp NOT NULL DEFAULT NOW(),
  modified timestamp NOT NULL DEFAULT NOW(),
  athlete_id int REFERENCES athletes (id),
  competition_id int REFERENCES competitions (id),
  age int,
  gender varchar(100),
  PRIMARY KEY (id),
  UNIQUE (identifier),
  UNIQUE (athlete_id, competition_id)
);

CREATE TABLE partners (
 company_name varchar (300),
 address varchar (1000),
 contact_person varchar (300),
 email varchar (300),
 phone int,
 created timestamp NOT NULL DEFAULT NOW(),
 modified timestamp NOT NULL DEFAULT NOW(),
 PRIMARY KEY (company_name)
 
);

CREATE SEQUENCE events_id_seq;
CREATE TABLE event (
  id int DEFAULT nextval('events_id_seq'),
  created timestamp NOT NULL DEFAULT NOW(),
  modified timestamp NOT NULL DEFAULT NOW(),
  competition_id REFERENCES competitions (id),
  name varchar(1000),
  score_method varchar (300),
  PRIMARY KEY (id),
);



CREATE SEQUENCE scores_rank_seq; 
CREATE TABLE scores (

 rank int DEFAULT nextval('scores_rank_seq'),
 athlete_id int REFERENCES athletes (id),
 event_id REFERENCES event (id),
 started timestamp NOT NULL DEFAULT NOW(),
 ended timestamp NOT NULL DEFAULT NOW(),
 score int,
 PRIMARY KEY (athlete_id),
 PRIMARY KEY (event_id),
);




 
