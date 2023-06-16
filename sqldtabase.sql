CREATE DATABASE assignment1;
USE assignment1;

CREATE TABLE pawfect_hotel (
    pet_id INT AUTO_INCREMENT PRIMARY KEY,
    pet_name VARCHAR(50),
    pet_specie VARCHAR(50),
    pet_breed VARCHAR(50),
    pet_age INT
);


ALTER TABLE pawfect_hotel
ADD COLUMN pet_weight DECIMAL(5, 2);

SELECT * FROM pawfect_hotel;
