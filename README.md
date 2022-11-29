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