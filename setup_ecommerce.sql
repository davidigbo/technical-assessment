CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    total_amount DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL CHECK (quantity > 0),
    price DECIMAL(10,2) NOT NULL CHECK (price >= 0),
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE
);


INSERT INTO orders (user_id, total_amount, created_at) VALUES
(1, 150.00, '2025-02-01'),
(2, 250.50, '2025-02-02'),
(3, 320.00, '2025-02-03'),
(1, 200.00, '2025-02-04'),
(2, 180.00, '2025-02-05');

INSERT INTO order_items (order_id, product_id, quantity, price) VALUES
(1, 101, 2, 50.00),
(1, 102, 1, 50.00),
(2, 103, 5, 50.10),
(3, 101, 3, 100.00),
(4, 104, 2, 100.00),
(5, 105, 4, 45.00);
