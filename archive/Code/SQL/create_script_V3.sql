drop database if exists ewahl;
create database ewahl;
use ewahl;

/*User*/
drop table if exists Benutzer;
create table Benutzer(
mail varchar(100),
passwort varchar(255),
istAdmin boolean not null,
blink varchar(50)
)ENGINE = InnoDB;

/*Standort*/
drop table if exists Standort;
create table Standort(
bezeichnung varchar(50),
bmail varchar(100)
)ENGINE = InnoDB;

/*Benachrichtigung*/
drop table if exists Benachrichtigung;
create table Benachrichtigung(
inhalt varchar(1000),
link varchar(50),
datum date,
wahl varchar(255),
bmail varchar(100)
)ENGINE = InnoDB;

/*Formular*/
drop table if exists Formular;
create table Formular(
name varchar(100),
datum date,
reihenfolge int
)ENGINE = InnoDB;

/*Ereignis*/
drop table if exists Ereignis;
create table Ereignis(
name varchar(255),
Anzahl int,
fname varchar(100)
)ENGINE = InnoDB;

/*LOG*/
drop table if exists Logging;
create table Logging(
id int,
priorität int,
inhalt varchar(510),
name varchar(80),
datum date
)ENGINE = InnoDB;

/*Beziehung "Wahlbeteiligt"*/
drop table if exists Wahlbeteiligt;
create table Wahlbeteiligt(
istModerator boolean,
istKandidat boolean,
bmail varchar(100),
ename varchar(255)
)ENGINE = InnoDB;

/*Beziehung "erledigt"*/
drop table if exists Erledigt;
create table Erledigt(
bmail varchar(100),
ename varchar(255)
)ENGINE = InnoDB;

/*PRIMARY KEY*/
ALTER TABLE Benutzer ADD PRIMARY KEY (mail);
ALTER TABLE Standort ADD PRIMARY KEY (bezeichnung);
ALTER TABLE Benachrichtigung ADD PRIMARY KEY (link);
ALTER TABLE Formular ADD PRIMARY KEY (name);
ALTER TABLE Ereignis ADD PRIMARY KEY (name,fname);
ALTER TABLE Logging ADD PRIMARY KEY (id);
ALTER TABLE Wahlbeteiligt ADD PRIMARY KEY (ename,bmail);
ALTER TABLE Erledigt ADD PRIMARY KEY (ename,bmail);

/*FOREIGN KEY*/
ALTER TABLE Benutzer add foreign key(blink) references Benachrichtigung(link);
ALTER TABLE Standort add foreign key(bmail) references Benutzer(mail);
ALTER TABLE Benachrichtigung add foreign key (bmail) references Benutzer(mail);

/*geht*/
ALTER TABLE Ereignis add foreign key(fname) references Formular(name);
/*geht*/
ALTER TABLE Wahlbeteiligt add foreign key(ename) references Ereignis(name);
/*geht*/
ALTER TABLE Wahlbeteiligt add foreign key(bmail) references Benutzer(mail);
/*geht*/
ALTER TABLE Erledigt add foreign key(ename) references Ereignis(name);
/*geht*/
ALTER TABLE Erledigt add foreign key(bmail) references Benutzer(mail);

