SELECT SUM(price) FROM library_books;

SELECT count(*) FROM library_books
WHERE status ='Available';

SELECT MAX(price), MIN(price) FROM library_books;

SELECT AVG(price) from library_books;