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


)

INSERT INTO schema_migrations (migration, migrated_at) VALUES
('2021033111-create-events.sql'; '2021-03-31 13:00:00')
