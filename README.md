# Grocery-store

Enter this query to create a user data accounting table.

-- Creating a Database
CREATE DATABASE registerUserDB;

-- Using the created database
USE registerUserDB;

-- Creating a table with the required fields
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

Enter this query to create a product data accounting table.

-- Creating a Database
CREATE DATABASE wholesale_store;

-- Using the created database
USE wholesale_storeDB;

-- Creating a table with the required fields
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    quantity INT NOT NULL UNIQUE
);

