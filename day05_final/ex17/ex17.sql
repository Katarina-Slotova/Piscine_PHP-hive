USE db_kslotova;
SELECT COUNT(id_sub) AS 'nb_susc', ROUND(AVG(price)) AS 'av_susc', MOD(SUM(duration_sub), 42) AS 'ft'
FROM subscription;


Display the number of offered subscription in a column named nb_susc,
as well as the average subscription price, rounded (down) to the nearest unit in a column named av_susc. There must be a third column named
ft displaying the sum of the subscription durations, modulo 42.