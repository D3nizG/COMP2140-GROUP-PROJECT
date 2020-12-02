USE SevenMilesHardwareDB;
CREATE TABLE Items (
    id INT AUTO_INCREMENT,
    itemName VARCHAR(64),
    quantity VARCHAR(64),
    price VARCHAR(64),
    refName VARCHAR(64),
    totalSold INT,
    itemDescription TEXT,
    PRIMARY KEY(id));