# Database Queries

1. CREATE DATABASE safeguarddb;

2. CREATE TABLE patients(
	patient_id INT PRIMARY KEY AUTO_INCREMENT,
    patient_first_name VARCHAR(225),
    patient_last_name VARCHAR(225),
    patient_age INT(3),
    patient_gender VARCHAR(225),
    patient_email VARCHAR(225) UNIQUE,
    patient_password VARCHAR(225)
);

CREATE TABLE hospitals(
    hospital_id INT PRIMARY KEY AUTO_INCREMENT,
    hostpital_name VARCHAR(225),
    hospital_email VARCHAR(225),
    hospital_password VARCHAR(225)
);

CREATE TABLE admins(
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    admin_first_name VARCHAR(225),
    admin_last_name VARCHAR(225),
    admin_email VARCHAR(225),
    admin_passowrd VARCHAR(225)
);

3. INSERT INTO users VALUES (NULL, "Syed", "Hassam", "hassam@gmail.com", "hassam", "admin");

## account_type

1. Patient
2. Hospital
3. Admin