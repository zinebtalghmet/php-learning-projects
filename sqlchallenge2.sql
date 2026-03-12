CREATE TABLE categories (
    category_id INT PRIMARY KEY AUTO_INCREMENT ,
    name VARCHAR (150) NOT NULL
);

INSERT INTO categories (name) 
VALUES ('Memoir'),
    ('Dystopian Fiction'),
    ('Political Satire'),
    ('Classic Fiction'),
    ('Programming');

ALTER TABLE library_books 
ADD COLUMN category_id INT,
ADD CONSTRAINT fk_category 
FOREIGN KEY (category_id)
REFERENCES categories(category_id);

UPDATE library_books SET category_id =1  WHERE id = 1;
UPDATE library_books SET category_id = 2 WHERE id = 2;
UPDATE library_books SET category_id =3  WHERE id = 3;
UPDATE library_books SET category_id = 4 WHERE id = 4;
UPDATE library_books SET category_id = 2 WHERE id = 5;
UPDATE library_books SET category_id = 4 WHERE id = 6;
UPDATE library_books SET category_id = 4 WHERE id = 7;
UPDATE library_books SET category_id = 5 WHERE id = 8;


SELECT library_books.title,categories.name
FROM library_books
INNER JOIN categories ON library_books.category_id = categories.category_id;
