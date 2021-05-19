CREATE TABLE schema_migrations (
 migration varchar(255),
 migrated_at time,
 PRIMARY KEY (migration)
);


INSERT INTO schema_migrations (migration, migrated_at) VALUES
('2021022311-create-athletes.sql', '2020-02-23 11:00:00');
INSERT INTO schema_migrations (migration, migrated_at) VALUES 
('2021022312-create-migrations.sql', '2020-02-23 12:00:00');
