# MySQL database schema

CREATE DATABASE IF NOT EXISTS TruDB;

CREATE TABLE TruDB.Customers (
    first_name varchar(255) DEFAULT NULL,
    last_name varchar(255) DEFAULT NULL,
    address varchar(255) DEFAULT NULL,
    phone varchar(255) DEFAULT NULL,
    email varchar(255) DEFAULT NULL
);
#Example entries
INSERT INTO Customers VALUE("Jon","Smith","1st Street","111-123-1234","JonSmith@gmail.com");
INSERT INTO Customers VALUE("Mary","Winter","22 W Mountain Street","111-411-0001","MaryWinter@gmail.com");
INSERT INTO Customers VALUE("Robin","Rider","88 River Street","111-555-9998","RobinR@gmail.com");
INSERT INTO Customers VALUE("Tom","Adam","27 Cat Street","111-886-6688","TomAdam@gmail.com");

