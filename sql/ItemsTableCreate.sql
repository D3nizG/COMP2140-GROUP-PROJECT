USE SevenMilesHardwareDB;
DROP TABLE IF EXISTS Items;
CREATE TABLE Items (
    id INT AUTO_INCREMENT,
    itemName VARCHAR(64),
    quantity VARCHAR(64),
    price FLOAT(10,2),
    refName VARCHAR(64),
    totalSold INT,
    itemDescription TEXT,
    PRIMARY KEY(id));