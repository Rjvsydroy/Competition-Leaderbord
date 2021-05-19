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

INSERT INTO schema_migrations (migration, migrated_at) VALUES
( '2021033015-create-partners.sql','2021-03-30 16:00:00');
 
