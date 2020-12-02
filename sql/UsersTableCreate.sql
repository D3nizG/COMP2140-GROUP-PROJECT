USE SevenMilesHardwareDB;
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    id INT AUTO_INCREMENT,
    username VARCHAR(64),
    passcode VARCHAR(64),
    email VARCHAR(64),
    dateCreated DATE,
    PRIMARY KEY(id));