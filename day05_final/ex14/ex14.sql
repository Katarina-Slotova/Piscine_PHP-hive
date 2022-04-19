SELECT floor_number AS 'floor', SUM(nb_seats) AS 'seats'
FROM cinema
GROUP BY floor_number /* lists the number of seats on each floor */
ORDER BY SUM(nb_seats) DESC; /* sorted high to low */