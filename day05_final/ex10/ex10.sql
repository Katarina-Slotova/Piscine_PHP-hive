SELECT title AS 'Title', summary AS 'Summary', prod_year
FROM film
INNER JOIN genre
ON film.id_genre = genre.id_genre
/* POSSIBLY ON IF TWO TABLES table1.column_name = table2.column_name; */
WHERE genre.name = 'erotic'
ORDER BY prod_year DESC;