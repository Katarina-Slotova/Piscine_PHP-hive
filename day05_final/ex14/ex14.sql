USE db_kslotova;
SELECT floor_number AS 'floor', SUM(nb_seats) AS 'seats'
FROM cinema
GROUP BY floor_number /* lists the number of seats on each floor */
ORDER BY SUM(nb_seats) DESC; /* sorted high to low */


For each floor of a cinema, display the floor_number in a column named
floor and the total of nb_seats by floor in a column named 'seats'.
The result must be ordered by floor with the highest number of seats
to the floor with the least number of seats.