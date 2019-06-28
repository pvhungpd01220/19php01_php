-- câu 1: 
SELECT * FROM products 
INNER JOIN categories 
ON products.categoryID = categories.categoryID 
WHERE categories.categoryName LIKE 'Guitars' AND products.listPrice > 500
-- câu 2:
SELECT * FROM `products` 
WHERE dateAdded LIKE '2014-07-%' AND listPrice >300 
ORDER BY listPrice DESC
-- câu 3:
SELECT * FROM products 
INNER JOIN categories 
ON products.categoryID = categories.categoryID 
WHERE products.productName LIKE '%o%' AND categories.categoryName = 'Basses' 
ORDER BY products.productName DESC
-- câu 4:
SELECT * FROM products 
INNER JOIN orderitems ON products.productID = orderitems.productID  
INNER JOIN orders ON orderitems.orderID =orders.orderID  
INNER JOIN customers ON orders.customerID = customers.customerID 
WHERE customers.emailAddress LIKE '%gmail%'
-- câu 5: 
SELECT * FROM `products` 
WHERE listPrice > 300 AND dateAdded LIKE '2014-%' 
ORDER BY listPrice DESC 
LIMIT 4
-- câu 6:

