create database UTM_Buddy;
use UTM_Buddy;
CREATE TABLE GroupTable
(
    GroupId INT AUTO_INCREMENT PRIMARY KEY unique,
	GroupCod VARCHAR(9) not null,
    GroupSpeciality varchar(50) not null,
    GroupYear TINYINT UNSIGNED not null
);

CREATE TABLE UsersTable
(
    UserId INT AUTO_INCREMENT PRIMARY KEY unique,
    UserEmail VARCHAR(30) NOT NULL unique,
    UserPassword VARCHAR(30) NOT NULL,
	UserName VARCHAR(50) not null,
    UserGroupId int not null,
    foreign key (UserGroupId) references GroupTable (GroupId),
    UserPhoto VARCHAR(50) unique	#link to the photo in storage
    RegControl TINYINT(1) default 0 not null
);

create table TeacherTable
(
	TeacherId INT AUTO_INCREMENT PRIMARY KEY unique,
    TeacherEmail VARCHAR(30) NOT NULL unique,
	TeacherName VARCHAR(50) not null,
    TeacherPhoto VARCHAR(50) unique #link to the photo in storage
);


create table Timetable
(
	GroupId int not null,
	foreign key (GroupId) references GroupTable (GroupId),
    WeekType bool,		#true - even, false - odd, null - for both 
    Zi char(3) not null,
    Timp time not null,
    ObjectName varchar(30),
    TeacherId int not null,
    foreign key (TeacherId) references TeacherTable (TeacherId) ,
    Location char(5) not null
);

create table AcademicPerformance
(
	UserId int not null,
    ObjectName varchar(30),
    Midterm1 TINYINT UNSIGNED,
    Midterm2 TINYINT UNSIGNED,
    Exam TINYINT UNSIGNED,
    total decimal(5,3)
);

CREATE TABLE `Flashcards` 
( `FlashcardId` TINYINT(11) NOT NULL AUTO_INCREMENT , 
 `Topic` VARCHAR(50) NOT NULL , 
 `Question` VARCHAR(300) NOT NULL , 
 `Answer` VARCHAR(1000) NOT NULL , 
 'User_ID' SMALLINT(11) NOT NULL,
 PRIMARY KEY ('FlashcardId')) 
	      ENGINE = InnoDB;
	 
CREATE TABLE `Notes` 
( `Note_ID` SMALLINT(11) NOT NULL AUTO_INCREMENT , 
`User_ID` SMALLINT(11) NOT NULL , 
`Title` VARCHAR(60) NOT NULL , 
`Text` TEXT NOT NULL , 
PRIMARY KEY (`Note_ID`)) ENGINE = InnoDB;	 
