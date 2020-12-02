USE SevenMilesHardwareDB;
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
<<<<<<< HEAD
     id INT AUTO_INCREMENT NOT NULL,
=======
    id INT AUTO_INCREMENT NOT NULL,
>>>>>>> e091cdf67b2de8307b69d40180ba3faabdff9cc8
    username VARCHAR(64) UNIQUE NOT NULL,
    passcode VARCHAR(255) NOT NULL,
    email VARCHAR(64) UNIQUE NOT NULL,
    dateCreated DATE,
    PRIMARY KEY(id));