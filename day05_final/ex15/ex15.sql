SELECT REVERSE(SUBSTRING(phone_number, 2, 9)) AS 'rebmunenohp'
FROM distrib
WHERE phone_number LIKE '%05%'





Display all the distributors’ phone_number starting with ”05” in a
column named rebmunenohp with the following constraints: remove the
number 0 before the 5 and reverse the numbers (ex : 0542842169 ->
961248245).