-- cau 1
SELECT * FROM products
INNER JOIN categories
ON products.categoriesID = categories.categoriesID WHERE categories.categoriesName LIKE '%a%'
-- cau 2
SELECT * FROM products
WHERE