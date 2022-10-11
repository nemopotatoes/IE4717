DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
    productID INT UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(30) NOT NULL,
    productPrice DOUBLE NOT NULL
);

-- initialise table items
INSERT INTO products (productID, productName, productPrice) 
    VALUES (1, 'endless_cup', 2.00);
INSERT INTO products (productID, productName, productPrice) 
    VALUES (2, 'single_cafeaulait', 2.00);
INSERT INTO products (productID, productName, productPrice) 
    VALUES (3, 'double_cafeaulait', 3.00);
INSERT INTO products (productID, productName, productPrice) 
    VALUES (4, 'single_cappu', 4.75);
INSERT INTO products (productID, productName, productPrice) 
    VALUES (5, 'double_cappu', 5.75);