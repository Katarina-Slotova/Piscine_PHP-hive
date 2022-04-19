SELECT `name` FROM distrib WHERE id_distrib = 42 OR id_distrib BETWEEN 62 AND 69 OR id_distrib = 71 OR id_distrib BETWEEN 88 AND 90 OR `name` REGEXP '^[^y]*y[^y]*y[^y]*$' LIMIT 2, 5;
/* LIMIT’s optional OFFSET argument is placed before the argument indicating the 
number of returned rows. It indicates the position of the first row returned by LIMIT 
(i.e. ‘0’ is the first row, 1 is the second row, etc.). */
/* `name` LIKE '%y%y%' AND name NOT LIKE '%y%y%y%' */