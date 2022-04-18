SELECT last_name, first_name
FROM user_card
WHERE last_name LIKE '%-%' OR first_name LIKE '%-%'
ORDER BY last_name, first_name;



Display the last_name and first_name of every user with a doublebarrelled last_name and/or first_name, alphabetically ordered by last_name
then by first_name.