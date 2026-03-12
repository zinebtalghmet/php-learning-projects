CREATE DATABASE LIBRARY ;
CREATE TABLE library_books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    author VARCHAR(100) NOT NULL,
    published_year YEAR,
    status ENUM('Available','Borrowed','Lost'),
    price DECIMAL(10,2)
);

INSERT INTO library_books (title,author,published_year,status,price)
VALUES 
('The Diary of a Young Girl', 'Anne Frank', 1950, 'Available', 100.00),
('1984', 'George Orwell', 2022, 'Borrowed', 200.00),
('Animal Farm', 'George Orwell', 1945, 'Available', 7.50),
('The Catcher in the Rye', 'J.D. Salinger', 2024, 'Available', 200.00),
('Brave New World', 'Aldous Huxley', 1932, 'Lost', 8.75),
('To Kill a Mockingbird', 'Harper Lee', 1960, 'Available', 11.49),
('The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Borrowed', 6.99),
('PHP Guide', 'Ray Bradbury', 2021, 'Available', NULL);

SELECT title,author,price FROM library_books;
SELECT * FROM library_books WHERE price BETWEEN 100 AND 300;
SELECT * FROM library_books WHERE published_year > 2020 ;
SELECT * FROM library_books WHERE title LIKE '%PHP%';
SELECT * FROM library_books WHERE status != 'Lost' ORDER BY published_year DESC;
SELECT DISTINCT author FROM library_books;
SELECT UPPER(title), ROUND(price,0) FROM library_books;

