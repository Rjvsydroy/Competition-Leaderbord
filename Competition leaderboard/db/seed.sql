INSERT INTO athletes (name, gender, dob, email) VALUES

('Alex', 'm', '1996-01-01', 'abuni@gmail.com'),
('Zack', 'm', '1998-11-11', 'zack@gmail.com'),
('Sid', 'm', '1997-05-17', 'sid@gmail.com'),
('Boris', 'm', '1994-06-14', 'boris@gmail.com'),
('Igor', 'm', '1989-01-02', 'igor@gmail.com'),
('Yves', 'm', '1990-10-07', 'yves@gmail.com'),
('Nicolas', 'm', '1982-08-13', 'nicolas@gmail.com'),
('Otmar', 'm', '2000-03-09', 'otmar@gmail.com'),
('Andrew', 'm', '1978-06-25', 'andrew@gmail.com'),
('Michael', 'm', '2002-12-06', 'michael@gmail.com'),
('Fred', 'm', '1985-09-11', 'fred@gmail.com'),
('Peter', 'm', '1993-04-29', 'peter@gmail.com'),
('Ali', 'm', '2001-02-28', 'ali@gmail.com'),
('Justin', 'm', '1988-10-19', 'justin@gmail.com'),
('Steven', 'm', '1975-05-15', 'steven@gmail.com'),
('Kareem', 'm', '2003-01-08', 'kareem@gmail.com'),
('Trevor', 'm', '1992-08-28', 'trevor@gmail.com'),
('Jimmy', 'm', '1998-06-13', 'jimmy@gmail.com'),
('Bader', 'm', '2002-03-09', 'bader@gmail.com'),
('Kyle', 'm', '1995-04-01', 'kyle@gmail.com'),

('Maggie', 'f', '2000-11-12', 'maggie@gmail.com'),
('Lisa', 'f', '1996-07-21', 'lisa@gmail.com'),
('Selma', 'f', '1980-03-20', 'selma@gmail.com'),
('Lauren', 'f', '1999-08-06', 'lauren@gmail.com'),
('Megan', 'f', '1995-04-29', 'megan@gmail.com'),
('Christine', 'f', '2002-02-14', 'christine@gmail.com'),
('Amanda', 'f', '1969-07-20', 'amanda@gmail.com'),
('Eva', 'f', '1989-11-12', 'eva@gmail.com'),
('Ophelie', 'f', '1990-02-5', 'ophelie@gmail.com'),
('Maya', 'f', '2001-01-31', 'maya@gmail.com'),
('Esther', 'f', '1993-03-03', 'esther@gmail.com'),
('Louise', 'f', '1984-09-03', 'louise@gmail.com'),
('Naomi', 'f', '1998-05-22', 'naomi@gmail.com'),
('Fati', 'f', '1977-08-17', 'fati@gmail.com'),
('Frida', 'f', '1987-05-26', 'frida@gmail.com'),
('Gaelle', 'f', '2000-06-01', 'gaelle@gmail.com'),
('Safa', 'f', '1992-12-21', 'safa@gmail.com'),
('Sheila', 'f', '1973-10-09', 'sheila@gmail.com'),
('Karen', 'f', '1990-02-19', 'karen@gmail.com'),
('Ornella', 'f', '1999-01-28', 'ornella@gmail.com');



INSERT INTO partners (company_name, address, contact_person, email, phone) VALUES
('RedBall', '11 Salzburg Street London', 'Hans', 'hans@gmail.com', 0788421564),
('Under Arm', '153 Okaland Drive Missisauga' , 'Samy', samy@gmail.com, 06132544);

INSERT INTO competitions (partner_contact, name, venue, year, start_date, end_date, num_of_event, max_athletes) VALUES
SELECT
    (SELECT contact_person FROM partners WHERE name = 'Hans') AS partner_contact,
'Bytown Closed 2020', 'CrossFit Bytown', '2019', '2019-10-01', '2019-11-01', 3, 100;

INSERT INTO competitions (partner_contact, name, venue, year, start_date, end_date, num_of_event, max_athletes) VALUES
SELECT
    (SELECT contact_person FROM partners WHERE name = 'Samy') AS partner_contact,
'The Open 2020', 'online', '2020', '2019-12-15', '2020-01-06', 5, 32;

INSERT INTO competitions (partner_contact, name, venue, year, start_date, end_date, num_of_event, max_athletes) VALUES
SELECT
    (SELECT contact_person FROM partners WHERE name = 'Samy') AS partner_contact,
'Duck Shooting', 'Balmoral Castle', '2021', '2021-05-18', '2021-05-21', 2, 10;

INSERT INTO competitions (partner_contact, name, venue, year, start_date, end_date, num_of_event, max_athletes) VALUES
SELECT
    (SELECT contact_person FROM partners WHERE name = 'Hans') AS partner_contact,
'Rat race', 'Antartica', '2018', '2018-01-07', '2018-04-28', 12, 1000;

INSERT INTO competitions (partner_contact, name, venue, year, start_date, end_date, num_of_event, max_athletes) VALUES
SELECT
    (SELECT contact_person FROM partners WHERE name = 'Samy') AS partner_contact,
'Fort Boyardee', 'Ottawa Municipal Stadium', '2020', '2020-09-27', '2020-10-08', 8, 14;



INSERT INTO events (competition_id, name, score_method) VALUES
SELECT 
      (SELECT id FROM competitions WHERE name = 'Rat race') AS competition_id,
      'foot race',
      'time';
      
INSERT INTO events (competition_id, name, score_method) VALUES
SELECT 
      (SELECT id FROM competitions WHERE name = 'Rat race') AS competition_id,
      'racing loops',
      'number of reps';
      
INSERT INTO events (competition_id, name, score_method) VALUES
SELECT 
      (SELECT id FROM competitions WHERE name = 'Rat race') AS competition_id,
      'pushups',
      'number of reps';
      


INSERT INTO registrations (athlete_id, competition_id, age, gender)
SELECT
    (SELECT id FROM athletes WHERE name = 'Ali') AS athlete_id,
    (SELECT id FROM competitions WHERE name = 'Bytown Closed 2020') AS competition_id,
    20,
    'm';
    
INSERT INTO registrations (athlete_id, competition_id, age, gender)
SELECT
    (SELECT id FROM athletes WHERE name = 'Fati') AS athlete_id,
    (SELECT id FROM competitions WHERE name = 'Bytown Closed 2020') AS competition_id,
    43,
    'f';
    
INSERT INTO registrations (athlete_id, competition_id, age, gender)
SELECT
    (SELECT id FROM athletes WHERE name = 'Kyle') AS athlete_id,
    (SELECT id FROM competitions WHERE name = 'Rat race') AS competition_id,
    25,
    'm';
    
INSERT INTO registrations (athlete_id, competition_id, age, gender)
SELECT
    (SELECT id FROM athletes WHERE name = 'Jimmy') AS athlete_id,
    (SELECT id FROM competitions WHERE name = 'Rat race') AS competition_id,
    22,
    'm';   



