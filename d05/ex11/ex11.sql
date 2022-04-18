SELECT UPPER(last_name) AS 'NAME', first_name, price
FROM user_card
INNER JOIN member
ON user_card.id_user = member.id_user_card
INNER JOIN subscription
ON member.id_sub = subscription.id_sub
WHERE price > 42
ORDER BY last_name, first_name;



Display the last_name in uppercase in a NAME column, the first_name and
the price of the members having a subscription higher than 42 euros.
The results must be ordered by ascending last_name then by ascending
first_name.