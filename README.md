# Database Queries

1. CREATE DATABASE safeguarddb;

2. CREATE TABLE users(
	user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(225),
    last_name VARCHAR(225),
    email VARCHAR(225),
	password VARCHAR(225),
    account_type VARCHAR (225)
);

CREATE TABLE patients(
	patient_id INT PRIMARY KEY AUTO_INCREMENT,
    patient_first_name VARCHAR(225),
    patient_last_name VARCHAR(225),
    patient_age INT(3),
    patient_gender VARCHAR(1),
    patient_email VARCHAR(225),
    patient_password VARCHAR(225),
    patient_city VARCHAR(225),
    patient_country VARCHAR(225),
    vaccine_required VARCHAR(225),
    vaccine_completed VARCHAR(225)
);

CREATE TABLE hospitals(
    hospital_id INT PRIMARY KEY AUTO_INCREMENT,
    hostpital_name 
);

CREATE TABLE admins(

);

3. INSERT INTO users VALUES (NULL, "Syed", "Hassam", "hassam@gmail.com", "hassam", "admin");

## account_type

1. Patient
2. Hospital
3. Admin