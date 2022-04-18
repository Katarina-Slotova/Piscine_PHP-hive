SELECT COUNT(/* PLACEHOLDER FOR SUBSCRIPTION NUMBER */) AS 'nb_susc', ROUND(AVG(/* PLACEHOLDER FOR AVERAGE SUBSRIPTION PRICE */)) AS 'av_susc', MOD(SUM(/* PLACEHOLDER FOR AVERAGE SUBSRIPTION DURATION */), 42) AS 'ft'
FROM /* LITERALLY NO IDEA WHERE FROM BEACUSE FREAKIN RESOURCES NOT AVAILABLE */;


Display the number of offered subscription in a column named nb_susc,
as well as the average subscription price, rounded (down) to the nearest unit in a column named av_susc. There must be a third column named
ft displaying the sum of the subscription durations, modulo 42.