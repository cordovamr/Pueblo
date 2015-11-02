-- drop database if exists Volunteers;
-- create database Volunteers;
-- use Volunteers;

-- create table volunteers (
-- 	volunteerID int auto_increment primary key,
-- 	firstName varchar(255) not null,
-- 	lastName varchar(255) not null,
-- 	email varchar(50) not null
	
-- );

-- insert into volunteers (firstName, lastName, email) value ("Melissa", "Rafalski", "melissarafalski@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Stephanie", "Viviano", "stephanieviviano1@gmail.com") ;
-- insert into volunteers (firstName, lastName, email) value ("Scott", "Brenner", "scottcbrenner@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Melissa", "Campo", "teamcampo@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Bryce", "Campo", "azdadx2@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Jessica", "Donnerstein","jdonnerstein@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Michael", "Donnerstein", "mdonnerstein@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Nicole", "Delgado", "brigab827@yahoo.com");
-- insert into volunteers (firstName, lastName, email) value ("Renne", "Garcia", "rgarciathatsme@gmail.com");
-- insert into volunteers (firstName, lastName, email) value ("Eduard", "Goodman", "dreamersq@hotmail.com");
-- insert into volunteers (firstName, lastName, email) value ("April", "Goodman", "missapril11@cox.net");
	

create table events (
	eventID int auto_increment primary key,
	title varchar(255) not null,
	eventStart date not null,
	eventEnd date not null,
	description text(255) not null,

);

insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-11-24 16:00:00', '2015-11-24 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Parent Teacher Conference', '2015-11-14 16:00:00', '2015-11-15 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Dog Days', '2015-11-25 16:00:00', '2015-11-25 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('BoxTops', '2015-11-26 16:00:00', '2015-11-26 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-11-27 16:00:00', '2015-11-27 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-11-28 16:00:00', '2015-11-28 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-11-29 16:00:00', '2015-11-29 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-11-30 16:00:00', '2015-11-30 20:00:00', 'Have Fun', '11');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-10-30 16:00:00', '2015-10-30 20:00:00', 'Have Fun', '10');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-10-30 16:00:00', '2015-10-30 20:00:00', 'Have Fun', '10');
insert into events (title, eventStart, eventEnd, description, month) values ('Pumpkin Patch', '2015-10-30 16:00:00', '2015-10-30 20:00:00', 'Have Fun', '10');
	
	
	





























