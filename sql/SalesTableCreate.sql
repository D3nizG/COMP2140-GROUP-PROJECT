USE SevenMilesHardwareDB;
DROP TABLE IF EXISTS Sales;
CREATE TABLE Sales (
    id INT AUTO_INCREMENT,
    quantity INT,
    itemsArrayString VARCHAR(2048),
    totalPrice INT,
    datePurchased DATE,
    customerID INT,
    customerName VARCHAR(64),
    PRIMARY KEY(id));