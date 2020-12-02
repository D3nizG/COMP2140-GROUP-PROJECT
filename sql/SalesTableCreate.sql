USE SevenMilesHardwareDB;
CREATE TABLE Sales (
    id INT AUTO_INCREMENT,
    quantity INT,
    itemsArrayString VARCHAR(2048),
    totalPrice INT,
    datePurchased DATE,
    PRIMARY KEY(id))
    
as
select distinct
    Users.id,
    Users.username
from Users;