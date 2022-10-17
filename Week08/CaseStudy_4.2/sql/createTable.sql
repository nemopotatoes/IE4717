DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS sales;
DROP TABLE IF EXISTS products;

CREATE TABLE IF NOT EXISTS products (
    productID INT UNSIGNED  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(30) NOT NULL,
    productPrice DOUBLE NOT NULL
);

CREATE TABLE IF NOT EXISTS orders (
    productID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    qty INT,
    FOREIGN KEY (productID) REFERENCES products(productID)
);


CREATE TABLE IF NOT EXISTS sales (
    productID INT UNSIGNED NOT NULL PRIMARY KEY,
    productName VARCHAR(30) NOT NULL,
    totalSales DOUBLE NOT NULL,
    FOREIGN KEY (productID) REFERENCES products(productID)
);



-- initialise

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

INSERT INTO sales (productID, productName, totalSales)
    VALUES (1, 'endless_cup', 0.0);
INSERT INTO sales (productID, productName, totalSales)
    VALUES (2, 'single_cafeaulait', 0.0);
INSERT INTO sales (productID, productName, totalSales)
    VALUES (3, 'double_cafeaulait', 0.0);
INSERT INTO sales (productID, productName, totalSales)
    VALUES (4, 'single_cappu', 0.0);
INSERT INTO sales (productID, productName, totalSales)
    VALUES (5, 'double_cappu', 0.0);
