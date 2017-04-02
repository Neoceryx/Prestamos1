create database Prestamos1;

use prestamos1;

create table Users(
Id int NOT NULL AUTO_INCREMENT Primary Key,
Name varchar(50),
FirstName varchar(50)
);

create table DevicesTypes(
Id int auto_increment primary key,
Description varchar(50)
);

create table Devices(
Id int not null auto_increment primary key,
Description varchar (50),
DevicesTypes_Id int,

-- Foreign Keys
FOREIGN KEY (DevicesTypes_Id) REFERENCES DevicesTypes(Id)
);

create table Loans(

Users_Id int not null,
Devices_id int not null,
StartDate DATETIME not null,
EndDate DATETIME,

-- Foreign Keys
foreign key(Users_Id) references Users (Id),
foreign key (Devices_id) references Devices (Id)
);



BEGIN /* Region Users */;

select * from Users;

insert into Users (Name,FirstName) values ( 'Daniel','Fierro' );

insert into Users ( Name, FirstName) values ( 'Juan', 'Perez' );

END /* End Region */ ;

BEGIN /* Region  DevicesTypes */ ;

select * from DevicesTypes;

insert into DevicesTypes (Description) values ('foo');

END /* End Region */;












