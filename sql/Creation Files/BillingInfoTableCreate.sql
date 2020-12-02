USE SevenMilesHardwareDB;
DROP TABLE IF EXISTS Billing_Info;
CREATE TABLE Billing_Info (
    id INT AUTO_INCREMENT,
    cardnumber INT,
    cardholder VARCHAR(64),
    expDateMonth INT,
    expDateYear INT,
    streetName VARCHAR(64),
    city VARCHAR(64),
    parish VARCHAR(64),
    PRIMARY KEY(id));