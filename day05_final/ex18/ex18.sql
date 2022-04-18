SELECT name
FROM distrib
WHERE id_distrib = 42 
OR id_distrib BETWEEN 62 AND 69
OR id_distrib = 71 
OR id_distrib BETWEEN 88 AND 90
OR (name LIKE '%y%y%' OR name LIKE '%y%Y%' OR name LIKE '%Y%y%' OR name LIKE '%Y%Y%')
LIMIT 2, 5; /* LIMIT’s optional OFFSET argument is placed before the argument indicating the 
number of returned rows. It indicates the position of the first row returned by LIMIT 
(i.e. ‘0’ is the first row, 1 is the second row, etc.). */



Display the name of the distributors who have the following id_distrib:
42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89 and 90 as well as
distributors with 'y' or 'Y' exactly twice in their name. The final
list will be a sample of 5 results starting from the third result.