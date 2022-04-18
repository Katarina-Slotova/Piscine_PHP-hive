USE db_kslotova;
SELECT DATEDIFF(day, MAX(`date`), MIN(`date`)) AS 'uptime'
FROM member_history;




Display in a column named uptime the number of absolute days separating
the oldest viewing of a movie with the most recent.