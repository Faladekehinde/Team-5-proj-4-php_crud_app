CREATE DATABASE studentdb;
USE studentdb;

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);

INSERT INTO students (name, email) VALUES
('Falade Kehinde', 'dafaladexy@gmail.com'),
('Oyedeji Oyeku', 'deji@example.com');
('Samuel' 'Fregene', 'Sam@example.com');