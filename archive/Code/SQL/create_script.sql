create database ewahl;
use ewahl;

/*User*/
create table Benutzer(
mail varchar(100),
passwort varchar(255),
istAdmin boolean,
link varchar(50),
sbezeichnung varchar(50),
PRIMARY KEY(mail,link,sbezeichnung),
foreign key(link) references Benachrichtigung(link),
foreign key(sbezeichnung) references Standort(bezeichnung)
);

/*Standort*/
create table Standort(
bezeichnung varchar(50),
mail varchar(100),
PRIMARY KEY(mail),
foreign key(mail) references Benutzer(mail)
);

/*Benachrichtigung*/
create table Benachrichtigung(
inhalt varchar(1000),
link varchar(50),
datum date,
wahl varchar(255),
mail varchar(100),
PRIMARY KEY(mail,link),
FOREIGN KEY (mail) references Benutzer(mail)
);

/*Formular*/
create table Formular(
name varchar(100),
datum date,
reihenfolge int,
PRIMARY KEY(name),
);

/*Ereignis*/
create table Ereignis(
name varchar(255),
Anzahl int
fname varchar(100),
PRIMARY KEY(name,fname),
foreign key(fname) references Formular(name)
);

/*LOG*/
create table Logging(
id int,
priorität,
inhalt varchar(510),
name varchar(80),
datum date,
PRIMARY KEY(id)
);

/*Beziehung "Wahlbeteiligt"*/
create table Wahlbeteiligt(
istModerator boolean,
istKandidat boolean,
mail varchar(100),
ename varchar(255),
PRIMARY KEY(ename,mail),
foreign key(ename) references Ereignis(name),
foreign key(mail) references Benutzer(mail)
);

/*Beziehung "erledigt"*/
create table Erledigt(
mail varchar(100),
fname varchar(255),
PRIMARY KEY(fname,mail),
foreign key(fname) references Ereignis(name),
foreign key(mail) references Benutzer(mail)
);