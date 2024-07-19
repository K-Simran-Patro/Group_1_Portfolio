CREATE DATABASE portfolio_db;

USE portfolio_db;

CREATE TABLE contact_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    age INT NOT NULL
);

INSERT INTO contact_info (email, phone, age) VALUES
('simranpatro1470@gmail.com', '7008136713', 26);
