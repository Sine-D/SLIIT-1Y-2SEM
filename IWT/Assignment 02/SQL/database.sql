CREATE DATABASE user_registration;

USE user_registration;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT
);

INSERT INTO services (name, description)
VALUES
    ('Dashboard repair or replace', 'Details about dashboard repair...'),
    ('Center console repair or replace', 'Details about center console repair...'),
    ('Audio/Infotainment System repair or replace', 'Details about audio repair...');
