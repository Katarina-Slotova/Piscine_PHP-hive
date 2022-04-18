USE db_kslotova;
SELECT COUNT(id_film) AS 'movies'
FROM member_history
WHERE `date` > DATE("2006-10-30") AND `date` < DATE("2007-07-27") OR MONTH(`date`) = 12 AND DAY(`date`) = 24;



Display the total number of movies (film) watched between 2006-10-30
and 2007-07-27 in a column named movies and add to that result the the
number of movies watched on Christmas Eve (December 24th every year).

(condition1 && condition2) || (condition1 && condition2)