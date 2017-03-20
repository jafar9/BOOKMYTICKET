CREATE DATABASE REDBUS;
USE REDBUS;

CREATE TABLE MYTRIP(BUSID VARCHAR(45) NOT NULL primary key,FROMSTATION VARCHAR(45) NOT NULL,TOSTATION VARCHAR(45) NOT NULL,ARR_TIME varchar(45) NOT NULL,DEPT_TIME varchar(45) NOT NULL,JOURNEYDATE VARCHAR(45) NOT NULL);

INSERT INTO MYTRIP VALUES('1234','KURNOOL','HYDERABAD','09:00','13:00','EVERYDAY');
INSERT INTO MYTRIP VALUES('1235','HYDERABAD','VIJAYWADA','08:00','16:00','EVERYDAY');
INSERT INTO MYTRIP VALUES('1578','HYDERABAD','TIRUPATI','05:15','17:30','EVERYDAY');
INSERT INTO MYTRIP VALUES('1532','HYDERABAD','NELLORE','04:00','14:30','EVERYDAY');
INSERT INTO MYTRIP VALUES('1542','VIJAYAWADA','TIRUPATI','10:00','16:30','EVERYDAY');
INSERT INTO MYTRIP VALUES('2451','HYDERABAD','ONGOLE','07:15','13:45','EVERYDAY');
INSERT INTO MYTRIP VALUES('5412','CHENNAI','TIRUPATI','06:00','10:30','EVERYDAY');
INSERT INTO MYTRIP VALUES('9865','VIJAYAWADA','BANGALORE','08:15','16:30','EVERYDAY');


create table HISTORY(BUSID VARCHAR(45) NOT NULL,dateofj VARCHAR(45) NOT NULL,PNR varchar(45) not null,FOREIGN KEY (BUSID)
REFERENCES MYTRIP(BUSID),primary key(BUSID,dateofj));

create table person(PNR VARCHAR(45) not null,Name varchar(45) not null,Age int  not null,gender varchar(45) not null);

create table LOGIN (FIRSTNAME varchar(45) not null,DOB varchar(45)not null,EMAIL varchar(45)not null primary key,PHONENO varchar(20) NOT NULL,PASSWORD varchar(45) not null,ADDRESS varchar(45) not null);


create batabase regular;
use regular;

create table timetable(ID int NOT NULL AUTO_INCREMENT,Name varchar(45) not null,matter varchar(100) not NULL,dbd date not null,time varchar(45) not null,day varcHar(45) not null,primary key(ID));

insert into timetable values(1,'jafar','CI appointment','2017-03-27','5:15','monday')
