SELECT title, summary
FROM film
WHERE LOCATE('42', title) OR LOCATE('42', summary)
ORDER BY /* PLACEHOLDER FOR THE LEN OF THE FILM */;