CREATE DATABASE LIBRARY ;
CREATE TABLE library_books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150),
    author VARCHAR(100),
    published_year YEAR,
    status ENUM('Available','Borrowed','Lost'),
    price DECIMAL(10.2)
);

