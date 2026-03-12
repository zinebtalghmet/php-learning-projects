SELECT status, count(*) FROM library_books 
GROUP BY status DESC;

SELECT author ,COUNT(*) FROM library_books
GROUP BY author;

UPDATE library_books SET price = 400 
where author = 'George Orwell' AND id=3;

SELECT author ,SUM(price) FROM library_books
GROUP by author
having SUM(price) > 500;