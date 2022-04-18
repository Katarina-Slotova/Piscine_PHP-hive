USE db_kslotova;
SELECT COUNT(*) AS 'nb_short-films'
FROM film
WHERE duration <= 42;