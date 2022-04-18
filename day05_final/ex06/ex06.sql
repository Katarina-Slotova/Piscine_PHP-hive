USE db_kslotova;
SELECT title, summary
FROM film
WHERE LOCATE('vincent', summary)
ORDER BY id_film;