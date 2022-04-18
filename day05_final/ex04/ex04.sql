UPDATE ft_table
SET creation_date = DATEADD(year, 20, creation_date)
WHERE id > 5;