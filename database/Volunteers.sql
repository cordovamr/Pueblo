drop database if exists Volunteers;
create database Volunteers;
use Volunteers;

create table volunteers (
	volunteerID int auto_increment primary key,
	firstName varchar(255) not null,
	lastName varchar(255) not null,
	email varchar(50) not null
	
);

insert into volunteers (firstName, lastName, email) value ("Melissa", "Rafalski", "melissarafalski@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Stephanie", "Viviano", "stephanieviviano1@gmail.com") ;
insert into volunteers (firstName, lastName, email) value ("Scott", "Brenner", "scottcbrenner@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Melissa", "Campo", "teamcampo@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Bryce", "Campo", "azdadx2@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Jessica", "Donnerstein","jdonnerstein@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Michael", "Donnerstein", "mdonnerstein@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Nicole", "Delgado", "brigab827@yahoo.com");
insert into volunteers (firstName, lastName, email) value ("Renne", "Garcia", "rgarciathatsme@gmail.com");
insert into volunteers (firstName, lastName, email) value ("Eduard", "Goodman", "dreamersq@hotmail.com");
insert into volunteers (firstName, lastName, email) value ("April", "Goodman", "missapril11@cox.net");
	

create table events (
	eventID int auto_increment primary key,
	title varchar(255) not null,
	eventStart date not null,
	eventEnd date not null,
	description text(255) not null
);

insert into events (title, eventStart, eventEnd, description) values (Pumpkin Patch, '2015-10-24 16:00:00', '2015-10-24 20:00:00', Enter for free. Buy tickets to: buy food, play games, use bounce houses, enter to win raffle baskets valued at $250 to $500!);
	-- Stephanie	Viviano	stephanieviviano1@gmail.com
	-- Scott	Brenner	scottcbrenner@gmail.com
	-- Melissa	Campo	teamcampo@gmail.com
	-- Bryce	Campo	azdadx2@gmail.com
	-- Jessica	Donnerstein	jdonnerstein@gmail.com
	-- Michael	Donnerstein	mdonnerstein@gmail.com
	-- Nicole	Delgado	brigab827@yahoo.com
	-- Renne	Garcia	rgarciathatsme@gmail.com
	-- Eduard	Goodman	dreameresq@hotmail.com
	-- April	Goodman	missapril11@cox.net
	-- James	Herring	jtbu@hotmail.com
	-- Amy	Herring	amy.herring@hotmail.com
	-- Tracy	Keck	tekeck@hotmail.com
	-- Kim	Keck	kkeck@susd.org
	-- Mark	Loftin	mloftin88@gmail.com
	-- Jenny	Loftin	ishikum@gmail.com
	-- Lissa	Morazan	lissawhyte@gmail.com
	-- Napoleon	Morazan	napoleon_morazan@hotmail.com
	-- Mikhael	Nicoli	pilotman2000@gmail.com
	-- Veronica	Pacheco	vpach3@gmail.com
	-- Dianna	Nielsen	dihzigns@cox.net
	-- Ryan	Nielsen	ran_phx@cox.net
	-- Heather	Orlando	heatherkristeneorlando@gmail.com
	-- Shane	Orlando	shaneorlando@hotmail.com
	-- Alicia	Peralta	alicia@peraltafam.com
	-- Francisco	Peralta	paco@fperalta.com
	-- Melissa	Rafalski	Melissarafalski@gmail.com
	-- Harry	Rafalski II	chewleia@yahoo.com
	-- Marty	Roggentien	marty@holidaylightingco.com
	-- Brandi	Roggentien	asugirl1997@gmail.com
	-- Jason	Skrodenis	jskrodenis@gmail.com
	-- Nora	Skrodenis	nskrodenis@gmail.com
	-- Zvezdelina	Sokolov	
	-- Vladimir	Sokolov	mo0gle_13@yahoo.com
	-- Bonnie	Springborn	cletusbs@cox.net
	-- Steve	Springborn	sspringborn1@cox.net
	-- Matthew	Troyky	matt@armstrongtroyky.com
	-- Teri	Troyky	teritroyky@iheartmedia.com
	-- Jason	Vasquez	vasplumbservices@yahoo.com
	-- Jamie	Vasquez	jamieavasquez@gmail.com
	-- Graeme	West	gwest@henselphelps.com
	-- Bebe	Brown	brownbebe@yahoo.com
	-- Martin	Yepez	mxyepez@qwest.net
	-- Amber	David	preciousjewel85250@gmail.com

