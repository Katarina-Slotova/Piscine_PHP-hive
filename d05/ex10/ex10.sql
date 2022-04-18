SELECT title AS 'Title', summary AS 'Summary', prod_year
FROM film
/* POSSIBLY INNER JOIN IF TWO TABLES */
/* POSSIBLY ON IF TWO TABLES table1.column_name = table2.column_name; */
WHERE /* PLACEHOLDER FOR THE NAME OF THE GENRE OF THE FILM */ = 'erotic'
ORDER BY prod_year DESC;