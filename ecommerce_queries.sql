-- Retrieve the top 5 customers with the highest total spending
SELECT user_id, SUM(total_amount) AS total_spent
FROM orders
GROUP BY user_id
ORDER BY total_spent DESC
LIMIT 5;

-- Get the total revenue for the current month
SELECT SUM(total_amount) AS total_revenue
FROM orders
WHERE MONTH(created_at) = MONTH(CURRENT_DATE()) 
AND YEAR(created_at) = YEAR(CURRENT_DATE());

-- List the most sold products
SELECT oi.product_id, SUM(oi.quantity) AS total_sold
FROM order_items oi
GROUP BY oi.product_id
ORDER BY total_sold DESC;
