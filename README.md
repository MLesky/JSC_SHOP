# Joyous Shopping Center
## Online shopping management system
## Using PHP and MySQ ane XAMP as server

---
* Start server

Follow the instructions
1. Create a new database

        CREATE DATABASE jsc_shop

2. Create manager's table

        CREATE TABLE `jsc_shop`.`manager` (
                `ID` INT NOT NULL AUTO_INCREMENT , 
                `names` VARCHAR(255) NOT NULL , 
                `email` VARCHAR(255) NOT NULL , 
                `contact` VARCHAR(255) NOT NULL , 
                `password` VARCHAR(255) NOT NULL , 
                PRIMARY KEY (`ID`)
        ) ENGINE = InnoDB;

3. Insert manager's details (You can insert your own values)

        INSERT INTO `manager` 
        (`ID`, `names`, `email`, `contact`, `password`) 
        VALUES (NULL, 'JSC Shop', 'joyoussc@gmail.com', '+237679682626', 'MyOnlineShopping')

4. Create clients table

        CREATE TABLE `jsc_shop`.`clients` (
                `ID` INT NOT NULL AUTO_INCREMENT , 
                `firstname` VARCHAR(255) NOT NULL , 
                `secondname` VARCHAR(255) NOT NULL , 
                `fullnames` VARCHAR(255) NOT NULL , 
                `email` VARCHAR(255) NOT NULL , 
                `contact` VARCHAR(255) NOT NULL , 
                `gender` VARCHAR(255) NOT NULL , 
                `date_of_birth` DATE NOT NULL , 
                `address` VARCHAR(255) NOT NULL , 
                `country` VARCHAR(255) NOT NULL , 
                `username` VARCHAR(255) NOT NULL , 
                `password` VARCHAR(255) NOT NULL , 
                PRIMARY KEY (`ID`)
        ) ENGINE = InnoDB;

5. Create new user account for connecting to database (to be used in the connection.php file)
        
        * hostname: localhost
        * password: test1234
        * username: lespa
        * database: jsc_shop

6. Create table for products

        CREATE TABLE `jsc_shop`.`products` (
                `ID` INT NOT NULL AUTO_INCREMENT , 
                `name` VARCHAR(255) NOT NULL , 
                `price` DOUBLE NOT NULL , 
                `catergory` VARCHAR(255) NOT NULL , 
                `comment` VARCHAR(255) NOT NULL , 
                `image` VARCHAR(255) NOT NULL, 
                `date_post` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`ID`)
                
                ) ENGINE = InnoDB

7. Create purchase table

        CREATE TABLE `jsc_shop`.`purchases` (
                `no` INT NOT NULL AUTO_INCREMENT , 
                `client_username` VARCHAR(255) NOT NULL , 
                `product_id` INT NOT NULL , 
                `ispurchased` VARCHAR(255) NOT NULL , 
                `date_purchase` TIMESTAMP NULL DEFAULT NULL , 
                PRIMARY KEY (`no`)
                ) ENGINE = InnoDB;

###Left to:
* Client to delete orders from cart
* Manager to delete products from database
* Client to view all purchases
* Manager to view all clients and their purchases