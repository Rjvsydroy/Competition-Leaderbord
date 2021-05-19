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


INSERT INTO schema_migrations (migration, migrated_at) VALUES

( '2021022313-add-competitions-registration.sql','2021-02-23 13:30:00');
