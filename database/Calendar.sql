drop database if exists Calendar;
create database Calendar;
use Calendar;

create table events (
	eventID int primary key,
	event_Name varchar(255) not null,
	event_start date not null,
	event_end date not null,
	description varchar(255) not null,

	
);

insert into event (event_Name, event_start, event_end, description) values (Pumpkin Patch, '2015-10-24 16:00:00', '2015-10-24 20:00:00', Enter for free. Buy tickets to: buy food, play games, use bounce houses, enter to win raffle baskets valued at $250 to $500!);