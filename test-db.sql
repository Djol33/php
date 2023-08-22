-- Create the database only if it does not exist
CREATE DATABASE IF NOT EXISTS korisnici;

-- Switch to the newly created database
USE korisnici;

-- Create a table
CREATE TABLE korisnici (
                           id INT AUTO_INCREMENT PRIMARY KEY,
                           name VARCHAR(50),
                           email VARCHAR(100),
                           password VARCHAR(400)
);

-- Insert some initial data
INSERT INTO korisnici (name,email,password) VALUES ("nemanja", "nemanjaaaa", "12345678");