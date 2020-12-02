USE SevenMilesHardwareDB;
DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders (
    id INT AUTO_INCREMENT,
    quantity VARCHAR(64),
    itemName VARCHAR(64),
    customerID INT,
    datePurchased DATE,
    PRIMARY KEY(id));