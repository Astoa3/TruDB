# MySQL database schema

CREATE DATABASE IF NOT EXISTS TruDB;

CREATE TABLE TruDB.Customers (
    first_name varchar(255) DEFAULT NULL,
    last_name varchar(255) DEFAULT NULL,
    address varchar(255) DEFAULT NULL,
    phone varchar(255) DEFAULT NULL,
    email varchar(255) DEFAULT NULL
);
